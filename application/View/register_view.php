{% extends "template_view.php" %}

{% block content %}
<div class="container">
    <div class="col-sm-6 col-sm-offset-3  users-form-box">
        <form action="" class="navbar-form" method="post">
            <h4>Регстрация пользователя:</h4>
            <label for="email">Email:</label>
            <p><input type="email" class="form-control" name="email" value="{{ email }}"/></p>
            <label for="password">Password:</label>
            <p><input type="password" class="form-control" name="password"/></p>
            <button type="submit" name="register" class="btn btn-success pull-right">
                <i class="fa fa-user"></i> Зарегестрироваться
            </button>
            <div class="clear"></div>
            <a href="login" class="pull-right">
                <i class="fa fa-sign-in"></i>
                Войти
            </a>
            <div class="clear"></div>
            <p id="login_info">
                {{ message }}
            </p>
        </form>
    </div>
</div>
{% endblock %}