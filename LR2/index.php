<?php require_once 'logic.php'; ?>

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
                <a class="navbar-brand" href="#">
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

        <!-- guard_table -->

        <form action="" method="get">
        <h3 class="text-center mt-3">Найти охранника</h3>
        <p class="text-center mt-2">Имя сотрудника</p>
        <input class="form-control" type="text" name="full_name" value="<?php if(isset($_GET['full_name'])) {echo $_GET['full_name'];}  ?>">
        <p class="text-center mt-2">Биография</p>
        <textarea class="form-control" name="bio"><?php if(isset($_GET['bio'])) {echo $_GET['bio'];} ?></textarea>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center mt-3">Год рождения</p>
        <input class="form-control" type="number" name="year_of_birth" value="<?php if(isset($_GET['year_of_birth'])) {echo $_GET['year_of_birth'];}  ?>">
                </div>
                <div class="col">
                    <p class="text-center mt-3">Здание</p>
        <p class="text-center mt-3">
            <select class="form-select" name="building" >
                <option class="text-center" value="Корпус А" <?php if (isset($_GET['building']) && $_GET['building'] == 'Корпус А') echo 'selected'; ?>>Корпус А</option>
                <option class="text-center" value="Корпус Б" <?php if (isset($_GET['building']) && $_GET['building'] == 'Корпус Б') echo 'selected'; ?>>Корпус Б</option>
                <option class="text-center" value="Столовая" <?php if (isset($_GET['building']) && $_GET['building'] == 'Столовая') echo 'selected'; ?>>Столовая</option>
                <option class="text-center" value="Библиотека" <?php if (isset($_GET['building']) && $_GET['building'] == 'Библиотека') echo 'selected'; ?>>Библиотека</option>
                <option class="text-center" value="Корпус К" <?php if (isset($_GET['building']) && $_GET['building'] == 'Корпус К') echo 'selected'; ?>>Корпус К</option>
            </select>
        </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-outline-primary col-12">Поиск</button> 
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-primary col-12" name="clear_filter">Очистить</button>
                </div>
            </div>
        </div>
    </form>

    <?php if(count($guards) > 0):?>
        <table class="table table-bordered mt-3">
            <tr>
                <th>Фотография</th>
                <th>ФИО</th>
                <th>Биография</th>
                <th>Год рождения</th>
                <th>Здание</th>
            </tr>
        <?php foreach ($guards as $guard): ?>
            <tr>
                <td><?= "<img class=\"guard_photo\" src=$guard[1]>";?></td>
                <td><?= $guard[2] ?></td>
                <td><?= $guard[3] ?></td>
                <td><?= $guard[4] ?></td>
                <td><?= $guard[5] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

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
</html>\