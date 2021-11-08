<?php
$title = "BITFLIX";
$charset = "UTF-8";
$lang = 'pl';
$menu = ["Главная", "Сериалы", "Фильмы", "Новинки и популярное", "Мой список"];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="<?= $charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="wrapper">
        <header>
            <h1 class="logo_h1">
				<?= $title ?>
            </h1>
            <nav>
                <ul class="menu">
					<?php foreach ($menu as $item): ?>
                    <li class="menu-item">
                        <a href="#"><?= $item ?></a>
                    </li>
					<?php endforeach;?>
<!--                    <li class="menu-item menu-item__active">-->
<!--                        <a href="#">Сериалы</a></li>-->
<!--                    <li class="menu-item">-->
<!--                        <a href="#">Фильмы</a>-->
<!--                    </li>-->
<!--                    <li class="menu-item">-->
<!--                        <a href="#">Новинки и популярное</a>-->
<!--                    </li>-->
<!--                    <li class="menu-item">-->
<!--                        <a href="#">Мой список</a>-->
<!--                    </li>-->
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="header">
                <div class="header_wapper">
                    <form class="form_search" action="" method="get">
                        <div class="input_container">
                            <img src="icons/search.svg" alt="search">
                            <input name="s" placeholder="Поиск по каталогу..." type="search">
                        </div>
                    <button type="submit">Искать</button>
                    </form>
                    <button class="header_button">Добавить фильм</button>
                </div>
            </div>
            <div class="content">
                <div class="wrapper_movie">
                    <div class="movie_card">
                        <div class="movie_card_active">
                            <button class="active_button">подробнее</button>
                        </div>
                        <img src="img/Bond_IMG.jpg" alt="movie" class="movie_img">
                        <div class="movie_text">
                            <div class="movie_title">Не время умирать (2021)</div>
                            <div class="movie_subtitle">No Time to Die</div>
                            <div class="movie_hr"></div>
                            <div class="movie_descr">Джеймс Бонд оставил оперативную службу и наслаждается спокойной жизнью на Ямайке. Все меняется, когда на острове появляется его старый друг Феликс Лейтер из ЦРУ с просьбой о помощи.</div>
                            <div class="movie_wrapper">
                                <div class="movie_data">
                                    <div class="movie_time">
                                        <img src="icons/time.svg" alt="clock">
                                        <div class="time_descr">163 мин. / 02:43</div>
                                    </div>
                                    <div class="movie_genre">боевик, триллер, приключения</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="movie_card">
                        <div class="movie_card_active">
                            <button class="active_button">подробнее</button>
                        </div>
                        <img src="img/Duna_IMG.jpg" alt="movie" class="movie_img">
                        <div class="movie_text">
                            <div class="movie_title">Дюна (2021)</div>
                            <div class="movie_subtitle">Dune</div>
                            <div class="movie_hr"></div>
                            <div class="movie_descr">Человечество расселилось по далёким планетам, а за власть над обитаемым пространством постоянно борются разные могущественные семьи. В центре противостояния оказывается пустынная...</div>
                            <div class="movie_wrapper">
                                <div class="movie_data">
                                    <div class="movie_time">
                                        <img src="icons/time.svg" alt="clock">
                                        <div class="time_descr">163 мин. / 02:43</div>
                                    </div>
                                    <div class="movie_genre">боевик, триллер, приключения</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="movie_card">
                        <div class="movie_card_active">
                            <button class="active_button">подробнее</button>
                        </div>
                        <img src="img/DOM_IMG.jpg" alt="movie" class="movie_img">
                        <div class="movie_text">
                            <div class="movie_title">Бумажный дом</div>
                            <div class="movie_subtitle">La casa de parel</div>
                            <div class="movie_hr"></div>
                            <div class="movie_descr">Восемь воров берут заложников и запираются в Королевском монетном дворе Испании, пока криминальный авторитет манипулирует полицией, чтобы реализовать свой план.</div>
                            <div class="movie_wrapper">
                                <div class="movie_data">
                                    <div class="movie_time">
                                        <img src="icons/time.svg" alt="clock">
                                        <div class="time_descr">163 мин. / 02:43</div>
                                    </div>
                                    <div class="movie_genre">боевик, триллер, приключения</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="movie_card">
                        <div class="movie_card_active">
                            <button class="active_button">подробнее</button>
                        </div>
                        <img src="img/Women_IMG.jpg" alt="movie" class="movie_img">
                        <div class="movie_text">
                            <div class="movie_title">Чудо-женщина: 1984 (2020)</div>
                            <div class="movie_subtitle">Wonder Woman 1984</div>
                            <div class="movie_hr"></div>
                            <div class="movie_descr">1984 год. Диана всё ещё грустит по погибшему Стиву, борется с мелким криминалом и работает в музее Смитсоновского института. Однажды она знакомится с новой коллегой Барбарой, специалисткой широкого...</div>
                            <div class="movie_wrapper">
                                <div class="movie_data">
                                    <div class="movie_time">
                                        <img src="icons/time.svg" alt="clock">
                                        <div class="time_descr">163 мин. / 02:43</div>
                                    </div>
                                    <div class="movie_genre">боевик, триллер, приключения</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="movie_card">
                        <div class="movie_card_active">
                            <button class="active_button">подробнее</button>
                        </div>
                        <img src="img/RickMorti_IMG.jpg" alt="movie" class="movie_img">
                        <div class="movie_text">
                            <div class="movie_title">Рик и Морти</div>
                            <div class="movie_subtitle">Rick and Morty</div>
                            <div class="movie_hr"></div>
                            <div class="movie_descr">В центре сюжета - школьник по имени Морти и его дедушка Рик. Морти - самый обычный мальчик, который ничем не отличается от своих сверстников. А вот его дедуля занимается необычными научными...</div>
                            <div class="movie_wrapper">
                                <div class="movie_data">
                                    <div class="movie_time">
                                        <img src="icons/time.svg" alt="clock">
                                        <div class="time_descr">163 мин. / 02:43</div>
                                    </div>
                                    <div class="movie_genre">боевик, триллер, приключения</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="movie_card">
                        <div class="movie_card_active">
                            <button class="active_button">подробнее</button>
                        </div>
                        <img src="img/Drakon_IMG.jpg" alt="movie" class="movie_img">
                        <div class="movie_text">
                            <div class="movie_title">Райя и последний дракон</div>
                            <div class="movie_subtitle">Raya and the Last Dragon</div>
                            <div class="movie_hr"></div>
                            <div class="movie_descr">Давным-давно в волшебной стране Кумандре бок о бок с людьми жили драконы — создатели и хранители воды. Мирной жизни пришел конец, когда появились друуны. Порождения тьмы обращали людей и драконов в ...</div>
                            <div class="movie_wrapper">
                                <div class="movie_data">
                                    <div class="movie_time">
                                        <img src="icons/time.svg" alt="clock">
                                        <div class="time_descr">163 мин. / 02:43</div>
                                    </div>
                                    <div class="movie_genre">боевик, триллер, приключения</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>