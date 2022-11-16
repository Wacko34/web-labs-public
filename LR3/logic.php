<?php
	session_start();
    global $pdo;
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=guards_info", "root", "");
    }
    catch (PDOException $e) {
        //echo "Database error: " . $e->getMessage();

        echo $e->getMessage();
    	die;
    }



    if(isset($_POST['register'])) // Если кнопка регистрации нажата 
    {
        // init params
        $email = $_POST['email'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $yearofbirth = $_POST['yearofbirth'];
        $address = $_POST['address'];
        $floor = $_POST['floor'];
        $gender = $_POST['gender'];
        $vk = $_POST['vk'];
        $interests = $_POST['interests'];
        $blood_type = $_POST['blood_type'];
        $rh_factor = $_POST['rh_factor'];

        if (validate_email($_POST['email']) && validate_pass($_POST['pass1'], $_POST['pass2'])) 
        {
            // https://habr.com/ru/post/194972/
            $hash = password_hash($_POST['pass1'], PASSWORD_DEFAULT);

            // Проверка на совпадение логина с логинами из бд
            $sql = "SELECT * FROM `users` WHERE `email` LIKE :email";
            $email_bind['email'] = htmlspecialchars($_POST['email']);
            $sel = $pdo->prepare($sql);
            $sel->execute($email_bind);
            if($sel->fetchAll())
            {
                // echo "Пользователь с таким логином уже существует";
                $_SESSION['reg_msg'] = "Пользователь с таким логином уже существует";
                // print_r($sel->fetchAll());
            }
            else 
            {
                $arr_binds = [];
                $arr_binds['email'] = htmlspecialchars($email);
                $arr_binds['password'] = $hash;
                $arr_binds['name'] = htmlspecialchars($name);
                $arr_binds['surname'] = htmlspecialchars($surname);
                $arr_binds['patronymic'] = htmlspecialchars($patronymic);
                $arr_binds['yearofbirth'] = htmlspecialchars($yearofbirth);
                $arr_binds['address'] = htmlspecialchars($address);
                $arr_binds['floor'] = htmlspecialchars($floor);
                $arr_binds['gender'] = htmlspecialchars($gender);
                $arr_binds['vk'] = htmlspecialchars($vk);
                $arr_binds['interests'] = htmlspecialchars($interests);
                $arr_binds['blood_type'] = htmlspecialchars($blood_type);
                $arr_binds['rh_factor'] = htmlspecialchars($rh_factor);
                $sth = $pdo->prepare("INSERT INTO `users` (`email`, `password`, `name`, `surname`, `patronymic`, `yearofbirth`, `address`, `floor`, `gender`, `vk`, `interests`, `blood_type`, `rh_factor`) VALUES (:email, :password, :name, :surname, :patronymic, :yearofbirth, :address, :floor, :gender, :vk, :interests, :blood_type, :rh_factor)");
                $sth->execute($arr_binds);
                $_SESSION['email'] = $_POST['email'];
                // $_SESSION['reg_msg'] = "Регистрация успешно завершена";
                $_SESSION['reg_msg'] = "";
                header('Location: index.php');
            }
        }
    }

    if(isset($_POST['login'])) // Если кнопка входа нажата 
    {
            setcookie("number_of_attempts");
            $arr_binds = [];

            // Проверка на совпадение логина с логинами из бд
            $sql = "SELECT * FROM `users` WHERE `email` LIKE :email";
            $arr_binds['email'] = htmlspecialchars($_POST['email']);
            $stmt = $pdo->prepare($sql);
            $stmt->execute($arr_binds);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $login_flag = true;

            if (isset($_COOKIE['number_of_attempts']))   
            {   
                if ($_COOKIE['number_of_attempts'] >= 2)
                {
                    $login_flag = false;
                    $_SESSION['login_msg'] = "Слишком много попыток входа, повторите попытку через час";
                    header('Location: login.php');
                }
            }


            if(password_verify($_POST['pass'], $result['password']) && $login_flag) // если такой логин и пароль найдены
            {
                // echo "Выполнен вход";
                // $_SESSION['msg'] = "Выполнен вход";
                $_SESSION['login_msg'] = "";
                $_SESSION['email'] = $result['email'];
                header('Location: index.php');
            }
            else 
            {
                $number_of_attempts = 0;
                if (isset($_COOKIE["number_of_attempts"])) 
                {
                    $number_of_attempts = $_COOKIE["number_of_attempts"] + 1;
                }
                setcookie("number_of_attempts", $number_of_attempts, time()+3600);
                // echo "неверный логин или пароль";
            }
    }

    function validate_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            // echo "E-mail адрес указан верно.\n";
            // $email_flag = true;
            return true;
        } 
        else {
            echo "E-mail адрес указан неверно.\n";
            $_SESSION['reg_msg'] = "Невалидный адрес электронной почты";
            return false;
        }
    }

    function validate_pass($pass1, $pass2)
    {
        $pattern = "/(?=.*[0-9])(?=.*[!@#$%^&*_ -])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*_ -]{6,}/";
        // валидный пароль - Gg_123 Gg 123
        if ($pass1 != $pass2) 
        {
            // echo "Пароли не совпадают";
            $_SESSION['reg_msg'] = "Пароли не совпадают";
            return false;
        }
        else if(preg_match($pattern, $pass1))
        {
            return true;
        }
        else    
        {
            // echo "Слабый пароль";
            $_SESSION['reg_msg'] = "Слабый пароль";
            return false;
        }
    }

?>