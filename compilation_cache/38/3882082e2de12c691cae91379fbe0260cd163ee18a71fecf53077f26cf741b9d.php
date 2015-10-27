<?php

/* /News/news_view.html.twig */
class __TwigTemplate_58ee2474da6d4d2019742b498c332c695c74095d0ef57452af733969edd4d38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "/News/news_view.html.twig", 1);
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
        echo " Новости ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 9
                echo "        <div class=\"col-sm-12 bg-info news-box\">
            <div class=\"row\">
                <h2 class=\"news-title\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo " </h2>
                <div class=\"col-sm-12\">
                    <p class=\"news-description\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "article", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary pull-right\">Читать далее...</a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "/News/news_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  72 => 19,  61 => 14,  57 => 13,  52 => 11,  48 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} Новости {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if news %}*/
/*         {% for article in news %}*/
/*         <div class="col-sm-12 bg-info news-box">*/
/*             <div class="row">*/
/*                 <h2 class="news-title">{{ article.title }} </h2>*/
/*                 <div class="col-sm-12">*/
/*                     <p class="news-description">{{ article.description }}</p>*/
/*                     <a href="{{ url.generate('article',{id: article.id}) }}" class="btn btn-primary pull-right">Читать далее...</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
