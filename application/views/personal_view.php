<div class="container">
    <div class="col-sm-6  users-form-box">
        <form action="" class="navbar-form" method="post">
            <h4>Вход на сайт:</h4>
            <p>
                <input type="email" class="form-control" placeholder="Email"/>
            </p>
            <p>
                <input type="password" class="form-control" placeholder="password"/>
            </p>
            <button type="submit" name="auth" class="btn btn-success pull-right">
                <i class="fa fa-sign-in"></i> Войти
            </button>
            <div class="clear"></div>
        </form>
    </div>
    <div class="col-sm-6 users-form-box">
        <form action="" class="navbar-form" method="post">
            <h4>Регистрация пользователя:</h4>
            <p>
                <input type="email" name="email" class="form-control" placeholder="Email"/>
            </p>
            <p>
                <input type="password" name="password" class="form-control" placeholder="password"/>
            </p>
            <button type="submit" name="reg" class="btn btn-warning pull-right">
                <i class="fa fa-user"></i> Регистрация
            </button>
            <div class="clear"></div>
            <?php
            if(isset($_SESSION['register'])){
                echo '<p class="session-message">'.$_SESSION['register'].'</p>';
                unset($_SESSION['register']);
            }
            ?>
        </form>
    </div>
</div>