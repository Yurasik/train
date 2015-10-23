<?php

/* authorization_view.php */
class __TwigTemplate_0312e96132d0b6466a2b65c57834c9ed188b5498a0979c698a1eb00c2c24d531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "authorization_view.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_view.php";
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
        return "authorization_view.php";
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
/* {% extends "template_view.php" %}*/
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
