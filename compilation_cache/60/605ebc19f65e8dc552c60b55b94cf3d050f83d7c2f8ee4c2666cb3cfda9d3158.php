<?php

/* news_view.php */
class __TwigTemplate_f5b49c04fdd7a3c4813630a22734b39d9d96325338fff89e5040e0dc127afdc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "news_view.php", 1);
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
        echo "
    ";
        // line 5
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 7
                echo "        <div class=\"col-sm-12 bg-info news-box\">
            <div class=\"row\">
                <h2 class=\"news-title\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()));
                echo " </h2>
                <div class=\"col-sm-12\">
                    <p class=\"news-description\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()));
                echo "</p>
                    <a href=\"news/news_item/?id=";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()));
                echo "\" class=\"btn btn-primary pull-right\">Читать далее...</a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "news_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  65 => 17,  54 => 12,  50 => 11,  45 => 9,  41 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.php" %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if news %}*/
/*         {% for row in news %}*/
/*         <div class="col-sm-12 bg-info news-box">*/
/*             <div class="row">*/
/*                 <h2 class="news-title">{{ row.title|escape }} </h2>*/
/*                 <div class="col-sm-12">*/
/*                     <p class="news-description">{{ row.description|escape }}</p>*/
/*                     <a href="news/news_item/?id={{ row.id|escape }}" class="btn btn-primary pull-right">Читать далее...</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
