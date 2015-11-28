<?php

/* template_view.html.twig */
class __TwigTemplate_54a46aa01dc29c40f6b7ecdffbd0767aad6dbab9729f81233b446bb026701879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
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
        ";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "
        <script src=\"/js/jquery-2.1.3.min.js\"></script>
        <script src='/js/bootstrap.min.js'></script>
        <script src='/js/global.js' type='text/javascript'></script>
        ";
        // line 20
        $this->displayBlock('js', $context, $blocks);
        // line 21
        echo "
        <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "| Web-Dealer</title>
    </head>

    <body>
        <header>
            <div class=\"navbar navbar-top header-navbar\">
                <ul class=\"navbar-nav nav\">
                    <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "homepage"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Главная</a></li>
                    <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "news"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Новости</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "services"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-briefcase\"></i> Услуги</a></li>
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "portfolio"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-image\"></i> Портфолио</a></li>
                    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "contacts"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-mobile\"></i> Контакты</a></li>
                    ";
        // line 34
        if ((isset($context["user_role"]) ? $context["user_role"] : null)) {
            // line 35
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "profile"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i> Профиль</a></li>
                    ";
        }
        // line 37
        echo "                    ";
        if ((((isset($context["user_role"]) ? $context["user_role"] : null) == "admin") || ((isset($context["user_role"]) ? $context["user_role"] : null) == "moderator"))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminMain"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-cogs\"></i> Админка</a></li>
                    ";
        }
        // line 40
        echo "                </ul>
                <div id=\"users-box\" class=\"navbar-form navbar-right\">
                    ";
        // line 42
        if ((isset($context["user_login"]) ? $context["user_login"] : null)) {
            // line 43
            echo "                    <p id=\"wellcome-text\">
                        Приветствуем, <b>";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["user_email"]) ? $context["user_email"] : null), "html", null, true);
            echo "</b>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "logout"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-sign-out\"></i> <b>Выйти</b> </a>
                    </p>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "login"), "method"), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-sign-in\"></i> Вход</a>
                    ";
        }
        // line 50
        echo "                </div>
            </div>
        </header>

        <div id=\"page\" class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"page-content\" class=\"container-fluid\">
                    <div class=\"row\">
                        ";
        // line 58
        $this->displayBlock('sidebar', $context, $blocks);
        // line 59
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                    </div>
                </div>
            </div>
        </div>

        <footer class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"copyright\" class=\"col-sm-12\">
                    <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "homepage"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-hand-peace-o\"></i> Web-Dealer</a> &copy; 2015</a>
                </div>
            </div>
        </footer>
    </body>
</html>
";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
    }

    // line 58
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
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
        return array (  181 => 59,  176 => 58,  171 => 22,  166 => 20,  161 => 15,  150 => 68,  140 => 60,  137 => 59,  135 => 58,  125 => 50,  119 => 48,  113 => 45,  109 => 44,  106 => 43,  104 => 42,  100 => 40,  94 => 38,  91 => 37,  85 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  53 => 22,  50 => 21,  48 => 20,  42 => 16,  40 => 15,  24 => 1,);
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
/*         {% block css %}{% endblock %}*/
/* */
/*         <script src="/js/jquery-2.1.3.min.js"></script>*/
/*         <script src='/js/bootstrap.min.js'></script>*/
/*         <script src='/js/global.js' type='text/javascript'></script>*/
/*         {% block js %}{% endblock %}*/
/* */
/*         <title>{% block title %}{% endblock %}| Web-Dealer</title>*/
/*     </head>*/
/* */
/*     <body>*/
/*         <header>*/
/*             <div class="navbar navbar-top header-navbar">*/
/*                 <ul class="navbar-nav nav">*/
/*                     <li><a href="{{ url.generate('homepage') }}"><i class="fa fa-home"></i> Главная</a></li>*/
/*                     <li><a href="{{ url.generate('news') }}"><i class="fa fa-newspaper-o"></i> Новости</a></li>*/
/*                     <li><a href="{{ url.generate('services') }}"><i class="fa fa-briefcase"></i> Услуги</a></li>*/
/*                     <li><a href="{{ url.generate('portfolio') }}"><i class="fa fa-image"></i> Портфолио</a></li>*/
/*                     <li><a href="{{ url.generate('contacts') }}"><i class="fa fa-mobile"></i> Контакты</a></li>*/
/*                     {% if user_role %}*/
/*                     <li><a href="{{ url.generate('profile') }}"><i class="fa fa-user"></i> Профиль</a></li>*/
/*                     {% endif %}*/
/*                     {% if user_role == 'admin' or user_role == 'moderator' %}*/
/*                     <li><a href="{{ url.generate('adminMain') }}"><i class="fa fa-cogs"></i> Админка</a></li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*                 <div id="users-box" class="navbar-form navbar-right">*/
/*                     {% if user_login %}*/
/*                     <p id="wellcome-text">*/
/*                         Приветствуем, <b>{{ user_email }}</b>*/
/*                         <a href="{{ url.generate('logout') }}" class="btn btn-danger btn-xs"><i class="fa fa-sign-out"></i> <b>Выйти</b> </a>*/
/*                     </p>*/
/*                     {% else %}*/
/*                     <a href="{{ url.generate('login') }}" class="btn btn-success btn-xs"><i class="fa fa-sign-in"></i> Вход</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/* */
/*         <div id="page" class="container-fluid">*/
/*             <div class="row">*/
/*                 <div id="page-content" class="container-fluid">*/
/*                     <div class="row">*/
/*                         {% block sidebar %}{% endblock %}*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <footer class="container-fluid">*/
/*             <div class="row">*/
/*                 <div id="copyright" class="col-sm-12">*/
/*                     <a href="{{ url.generate('homepage') }}"><i class="fa fa-hand-peace-o"></i> Web-Dealer</a> &copy; 2015</a>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*     </body>*/
/* </html>*/
/* */
