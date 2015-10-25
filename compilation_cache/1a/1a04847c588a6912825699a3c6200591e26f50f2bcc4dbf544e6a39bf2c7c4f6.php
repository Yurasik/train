<?php

/* template_view.html.twig */
class __TwigTemplate_54a46aa01dc29c40f6b7ecdffbd0767aad6dbab9729f81233b446bb026701879 extends Twig_Template
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
                    <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "homepage"), "method"), "html", null, true);
        echo "\">Главная</a></li>
                    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "news"), "method"), "html", null, true);
        echo "\">Новости</a></li>
                    <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "services"), "method"), "html", null, true);
        echo "\">Услуги</a></li>
                    <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "portfolio"), "method"), "html", null, true);
        echo "\">Портфолио</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "contacts"), "method"), "html", null, true);
        echo "\">Контакты</a></li>
                    <li class=\"disabled\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "profile"), "method"), "html", null, true);
        echo "\">Профиль</a></li>
                    <li><a href=\"/admin\">Админка</a></li>
                    <a href=\"/users/logout\"><i class=\"fa fa-sign-out\"></i> Выйти </a>
                </ul>
                <div id=\"users-box\" class=\"navbar-form navbar-right\">
                    ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["login_status"]) ? $context["login_status"] : null), "html", null, true);
        echo "
                    ";
        // line 38
        if (((isset($context["login_status"]) ? $context["login_status"] : null) == 2)) {
            // line 39
            echo "                    <p id=\"wellcome-text\">
                        Приветствуем, <b>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["sessionEmail"]) ? $context["sessionEmail"] : null), "html", null, true);
            echo "</b>
                        <a href=\"/users/logout\"><i class=\"fa fa-sign-out\"></i> Выйти </a>
                    </p>
                    ";
        } else {
            // line 44
            echo "                    <a href=\"/users/login\" class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Вход </a>
                    ";
        }
        // line 46
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
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
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

    // line 59
    public function block_content($context, array $blocks = array())
    {
        // line 60
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "template_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  132 => 59,  113 => 61,  111 => 59,  96 => 46,  92 => 44,  85 => 40,  82 => 39,  80 => 38,  76 => 37,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  52 => 28,  48 => 27,  20 => 1,);
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
/*                     <li><a href="{{ url.generate('homepage') }}">Главная</a></li>*/
/*                     <li><a href="{{ url.generate('news') }}">Новости</a></li>*/
/*                     <li><a href="{{ url.generate('services') }}">Услуги</a></li>*/
/*                     <li><a href="{{ url.generate('portfolio') }}">Портфолио</a></li>*/
/*                     <li><a href="{{ url.generate('contacts') }}">Контакты</a></li>*/
/*                     <li class="disabled"><a href="{{ url.generate('profile') }}">Профиль</a></li>*/
/*                     <li><a href="/admin">Админка</a></li>*/
/*                     <a href="/users/logout"><i class="fa fa-sign-out"></i> Выйти </a>*/
/*                 </ul>*/
/*                 <div id="users-box" class="navbar-form navbar-right">*/
/*                     {{ login_status }}*/
/*                     {% if login_status == 2 %}*/
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
