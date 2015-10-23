<?php

/* news_item_view.php */
class __TwigTemplate_8b0b36737df6a289a236000785565b17646359f151333cdd7fc2a1d23acde38f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "news_item_view.php", 1);
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
        echo "    ";
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 6
                echo "        <div class=\"col-sm-12 bg-info news-box\">
            <div class=\"row\">
                <h2 class=\"news-title\">";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()));
                echo "</h2>
                <div class=\"col-sm-12\">
                    <p class=\"news-description\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "full_text", array()));
                echo "</p>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "news_item_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  48 => 10,  43 => 8,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.php" %}*/
/* */
/* {% block content %}*/
/*     {% if news %}*/
/*         {% for row in news %}*/
/*         <div class="col-sm-12 bg-info news-box">*/
/*             <div class="row">*/
/*                 <h2 class="news-title">{{ row.title|escape }}</h2>*/
/*                 <div class="col-sm-12">*/
/*                     <p class="news-description">{{ row.full_text|escape }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
