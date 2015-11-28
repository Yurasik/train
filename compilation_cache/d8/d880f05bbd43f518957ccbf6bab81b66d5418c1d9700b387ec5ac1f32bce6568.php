<?php

/* Admin/admin_template_view.html.twig */
class __TwigTemplate_7ef2841e84f9c7c587f7d8ba4c4905d8236b1ef14a6abfa23f44f6251f5424f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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

    <link rel='stylesheet' type='text/css' href='/fonts/fonts.css' />
    <link rel='stylesheet' type='text/css' href='/css/font-awesome.css' />
    <link rel='stylesheet' href='/css/bootstrap.css'>
    <link rel='stylesheet' href='/css/bootstrap-theme.css'>
    <link rel='stylesheet' type='text/css' href='/css/style.css' />
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
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "homepage"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Главная</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-newspaper-o\"></i> Новости <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
        echo "\">Все новости</a></li>
                    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleAdd"), "method"), "html", null, true);
        echo "\">Добавить новость</a></li>
                    <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "category"), "method"), "html", null, true);
        echo "\">Категории</a></li>
                    <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "categoryAdd"), "method"), "html", null, true);
        echo "\">Добавить категорию</a></li>
                </ul>
            </li>
        </ul>
        <div id=\"users-box\" class=\"navbar-form navbar-right\">
            <p id=\"wellcome-text\">
                Приветствуем, <b>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["user_email"]) ? $context["user_email"] : null), "html", null, true);
        echo "</b>
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "logout"), "method"), "html", null, true);
        echo "\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-sign-out\"></i> <b>Выйти</b> </a>
            </p>
        </div>
    </div>
</header>

<div id=\"page\" class=\"container-fluid\">
    <div class=\"row\">
        <div id=\"page-content\" class=\"container-fluid\">
            <div class=\"row\">
                ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "            </div>
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

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "                ";
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
        return array (  144 => 54,  141 => 53,  136 => 22,  131 => 20,  126 => 15,  109 => 55,  107 => 53,  94 => 43,  90 => 42,  81 => 36,  77 => 35,  73 => 34,  69 => 33,  62 => 29,  52 => 22,  49 => 21,  47 => 20,  41 => 16,  39 => 15,  23 => 1,);
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
/*     <link rel='stylesheet' type='text/css' href='/fonts/fonts.css' />*/
/*     <link rel='stylesheet' type='text/css' href='/css/font-awesome.css' />*/
/*     <link rel='stylesheet' href='/css/bootstrap.css'>*/
/*     <link rel='stylesheet' href='/css/bootstrap-theme.css'>*/
/*     <link rel='stylesheet' type='text/css' href='/css/style.css' />*/
/*     {% block css %}{% endblock %}*/
/* */
/*     <script src="/js/jquery-2.1.3.min.js"></script>*/
/*     <script src='/js/bootstrap.min.js'></script>*/
/*     <script src='/js/global.js' type='text/javascript'></script>*/
/*     {% block js %}{% endblock %}*/
/* */
/*     <title>{% block title %}{% endblock %}| Web-Dealer</title>*/
/* </head>*/
/* */
/* <body>*/
/* <header>*/
/*     <div class="navbar navbar-top header-navbar">*/
/*         <ul class="nav navbar-nav">*/
/*             <li><a href="{{ url.generate('homepage') }}"><i class="fa fa-home"></i> Главная</a></li>*/
/*             <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i> Новости <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="{{ url.generate('adminNews') }}">Все новости</a></li>*/
/*                     <li><a href="{{ url.generate('articleAdd') }}">Добавить новость</a></li>*/
/*                     <li><a href="{{ url.generate('category') }}">Категории</a></li>*/
/*                     <li><a href="{{ url.generate('categoryAdd') }}">Добавить категорию</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*         <div id="users-box" class="navbar-form navbar-right">*/
/*             <p id="wellcome-text">*/
/*                 Приветствуем, <b>{{ user_email }}</b>*/
/*                 <a href="{{ url.generate('logout') }}" class="btn btn-xs btn-danger"><i class="fa fa-sign-out"></i> <b>Выйти</b> </a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
/* <div id="page" class="container-fluid">*/
/*     <div class="row">*/
/*         <div id="page-content" class="container-fluid">*/
/*             <div class="row">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
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
