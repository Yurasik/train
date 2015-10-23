<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content='' />
        <meta name="keywords" content='' />

        <link rel='stylesheet' type='text/css' href='/css/style.css' />
        <link rel='stylesheet' type='text/css' href='/fonts/fonts.css' />
        <link rel='stylesheet' type='text/css' href='/css/font-awesome.css' />
        <link rel='stylesheet' href='/css/bootstrap.css'>
        <link rel='stylesheet' href='/css/bootstrap-theme.css'>

        <script src="/js/jquery-2.1.3.min.js"></script>
        <script src='/js/bootstrap.min.js'></script>
        <script src='/js/global.js' type='text/javascript'></script>

        <title>Web-Dealer</title>
    </head>

    <body>
        <header>
            <div class="navbar navbar-top navbar-inverse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/news">Новости</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/portfolio">Портфолио</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    <li class="disabled"><a href="/users">Профиль</a></li>
                    <li><a href="/admin">Админка</a></li>
                </ul>
                <div id="users-box" class="navbar-form navbar-right">
                    {% if sessionEmail %}
                    <p id="wellcome-text">
                        Приветствуем, <b>{{ sessionEmail }}</b>
                        <a href="/users/logout"><i class="fa fa-sign-out"></i> Выйти </a>
                    </p>
                    {% else %}
                    <a href="/users/login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Вход </a>
                    {% endif %}
                </div>
            </div>
        </header>

        <div id="page" class="container-fluid">
            <div class="row">
                <div id="page-content" class="container-fluid">
                    <div class="row">
                        <div id="sidebar" class="col-sm-3">
                            <div class="side-box">
                            </div>
                        </div>
                        <div id="content" class="col-sm-9">
                            {% block content %}
                            {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid">
            <div class="row">
                <div id="copyright" class="col-sm-12">
                    <a href="/">Web-Dealer</a> &copy; 2015</a>
                </div>
            </div>
        </footer>
    </body>
</html>
