<?php

/* News/article_view.html.twig */
class __TwigTemplate_e51caa12d805c99b451ae1d752f62559bfc69725c183bc0abaf8fff6b2dde305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "News/article_view.html.twig", 1);
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
        echo " Новость ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 8
            echo "    <div class=\"col-sm-12 bg-info news-box\">
        <div class=\"row\">
            <h2 class=\"news-title\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "</h2>
            <div class=\"col-sm-12\">
                <p class=\"news-description\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "full_text", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
    ";
        }
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "News/article_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  52 => 12,  47 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} Новость {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if article %}*/
/*     <div class="col-sm-12 bg-info news-box">*/
/*         <div class="row">*/
/*             <h2 class="news-title">{{ article.title }}</h2>*/
/*             <div class="col-sm-12">*/
/*                 <p class="news-description">{{ article.full_text }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
