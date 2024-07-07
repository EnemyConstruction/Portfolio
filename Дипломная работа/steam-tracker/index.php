<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" href="css/zero-style.css">
  <link rel="stylesheet" href="css/font-exo-two.css">
  <link rel="stylesheet" href="css/pages/index.css">
</head>
<body>
<div class="wrapper">
    <header class="main-header">
       <div class="no-auth-header-content">
            <a href="index.php">
                <img src="img/blue-logo/white-text.svg" width="173" height="120" alt="Логотип SteamTracker">
            </a>
            <a href="#authorisation-popup" class="auth-button button-open">
                Авторизоваться
            </a>
       </div> 
    </header>
    <main>
        <div class="main-content">
        <section class="section-lead">
            <div class="left--column">
                <h1>Следите и работайте с предметами Steam, не заходя на торговую площадку!</h1>
                <a class="try-button button-open" href="#authorisation-popup">Попробовать</a>
            </div>
            <img src="https://dummyimage.com/1000x500/000/fff.png" width="" height="" alt="Здесь должна быть картинка с интерфейсом портфелей на сайте">
        </section>
        <section class="advantages">
            <ul class="advantages-list">
                <li class="advantages-list-item">
                    <img src="https://dummyimage.com/200x150/000/fff.png" width="" height="" alt="Здесь должна быть иконка, олицетворяющая текст">
                    <p class="text-content">
                        <b>15 000+</b>
                        <p>предметов из CS:GO можно отследить на нашем сайте</p>
                    </p>
                </li>
                <li class="advantages-list-item">
                    <img src="https://dummyimage.com/200x150/000/fff.png" width="" height="" alt="Здесь должна быть иконка, олицетворяющая текст">
                    <p class="text-content">
                        <b>Частичное регулирование</b> 
                        <p>вашего баланса Steam</p>
                    </p>
                </li>
                <li class="advantages-list-item">
                    <img src="https://dummyimage.com/200x150/000/fff.png" width="" height="" alt="Здесь должна быть иконка, олицетворяющая текст">
                    <p class="text-content">
                        <b>Уникальная статистика</b> 
                        <p>о состоянии рынка и портфелей</p>
                    </p>
                </li>
                <li class="advantages-list-item">
                    <img src="https://dummyimage.com/200x150/000/fff.png" width="" height="" alt="Здесь должна быть иконка, олицетворяющая текст">
                    <p class="text-content">
                        <b>Детальный FAQ</b> 
                        <p>содержит ответы на вопросы о работе сайта</p>
                    </p>
                </li>
            </ul>
        </section>
        <section class="main-functions">
            <ul class="main-functions-list">
                <li class="main-functions-list-item">
                    <h2>Создавайте несколько портфелей и управляйте каждым из них.</h2>
                    <img src="https://dummyimage.com/900x450/000/fff.png" width="" height="" alt="Здесь должна быть картинка, отображающая функционал создания нескольких портфелей">
                </li>
                <li class="main-functions-list-item">
                    <h2>Делитесь наработками портфелей со своим комьюнити.</h2>
                    <img src="https://dummyimage.com/900x450/000/fff.png" width="" height="" alt="Здесь должна быть картинка, отображающая возможность поделиться проектом портфеля">
                </li>
                <li class="main-functions-list-item">
                    <h2>Следите за прибылью и зарабатывайте!</h2>
                    <img src="https://dummyimage.com/900x450/000/fff.png" width="" height="" alt="Здесь должна быть картинка, отображающая стаистику роста по конкретному портфелю.">
                </li>
            </ul>
        </section>
        <section class="go-to-auth">
            <div class="aligner">
                <h2>Зарабатывайте на предметах Steam вместе со SteamTracker!</h2>
                <a href="#authorisation-popup" class="auth-button go-to-auth--button button-open">
                    Авторизоваться
                </a>
            </div>
        </section>
        </div>
        <section id="authorisation-popup" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <h2 class="popup__title">Авторизоваться</h2>
                    <form action="php/auth-user.php" method="post"> 
                        <input type="text" class="popup__login" name="login" placeholder="Логин" autocomplete="on" required>
                        <input type="password" class="popup__password" name="password" placeholder="Пароль" autocomplete="off" required>     
                        <input type="submit" class="popup__submit" value="Войти">
                        <span class="popup__close"></span>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="main-footer">
        <div class="menu-wrapper">
        <div class="left--column">
            <a href="#">
                <img src="img/blue-logo/without-text.svg" width="150" height="82" alt="Логотип SteamTracker">
            </a>
            <div class="copyright">
                 <p>&copy; 2023 SteamTracker.</p> 
                 <p>Все права защищены.</p>
            </div>
        </div> 
        <ul class="footer-links">
            <li class="footer-links-item">
                <a href="#">FAQ</a>
            </li>
            <li class="footer-links-item">
                <a href="#">Набор в команду</a> 
            </li>
            <li class="sub-list-item">
                <a href="#">Контакты</a>
            </li>  
        </ul> 
        </div>   
    </footer>
</div>
<script src="js/popup-open.js"></script>
</body>
</html>