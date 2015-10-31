<?php

/* Admin/admin_main_view.html.twig */
class __TwigTemplate_e6d2dd149bf2730c5d87493421976ef0644826c4ced9fc87fe1eb32e53c0de8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin_template_view.html.twig", "Admin/admin_main_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/admin_template_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Панель администратора ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"content\">
    <h1 class=\"text-center\">Добро пожаловать в панель администратора!</h1>
</div>
";
    }

    public function getTemplateName()
    {
        return "Admin/admin_main_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "Admin/admin_template_view.html.twig" %}*/
/* */
/* {% block title %} Панель администратора {% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content">*/
/*     <h1 class="text-center">Добро пожаловать в панель администратора!</h1>*/
/* </div>*/
/* {% endblock %}*/
