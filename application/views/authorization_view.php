<div class="container">
    <div class="col-sm-6 col-sm-offset-3  users-form-box">
        <form action="" class="navbar-form" method="post">
            <h4>Вход на сайт:</h4>
            <label for="login">Login:</label>
            <p><input type="text" class="form-control" name="login"/></p>
            <label for="password">Password:</label>
            <p><input type="password" class="form-control" name="password"/></p>
            <button type="submit" name="authorization" class="btn btn-success pull-right">
                <i class="fa fa-sign-in"></i> Войти
            </button>
            <div class="clear"></div>
            <a href="register" class="pull-right">
                <i class="fa fa-user"></i>
                Регистрация
            </a>
            <div class="clear"></div>
            <p id="login_info"><?php if(isset($_SESSION['authorization_info'])) echo $_SESSION['authorization_info']; unset($_SESSION['authorization_info']) ?></p>
        </form>
    </div>
</div>