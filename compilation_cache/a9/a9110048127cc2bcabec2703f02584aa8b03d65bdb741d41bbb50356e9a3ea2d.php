<?php

/* portfolio_view.php */
class __TwigTemplate_da815c7ee2226b3fd5b15bb2ec769ba1b037a298b19f48e6841233d4d48f9dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "portfolio_view.php", 1);
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
        echo "<div class=\"container portfolio-content\">
    <table class=\"bg-info\">
        <tr>
            <td>Год</td><td>Проект</td><td>Описание</td>
        </tr>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolio"]) ? $context["portfolio"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "        <tr>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "year", array()));
            echo "</td>
            <td><a target=\"_blank\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()));
            echo "</a></td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()));
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "portfolio_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  55 => 13,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.php" %}*/
/* */
/* {% block content %}*/
/* <div class="container portfolio-content">*/
/*     <table class="bg-info">*/
/*         <tr>*/
/*             <td>Год</td><td>Проект</td><td>Описание</td>*/
/*         </tr>*/
/*         {% for row in portfolio %}*/
/*         <tr>*/
/*             <td>{{row.year|escape}}</td>*/
/*             <td><a target="_blank" href="{{row.url|escape}}">{{row.url|escape}}</a></td>*/
/*             <td>{{row.description|escape}}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* </div>*/
/* {% endblock %}*/
