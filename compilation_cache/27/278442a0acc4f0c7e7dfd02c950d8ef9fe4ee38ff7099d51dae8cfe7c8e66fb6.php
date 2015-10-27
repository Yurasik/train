<?php

/* Main/error404_view.html.twig */
class __TwigTemplate_ddcf2a581cc65f267e70ee88348384f717735d76933be988045d7e47e9569bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Main/error404_view.html.twig", 1);
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
        echo " Страница не найдена - 404 ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"text-center\">Ошибка 404</h1>
<h2 class=\"text-center\">Страница не найдена</h2>
<p class=\"text-center\"><a href=\"milto:info@yurasik.ml\">Напишите нам!</a></p>
";
    }

    public function getTemplateName()
    {
        return "Main/error404_view.html.twig";
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
/* {% block title %} Страница не найдена - 404 {% endblock %}*/
/* */
/* {% block content %}*/
/* <h1 class="text-center">Ошибка 404</h1>*/
/* <h2 class="text-center">Страница не найдена</h2>*/
/* <p class="text-center"><a href="milto:info@yurasik.ml">Напишите нам!</a></p>*/
/* {% endblock %}*/
