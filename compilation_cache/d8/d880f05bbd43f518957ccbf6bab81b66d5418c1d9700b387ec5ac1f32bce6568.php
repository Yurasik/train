<?php

/* Admin/admin_template_view.html.twig */
class __TwigTemplate_7ef2841e84f9c7c587f7d8ba4c4905d8236b1ef14a6abfa23f44f6251f5424f6 extends Twig_Template
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
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Новости <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
        echo "\">Все новости</a></li>
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleAdd"), "method"), "html", null, true);
        echo "\">Добавить новость</a></li>
                    <li><a href=\"/admin/category\">Категории</a></li>
                </ul>
            </li>
        </ul>
        <div id=\"users-box\" class=\"navbar-form navbar-right\">
            <p id=\"wellcome-text\">
                Приветствуем, <b>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["user_email"]) ? $context["user_email"] : null), "html", null, true);
        echo "</b>
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "logout"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> Выйти </a>
            </p>
        </div>
    </div>
</header>

<div id=\"page\" class=\"container-fluid\">
    <div class=\"row\">
        <div id=\"page-content\" class=\"container-fluid\">
            <div class=\"row\">
                ";
        // line 51
        echo "                    ";
        // line 52
        echo "                    ";
        // line 53
        echo "                    ";
        // line 54
        echo "                ";
        // line 55
        echo "                <div id=\"content\" class=\"col-sm-12\">
                    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "                </div>
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
</html>";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "Admin/admin_template_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  126 => 56,  121 => 20,  103 => 58,  101 => 56,  98 => 55,  96 => 54,  94 => 53,  92 => 52,  90 => 51,  77 => 40,  73 => 39,  63 => 32,  59 => 31,  52 => 27,  42 => 20,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content='' />*/
/*     <meta name="keywords" content='' />*/
/* */
/*     <link rel='stylesheet' type='text/css' href='/css/style.css' />*/
/*     <link rel='stylesheet' type='text/css' href='/fonts/fonts.css' />*/
/*     <link rel='stylesheet' type='text/css' href='/css/font-awesome.css' />*/
/*     <link rel='stylesheet' href='/css/bootstrap.css'>*/
/*     <link rel='stylesheet' href='/css/bootstrap-theme.css'>*/
/* */
/*     <script src="/js/jquery-2.1.3.min.js"></script>*/
/*     <script src='/js/bootstrap.min.js'></script>*/
/*     <script src='/js/global.js' type='text/javascript'></script>*/
/* */
/*     <title>{% block title %}{% endblock %}| Web-Dealer</title>*/
/* </head>*/
/* */
/* <body>*/
/* <header>*/
/*     <div class="navbar navbar-top navbar-inverse">*/
/*         <ul class="nav navbar-nav">*/
/*             <li><a href="{{ url.generate('homepage') }}">Главная</a></li>*/
/*             <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown">Новости <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="{{ url.generate('adminNews') }}">Все новости</a></li>*/
/*                     <li><a href="{{ url.generate('articleAdd') }}">Добавить новость</a></li>*/
/*                     <li><a href="/admin/category">Категории</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*         <div id="users-box" class="navbar-form navbar-right">*/
/*             <p id="wellcome-text">*/
/*                 Приветствуем, <b>{{ user_email }}</b>*/
/*                 <a href="{{ url.generate('logout') }}"><i class="fa fa-sign-out"></i> Выйти </a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
/* <div id="page" class="container-fluid">*/
/*     <div class="row">*/
/*         <div id="page-content" class="container-fluid">*/
/*             <div class="row">*/
/*                 {#<div id="sidebar" class="col-sm-3">#}*/
/*                     {#<div class="side-box">#}*/
/*                     {#{% block slider %}{% endblock %}#}*/
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/*                 <div id="content" class="col-sm-12">*/
/*                     {% block content %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <footer class="container-fluid">*/
/*     <div class="row">*/
/*         <div id="copyright" class="col-sm-12">*/
/*             <a href="/">Web-Dealer</a> &copy; 2015</a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </body>*/
/* </html>*/
