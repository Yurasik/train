<?php

/* template_view.html.twig */
class __TwigTemplate_54a46aa01dc29c40f6b7ecdffbd0767aad6dbab9729f81233b446bb026701879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "| Web-Dealer</title>
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
                    ";
        // line 32
        if ((isset($context["user_role"]) ? $context["user_role"] : null)) {
            // line 33
            echo "                    <li class=\"disabled\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "profile"), "method"), "html", null, true);
            echo "\">Профиль</a></li>
                    ";
        }
        // line 35
        echo "                    ";
        if ((((isset($context["user_role"]) ? $context["user_role"] : null) == "admin") || ((isset($context["user_role"]) ? $context["user_role"] : null) == "moderator"))) {
            // line 36
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminMain"), "method"), "html", null, true);
            echo "\">Админка</a></li>
                    ";
        }
        // line 38
        echo "                </ul>
                <div id=\"users-box\" class=\"navbar-form navbar-right\">
                    ";
        // line 40
        if ((isset($context["user_login"]) ? $context["user_login"] : null)) {
            // line 41
            echo "                    <p id=\"wellcome-text\">
                        Приветствуем, <b>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["user_email"]) ? $context["user_email"] : null), "html", null, true);
            echo "</b>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "logout"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-sign-out\"></i> Выйти </a>
                    </p>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "login"), "method"), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Вход </a>
                    ";
        }
        // line 48
        echo "                </div>
            </div>
        </header>

        <div id=\"page\" class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"page-content\" class=\"container-fluid\">
                    <div class=\"row\">
                        ";
        // line 57
        echo "                            ";
        // line 58
        echo "                            ";
        // line 59
        echo "                        ";
        // line 60
        echo "                        <div id=\"content\" class=\"col-sm-12\">
                            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
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

    // line 20
    public function block_title($context, array $blocks = array())
    {
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
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
        return array (  162 => 62,  159 => 61,  154 => 20,  135 => 63,  133 => 61,  130 => 60,  128 => 59,  126 => 58,  124 => 57,  114 => 48,  108 => 46,  102 => 43,  98 => 42,  95 => 41,  93 => 40,  89 => 38,  83 => 36,  80 => 35,  74 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  42 => 20,  21 => 1,);
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
/*         <title>{% block title %}{% endblock %}| Web-Dealer</title>*/
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
/*                     {% if user_role %}*/
/*                     <li class="disabled"><a href="{{ url.generate('profile') }}">Профиль</a></li>*/
/*                     {% endif %}*/
/*                     {% if user_role == 'admin' or user_role == 'moderator' %}*/
/*                     <li><a href="{{ url.generate('adminMain') }}">Админка</a></li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*                 <div id="users-box" class="navbar-form navbar-right">*/
/*                     {% if user_login %}*/
/*                     <p id="wellcome-text">*/
/*                         Приветствуем, <b>{{ user_email }}</b>*/
/*                         <a href="{{ url.generate('logout') }}"><i class="fa fa-sign-out"></i> Выйти </a>*/
/*                     </p>*/
/*                     {% else %}*/
/*                     <a href="{{ url.generate('login') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Вход </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/* */
/*         <div id="page" class="container-fluid">*/
/*             <div class="row">*/
/*                 <div id="page-content" class="container-fluid">*/
/*                     <div class="row">*/
/*                         {#<div id="sidebar" class="col-sm-3">#}*/
/*                             {#<div class="side-box">#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         <div id="content" class="col-sm-12">*/
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
