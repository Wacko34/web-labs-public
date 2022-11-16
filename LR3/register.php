<?php
    require_once 'logic.php';
    // print_r($_SESSION);
    if (isset($_SESSION['email']) && !empty($_SESSION['email']))
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax StarterKit Plus white Комплект беспроводной GSM-сигнализации - ВИДЕОГЛАЗ Волгоград</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- https://bootstraptema.ru/stuff/snippets_bootstrap/sliders/bootstrap_thumbnail_slider/28-1-0-1116 -->
    <!-- CSS only -->
</head>
<body>
    <div class="container">
        <div class="container text-end">
            <a href="#">
                <img src="img/ya.png"  alt="Яндекс">
                <strong class="text-dark">4.7</strong>
            </a>
            <a href="https://partner.videoglaz.ru/">Франшиза</a>
            <a href="#" class="text-danger">B2B-портал</a>
        </div>

        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" class="col" alt="videoglaz logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-inline-flex">
                        <input class="form-control me-1" type="search"placeholder="Поиск среди 45000 товаров" aria-label="Search">
                        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button>
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item pt-4">
                            <a class="nav-link link-primary text-center" href="#">Волгоград</a>
                            <p class="px-2">и ещё 77 регионов</p>
                        </li>
                        <li class="nav-item pt-5">
                            <a class="nav-link link-primary" href="mailto:pokupka@videoglaz.ru">
                                <p class="flex-center">pokupka@videoglaz.ru</p>
                            </a>
                        </li>
                        <li class="nav-item pt-5">
                            <a class="nav-link link-primary" href="#">Мой кабинет</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-primary" href="#">Звоните, мы работаем</a>
                            <a class="nav-link link-primary" href="#">8 800 555 35 55</a>
                            <!--<button>Заказать звонок</button>-->
                            <button type="button" class="btn btn-outline-primary btn-sm col-12">Заказать звонок</button>
                        </li>
                        <li class="nav-item pt-4">
                            <a class="nav-link" href="#">Товаров <span class="text-primary">0</span>
                                <br>
                                на сумму <span class="text-primary">0 рублей</span>
                            </a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <nav class="container mt-3">
            <div class="row">
                <div class="col-2">
                    Каталог товаров
                </div>

                <div class="col">
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">О компании</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">О компании</a></li>
                                    <li><a class="dropdown-item" href="#">Клиенты</a></li>
                                    <li><a class="dropdown-item" href="#">Благодарственные письма</a></li>
                                    <li><a class="dropdown-item" href="#">СМИ о нас</a></li>
                                    <li><a class="dropdown-item" href="#">Новости</a></li>
                                    <li><a class="dropdown-item" href="#">Карьера</a></li>
                                    <li><a class="dropdown-item" href="#">Сертификаты партнерства</a></li>
                                    <li><a class="dropdown-item" href="#">Блог</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Блог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Адреса и контакты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Доставка и оплата</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Монтаж</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Гарантия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Поставщикам</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Стать партнером</a>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>

        <div class="col-3 text-center">
            <h2>Регистрация</h2>
            <p style="text-danger">
                <?php 
                if (isset($_SESSION['reg_msg']) && !empty($_SESSION['reg_msg']))
                {
                    $msg = $_SESSION['reg_msg'];
                    echo "<p style=\"text-danger\">$msg</p>";
                }
            ?>
            </p>
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label class="form-label center-block">Электронная почта</label>
                    <input class="form-control" type="text" name="email" placeholder="name@example.com" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Пароль</label>
                    <input class="form-control" type="password" name="pass1" placeholder="Пароль">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Повторите пароль</label>
                    <input class="form-control" type="password" name="pass2" placeholder="Повторите пароль">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Имя</label>
                    <input class="form-control" type="text" name="name" placeholder="Имя" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Фамилия</label>
                    <input class="form-control" type="text" name="surname" placeholder="Фамилия" value="<?php if(isset($_POST['surname'])) {echo $_POST['surname'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Отчество</label>
                    <input class="form-control" type="text" name="patronymic" placeholder="Отество" value="<?php if(isset($_POST['patronymic'])) {echo $_POST['patronymic'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Год рождения</label>
                    <input class="form-control" type="date" name="yearofbirth" placeholder="1.01.2000" value="<?php if(isset($_POST['yearofbirth'])) {echo $_POST['yearofbirth'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Адрес</label>
                    <input class="form-control" type="text" name="address" placeholder="Адрес" value="<?php if(isset($_POST['address'])) {echo $_POST['address'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Пол</label>
                    <input class="form-control" type="text" name="floor" placeholder="Пол" value="<?php if(isset($_POST['floor'])) {echo $_POST['floor'];}  ?>">
                </div>
                <div class="text-center mb-3">
                    <select class="form-select" name="gender" >
                        <option class="text-center" value="man" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'man') echo 'selected'; ?>>Man</option>
                        <option class="text-center" value="woman" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'woman') echo 'selected'; ?>>Woman</option>
                        <option class="text-center" value="bigender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bigender') echo 'selected'; ?>>bigender</option>
                        <option class="text-center" value="transgender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'transgender') echo 'selected'; ?>>transgender</option>
                        <option class="text-center" value="agender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'agender') echo 'selected'; ?>>agender</option>
                        <option class="text-center" value="shreksexual" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'shreksexual') echo 'selected'; ?>>shreksexual</option>
                        <option class="text-center" value="intergender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'intergender') echo 'selected'; ?>>intergender</option>
                        <option class="text-center" value="bigpeepee" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bigpeepee') echo 'selected'; ?>>bigpeepee</option>
                        <option class="text-center" value="attack/civil helicopter" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'attack/civil helicopter') echo 'selected'; ?>>attack/civil helicopter</option>
                        <option class="text-center" value="pansexual" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'pansexual') echo 'selected'; ?>>pansexual</option>
                        <option class="text-center" value="nazi" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'nazi') echo 'selected'; ?>>nazi</option>
                        <option class="text-center" value="genderqueer" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'genderqueer') echo 'selected'; ?>>genderqueer</option>
                        <option class="text-center" value="third gender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'third gender') echo 'selected'; ?>>third gender</option>
                        <option class="text-center" value="soyboy" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'soyboy') echo 'selected'; ?>>soyboy</option>
                        <option class="text-center" value="keychain" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'keychain') echo 'selected'; ?>>keychain</option>
                        <option class="text-center" value="travesti n-b" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'travesti n-b') echo 'selected'; ?>>travesti n-b</option>
                        <option class="text-center" value="epicene" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'epicene') echo 'selected'; ?>>epicene</option>
                        <option class="text-center" value="demigirl" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'demigirl') echo 'selected'; ?>>demigirl</option>
                        <option class="text-center" value="demiboy" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'demiboy') echo 'selected'; ?>>demiboy</option>
                        <option class="text-center" value="o" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'o') echo 'selected'; ?>>o</option>
                        <option class="text-center" value="androgyne" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'androgyne') echo 'selected'; ?>>androgyne</option>
                        <option class="text-center" value="church map icon" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'church map icon') echo 'selected'; ?>>church map icon</option>
                        <option class="text-center" value="femme" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'femme') echo 'selected'; ?>>femme</option>
                        <option class="text-center" value="butch" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'butch') echo 'selected'; ?>>butch</option>
                        <option class="text-center" value="xbox user" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'xbox user') echo 'selected'; ?>>xbox user</option>
                        <option class="text-center" value="african american" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'african american') echo 'selected'; ?>>african american</option>
                        <option class="text-center" value="genderfluid" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'genderfluid') echo 'selected'; ?>>genderfluid</option>
                        <option class="text-center" value="toxic-ass shithead" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'toxic-ass shithead') echo 'selected'; ?>>toxic-ass shithead</option>
                        <option class="text-center" value="poligender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'poligender') echo 'selected'; ?>>poligender</option>
                        <option class="text-center" value="mayonnaise" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'mayonnaise') echo 'selected'; ?>>mayonnaise</option>
                        <option class="text-center" value="special snowflake" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'special snowflake') echo 'selected'; ?>>special snowflake</option>
                        <option class="text-center" value="intergenderfluid" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'intergenderfluid') echo 'selected'; ?>>intergenderfluid</option>
                        <option class="text-center" value="pedophile" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'pedophile') echo 'selected'; ?>>pedophile</option>
                        <option class="text-center" value="bi-mayonnaise" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bi-mayonnaise') echo 'selected'; ?>>bi-mayonnaise</option>
                        <option class="text-center" value="aliagender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'aliagender') echo 'selected'; ?>>aliagender</option>
                        <option class="text-center" value="redditard" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'redditard') echo 'selected'; ?>>redditard</option>
                        <option class="text-center" value="commie" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'commie') echo 'selected'; ?>>commie</option>
                        <option class="text-center" value="uranus" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'uranus') echo 'selected'; ?>>uranus</option>
                        <option class="text-center" value="whore" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'whore') echo 'selected'; ?>>whore</option>
                        <option class="text-center" value="universalserialbus" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'universalserialbus') echo 'selected'; ?>>universalserialbus</option>
                        <option class="text-center" value="neutrosis" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neutrosis') echo 'selected'; ?>>neutrosis</option>
                        <option class="text-center" value="bigender&third gender & demiboy" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bigender&third gender & demiboy') echo 'selected'; ?>>bigender&third gender & demiboy</option>
                        <option class="text-center" value="demiagender with demigerl" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'demiagender with demigerl') echo 'selected'; ?>>demiagender with demigerl</option>
                        <option class="text-center" value="AEUGH" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'AEUGH') echo 'selected'; ?>>AEUGH</option>
                        <option class="text-center" value="complete fookin wetawd uwu" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'complete fookin wetawd uwu') echo 'selected'; ?>>complete fookin wetawd uwu</option>
                        <option class="text-center" value="john doe" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'john doe') echo 'selected'; ?>>john doe</option>
                        <option class="text-center" value="cancer" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'cancer') echo 'selected'; ?>>cancer</option>
                        <option class="text-center" value="genderfluid(demigirl & third gender)" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'genderfluid(demigirl & third gender)') echo 'selected'; ?>>genderfluid(demigirl & third gender)</option>
                        <option class="text-center" value="Genderfluid(adrogyne & female)" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Genderfluid(adrogyne & female)') echo 'selected'; ?>>Genderfluid(adrogyne & female)</option>
                        <option class="text-center" value="Bigender(adrogyne & neutrosis)" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Bigender(adrogyne & neutrosis)') echo 'selected'; ?>>Bigender(adrogyne & neutrosis)</option>
                        <option class="text-center" value="Друг" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Друг') echo 'selected'; ?>>Друг</option>
                        <option class="text-center" value="Demiagender(with third gender)" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'woman') echo 'selected'; ?>>Woman</option>
                        <option class="text-center" value="bowling ball" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bowling ball') echo 'selected'; ?>>bowling ball</option>
                        <option class="text-center" value="crop circle" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'crop circle') echo 'selected'; ?>>crop circle</option>
                        <option class="text-center" value="coom demon" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'coom demon') echo 'selected'; ?>>coom demon</option>
                        <option class="text-center" value="mercury" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'mercury') echo 'selected'; ?>>mercury</option>
                        <option class="text-center" value="illuminati" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'illuminati') echo 'selected'; ?>>illuminati</option>
                        <option class="text-center" value="jew" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'jew') echo 'selected'; ?>>jew</option>
                        <option class="text-center" value="men that pee without aiming" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'men that pee without aiming') echo 'selected'; ?>>men that pee without aiming</option>
                        <option class="text-center" value="chair" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'chair') echo 'selected'; ?>>chair</option>
                        <option class="text-center" value="mayonnaise on chair" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'mayonnaise on chair') echo 'selected'; ?>>mayonnaise on chair</option>
                        <option class="text-center" value="eldritch abomination" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'eldritch abomination') echo 'selected'; ?>>eldritch abomination</option>
                        <option class="text-center" value="bold & brash" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bold & brash') echo 'selected'; ?>>bold & brash</option>
                        <option class="text-center" value="cool kid" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'cool kid') echo 'selected'; ?>>cool kid</option>
                        <option class="text-center" value="a turn-off" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'a turn-off') echo 'selected'; ?>>a turn-off</option>
                        <option class="text-center" value="pastafarianin" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'pastafarianin') echo 'selected'; ?>>pastafarianin</option>
                        <option class="text-center" value="pussy" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'pussy') echo 'selected'; ?>>pussy</option>
                        <option class="text-center" value="Mr. Worldwide" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Mr. Worldwide') echo 'selected'; ?>>Mr. Worldwide</option>
                        <option class="text-center" value="meteorite" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'meteorite') echo 'selected'; ?>>meteorite</option>
                        <option class="text-center" value="the man behind the wlaughter" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'the man behind the wlaughter') echo 'selected'; ?>>the man behind the wlaughter</option>
                        <option class="text-center" value="bi-mayonnaise on chair" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'bi-mayonnaise on chair') echo 'selected'; ?>>bi-mayonnaise on chair</option>
                        <option class="text-center" value="mike wazowski" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'mike wazowski') echo 'selected'; ?>>mike wazowski</option>
                        <option class="text-center" value="weed" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'weed') echo 'selected'; ?>>weed</option>
                        <option class="text-center" value="traffict light" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'traffict light') echo 'selected'; ?>>traffict light</option>
                        <option class="text-center" value="cum chalice" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'cum chalice') echo 'selected'; ?>>cum chalice</option>
                        <option class="text-center" value="eggman" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'eggman') echo 'selected'; ?>>eggman</option>
                        <option class="text-center" value="eggwoman" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'eggwoman') echo 'selected'; ?>>eggwoman</option>
                        <option class="text-center" value="monkie" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'monkie') echo 'selected'; ?>>monkie</option>
                        <option class="text-center" value="philosophers stone" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'philosophers stone') echo 'selected'; ?>>philosophers stone</option>
                        <option class="text-center" value="fourth gender" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'fourth gender') echo 'selected'; ?>>fourth gender</option>
                        <option class="text-center" value="я русский" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'я русский') echo 'selected'; ?>>я русский</option>
                        <option class="text-center" value="другое" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'другое') echo 'selected'; ?>>другое</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Ссылка на VK</label>
                    <input class="form-control" type="text" name="vk" placeholder="Ссылка на профиль ВК" value="<?php if(isset($_POST['vk'])) {echo $_POST['vk'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Интересы</label>
                    <input class="form-control" type="text" name="interests" placeholder="Интересы" value="<?php if(isset($_POST['interests'])) {echo $_POST['interests'];}  ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label center-block">Группа крови</label>
                    <input class="form-control" type="text" name="blood_type" placeholder="Группа крови..." value="<?php if(isset($_POST['blood_type'])) {echo $_POST['blood_type'];}  ?>">
                </div>
                
                <div class="mb-3">
                    <label class="form-label center-block">Резус фактор</label>
                    <input class="form-control" type="text" name="rh_factor" placeholder="Резус фактор" value="<?php if(isset($_POST['rh_factor'])) {echo $_POST['rh_factor'];}  ?>">
                </div>
                <div class="mb-3">Уже зарегистрированы? <a href="login.php">Войти</a></div>
                <div class="mb-3">
                    <button type="submit" name="register" class="btn btn-outline-primary col-12">Регистрация</button> 
                </div>
            </form>
                
        </div>

<!-- ФИО, дата рождения, адрес, пол, интересы (текстом), ссылка на профиль ВК, группа крови, резус-фактор -->  

        <!--footer-->

        <div class="container bg-primary mt-5">
            <div class="row p-5">
                <div class="col text-white text-left fs-6"><p>ООО «ВИДЕОГЛАЗ ЦЕНТР»</p>
                    <div class="row pt-4">
                        <div class="col">
                            <div>
                                Юридический адрес:
                                101000,Россия, Москва,
                                пер. Уланский, д. 22 стр. 1, этаж 6,
                                ком./офис 83/31
                            </div>
                            <div class="mt-2">
                                Фактический адрес:
                                Россия, ул. Канунникова,
                                6/1
                            </div>
                        </div>
                        <div class="col">
                            <p>
                                ИНН: 7719840097
                                КПП: 770801001
                                ОГРН: 1137746240279
                            </p>
                            <p class="mt-2">© 2002-2022 "Видеоглаз"</p>
                            <div>
                                <a href="#" class="link-light">Политика конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-white text-left fs-6"><p>МЕНЮ</p>
                    <div class="row row-cols-2 pt-4">
                        <div class="col"><a href="#" class="link-light" >О компании</a></div>
                        <div class="col"><a href="#" class="link-light" >Гарантия</a></div>
                        <div class="col"><a href="#" class="link-light" >Новости</a></div>
                        <div class="col"><a href="#" class="link-light" >Монтаж</a></div>
                        <div class="col"><a href="#" class="link-light" >Клиенты</a></div>
                        <div class="col"><a href="#" class="link-light" >Адреса и контакты</a></div>
                        <div class="col"><a href="#" class="link-light" >Работа</a></div>
                        <div class="col"><a href="#" class="link-light" >B2B портал</a></div>
                        <div class="col"><a href="#" class="link-light" >Доставка и оплата</a></div>
                        <div class="col"><a href="#" class="link-light" >Франшиза</a></div>
                    </div>
                </div>
                <div class="col text-white text-left fs-6"><p>КОНТАКТЫ</p>
                    <a href="tel:+74951250656" class="link-light">
                        <p itemprop="telephone"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg> +7 (495) 256-01-36</p>
                    </a>
                    <a class="nav-link link-light" href="mailto:pokupka@videoglaz.ru">
                        <p class="flex-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            pokupka@videoglaz.ru</p>
                    </a>
                    <div class="row">
                        <div class="col">
                            <div class="col text-center"><a href="#" class="link-light" >VK</a></div>
                        </div>
                        <div class="col">
                            <div class="col text-center"><a href="#" class="link-light " >Telegram</a></div>
                        </div>
                        <div class="col">
                            <div class="col text-center"><a href="#" class="link-light" >Youtube</a></div>
                        </div>
                    </div>
                    <div class="center-block">
                        <button type="button" class="col-8 p-2 mt-4">Связь с отделом</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>