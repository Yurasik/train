<?php

/* template_view.php */
class __TwigTemplate_4c1c1be2aec6f921c9aa56ea1675a434b927cc02e53084a3a816388412d88a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content='' />
        <meta name=\"keywords\" content='' />

        <link rel='stylesheet' type='text/css' href='/css/style.css' />
        <link rel='stylesheet' type='text/css' href='/fonts/fonts.css' />
        <link rel='stylesheet' type='text/css' href='/css/font-awesome.css' />
        <link rel='stylesheet' href='/css/bootstrap.css'>
        <link rel='stylesheet' href='/css/bootstrap-theme.css'>

        <script src=\"/js/jquery-2.1.3.min.js\"></script>
        <script src='/js/bootstrap.min.js'></script>
        <script src='/js/global.js' type='text/javascript'></script>

        <title>Web-Dealer</title>
    </head>

    <body>
        <header>
            <div class=\"navbar navbar-top navbar-inverse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"/\">Главная</a></li>
                    <li><a href=\"/news\">Новости</a></li>
                    <li><a href=\"/services\">Услуги</a></li>
                    <li><a href=\"/portfolio\">Портфолио</a></li>
                    <li><a href=\"/contacts\">Контакты</a></li>
                    <li class=\"disabled\"><a href=\"/users\">Профиль</a></li>
                    <li><a href=\"/admin\">Админка</a></li>
                </ul>
                <div id=\"users-box\" class=\"navbar-form navbar-right\">
                    ";
        // line 36
        if ((isset($context["sessionEmail"]) ? $context["sessionEmail"] : null)) {
            // line 37
            echo "                    <p id=\"wellcome-text\">
                        Приветствуем, <b>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["sessionEmail"]) ? $context["sessionEmail"] : null), "html", null, true);
            echo "</b>
                        <a href=\"/users/logout\"><i class=\"fa fa-sign-out\"></i> Выйти </a>
                    </p>
                    ";
        } else {
            // line 42
            echo "                    <a href=\"/users/login\" class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Вход </a>
                    ";
        }
        // line 44
        echo "                </div>
            </div>
        </header>

        <div id=\"page\" class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"page-content\" class=\"container-fluid\">
                    <div class=\"row\">
                        <div id=\"sidebar\" class=\"col-sm-3\">
                            <div class=\"side-box\">
                            </div>
                        </div>
                        <div id=\"content\" class=\"col-sm-9\">
                            ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"copyright\" class=\"col-sm-12\">
                    <a href=\"/\">Web-Dealer</a> &copy; 2015</a>
                </div>
            </div>
        </footer>
    </body>
</html>
";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "template_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 58,  109 => 57,  90 => 59,  88 => 57,  73 => 44,  69 => 42,  62 => 38,  59 => 37,  57 => 36,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content='' />*/
/*         <meta name="keywords" content='' />*/
/* */
/*         <link rel='stylesheet' type='text/css' href='/css/style.css' />*/
/*         <link rel='stylesheet' type='text/css' href='/fonts/fonts.css' />*/
/*         <link rel='stylesheet' type='text/css' href='/css/font-awesome.css' />*/
/*         <link rel='stylesheet' href='/css/bootstrap.css'>*/
/*         <link rel='stylesheet' href='/css/bootstrap-theme.css'>*/
/* */
/*         <script src="/js/jquery-2.1.3.min.js"></script>*/
/*         <script src='/js/bootstrap.min.js'></script>*/
/*         <script src='/js/global.js' type='text/javascript'></script>*/
/* */
/*         <title>Web-Dealer</title>*/
/*     </head>*/
/* */
/*     <body>*/
/*         <header>*/
/*             <div class="navbar navbar-top navbar-inverse">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="/">Главная</a></li>*/
/*                     <li><a href="/news">Новости</a></li>*/
/*                     <li><a href="/services">Услуги</a></li>*/
/*                     <li><a href="/portfolio">Портфолио</a></li>*/
/*                     <li><a href="/contacts">Контакты</a></li>*/
/*                     <li class="disabled"><a href="/users">Профиль</a></li>*/
/*                     <li><a href="/admin">Админка</a></li>*/
/*                 </ul>*/
/*                 <div id="users-box" class="navbar-form navbar-right">*/
/*                     {% if sessionEmail %}*/
/*                     <p id="wellcome-text">*/
/*                         Приветствуем, <b>{{ sessionEmail }}</b>*/
/*                         <a href="/users/logout"><i class="fa fa-sign-out"></i> Выйти </a>*/
/*                     </p>*/
/*                     {% else %}*/
/*                     <a href="/users/login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Вход </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/* */
/*         <div id="page" class="container-fluid">*/
/*             <div class="row">*/
/*                 <div id="page-content" class="container-fluid">*/
/*                     <div class="row">*/
/*                         <div id="sidebar" class="col-sm-3">*/
/*                             <div class="side-box">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="content" class="col-sm-9">*/
/*                             {% block content %}*/
/*                             {% endblock %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <footer class="container-fluid">*/
/*             <div class="row">*/
/*                 <div id="copyright" class="col-sm-12">*/
/*                     <a href="/">Web-Dealer</a> &copy; 2015</a>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*     </body>*/
/* </html>*/
/* */
