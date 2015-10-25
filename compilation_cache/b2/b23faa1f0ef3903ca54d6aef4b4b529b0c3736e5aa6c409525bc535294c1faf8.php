<?php

/* Users/authorization_view.html.twig */
class __TwigTemplate_92a75d32e28f22c533749b38c7661be13c834560d86b4f494f975c8487d2150a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Users/authorization_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"col-sm-6 col-sm-offset-3  users-form-box\">
        <form action=\"\" class=\"navbar-form\" method=\"post\">
            <h4>Вход на сайт:</h4>
            <label for=\"email\">Email:</label>
            <p>
                <input id=\"email\" type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\"/>
            </p>
            <label for=\"password\">Password:</label>
            <p>
                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\"/>
            </p>
            <button type=\"submit\" name=\"authorization\" class=\"btn btn-success pull-right\">
                <i class=\"fa fa-sign-in\"></i> Войти
            </button>
            <div class=\"clear\"></div>
            <a href=\"register\" class=\"pull-right\">
                <i class=\"fa fa-user\"></i>
                Регистрация
            </a>
            <div class=\"clear\"></div>
            <p id=\"login_info\">
                ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
            </p>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Users/authorization_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/*     <div class="col-sm-6 col-sm-offset-3  users-form-box">*/
/*         <form action="" class="navbar-form" method="post">*/
/*             <h4>Вход на сайт:</h4>*/
/*             <label for="email">Email:</label>*/
/*             <p>*/
/*                 <input id="email" type="text" class="form-control" name="email" value="{{ email }}"/>*/
/*             </p>*/
/*             <label for="password">Password:</label>*/
/*             <p>*/
/*                 <input id="password" type="password" class="form-control" name="password"/>*/
/*             </p>*/
/*             <button type="submit" name="authorization" class="btn btn-success pull-right">*/
/*                 <i class="fa fa-sign-in"></i> Войти*/
/*             </button>*/
/*             <div class="clear"></div>*/
/*             <a href="register" class="pull-right">*/
/*                 <i class="fa fa-user"></i>*/
/*                 Регистрация*/
/*             </a>*/
/*             <div class="clear"></div>*/
/*             <p id="login_info">*/
/*                 {{ message }}*/
/*             </p>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/