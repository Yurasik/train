{% extends "template_view.php" %}

{% block content %}
<div class="container">
    <div class="col-sm-6 col-sm-offset-3  users-form-box">
        <form action="" class="navbar-form" method="post">
            <h4>Вход на сайт:</h4>
            <label for="email">Email:</label>
            <p>
                <input id="email" type="text" class="form-control" name="email" value="{{ email }}"/>
            </p>
            <label for="password">Password:</label>
            <p>
                <input id="password" type="password" class="form-control" name="password"/>
            </p>
            <button type="submit" name="authorization" class="btn btn-success pull-right">
                <i class="fa fa-sign-in"></i> Войти
            </button>
            <div class="clear"></div>
            <a href="register" class="pull-right">
                <i class="fa fa-user"></i>
                Регистрация
            </a>
            <div class="clear"></div>
            <p id="login_info">
                {{ message }}
            </p>
        </form>
    </div>
</div>
{% endblock %}