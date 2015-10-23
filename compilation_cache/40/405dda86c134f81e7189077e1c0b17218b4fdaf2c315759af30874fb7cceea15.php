<?php

/* page404_view.php */
class __TwigTemplate_d6f97d3eea8fa40d987ee6f5e55e8c239d218854e68c3c2d13884e9402c1255d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "page404_view.php", 1);
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
        echo "<h1 class=\"text-center\">Error 404</h1>
<h2 class=\"text-center\">Page Not Found</h2>
";
    }

    public function getTemplateName()
    {
        return "page404_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.php" %}*/
/* */
/* {% block content %}*/
/* <h1 class="text-center">Error 404</h1>*/
/* <h2 class="text-center">Page Not Found</h2>*/
/* {% endblock %}*/
