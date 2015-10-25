<?php

/* Users/register_view.html.twig */
class __TwigTemplate_eac22f263b0cbb3db95c52e3eccc09ea8a6f495d101059c4acd472cd1b4e06d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Users/register_view.html.twig", 1);
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
            <h4>Регстрация пользователя:</h4>
            <label for=\"email\">Email:</label>
            <p><input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\"/></p>
            <label for=\"password\">Password:</label>
            <p><input type=\"password\" class=\"form-control\" name=\"password\"/></p>
            <button type=\"submit\" name=\"register\" class=\"btn btn-success pull-right\">
                <i class=\"fa fa-user\"></i> Зарегестрироваться
            </button>
            <div class=\"clear\"></div>
            <a href=\"login\" class=\"pull-right\">
                <i class=\"fa fa-sign-in\"></i>
                Войти
            </a>
            <div class=\"clear\"></div>
            <p id=\"login_info\">
                ";
        // line 22
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
        return "Users/register_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/*     <div class="col-sm-6 col-sm-offset-3  users-form-box">*/
/*         <form action="" class="navbar-form" method="post">*/
/*             <h4>Регстрация пользователя:</h4>*/
/*             <label for="email">Email:</label>*/
/*             <p><input type="email" class="form-control" name="email" value="{{ email }}"/></p>*/
/*             <label for="password">Password:</label>*/
/*             <p><input type="password" class="form-control" name="password"/></p>*/
/*             <button type="submit" name="register" class="btn btn-success pull-right">*/
/*                 <i class="fa fa-user"></i> Зарегестрироваться*/
/*             </button>*/
/*             <div class="clear"></div>*/
/*             <a href="login" class="pull-right">*/
/*                 <i class="fa fa-sign-in"></i>*/
/*                 Войти*/
/*             </a>*/
/*             <div class="clear"></div>*/
/*             <p id="login_info">*/
/*                 {{ message }}*/
/*             </p>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
