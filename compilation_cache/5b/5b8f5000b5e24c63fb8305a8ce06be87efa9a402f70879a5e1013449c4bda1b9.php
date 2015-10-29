<?php

/* Users/profile_view.html.twig */
class __TwigTemplate_b93bb25d832cebb1cb27ac61161af9e102edb1e8536587ae8a419fefce692cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Users/profile_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Профиль ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"content\" class=\"col-sm-12\">

</div>
";
    }

    public function getTemplateName()
    {
        return "Users/profile_view.html.twig";
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
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} Профиль {% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content" class="col-sm-12">*/
/* */
/* </div>*/
/* {% endblock %}*/
