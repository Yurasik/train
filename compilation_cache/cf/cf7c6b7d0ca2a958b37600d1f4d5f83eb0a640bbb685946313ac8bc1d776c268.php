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
            'sidebar' => array($this, 'block_sidebar'),
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"content\" class=\"col-sm-12\">

    ";
        // line 10
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 11
            echo "    <div class=\"col-sm-12 news-box\">
        <div class=\"row\">
            <h4 class=\"news-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "</h4>
            <div class=\"col-sm-12 news-description\">
                ";
            // line 15
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "full_text", array());
            echo "
            </div>
            <div class=\"news-info col-sm-12\">
                <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-calendar\"></i> <b>Добавлено: </b><i>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "created_at", array()), "d.m.Y"), "html", null, true);
            echo "</i></p>
                <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-folder-o\"></i> <b>Категория: </b><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "newsCategory", 1 => array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category_slug", array()))), "method"), "html", null, true);
            echo "\"><i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category_name", array()), "html", null, true);
            echo "</i></a></p>
                <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-user\"></i> <b>Автор: </b><i>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "email", array()), "html", null, true);
            echo "</i></p>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 26
        echo "
</div>
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
        return array (  86 => 26,  77 => 20,  71 => 19,  67 => 18,  61 => 15,  56 => 13,  52 => 11,  50 => 10,  46 => 8,  43 => 7,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} {{ article.title }} {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content" class="col-sm-12">*/
/* */
/*     {% if article %}*/
/*     <div class="col-sm-12 news-box">*/
/*         <div class="row">*/
/*             <h4 class="news-title">{{ article.title }}</h4>*/
/*             <div class="col-sm-12 news-description">*/
/*                 {{ article.full_text|raw }}*/
/*             </div>*/
/*             <div class="news-info col-sm-12">*/
/*                 <p class="pull-right" style="margin: 0 10px"><i class="fa fa-calendar"></i> <b>Добавлено: </b><i>{{ article.created_at|date("d.m.Y") }}</i></p>*/
/*                 <p class="pull-right" style="margin: 0 10px"><i class="fa fa-folder-o"></i> <b>Категория: </b><a href="{{ url.generate('newsCategory', {slug:article.category_slug}) }}"><i>{{ article.category_name }}</i></a></p>*/
/*                 <p class="pull-right" style="margin: 0 10px"><i class="fa fa-user"></i> <b>Автор: </b><i>{{ article.email }}</i></p>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/* </div>*/
/* {% endblock %}*/
