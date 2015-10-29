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
            <h2 class=\"news-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "</h2>
            <div class=\"col-sm-12 news-description bg-info\">
                ";
            // line 15
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "full_text", array());
            echo "
            </div>
            <div class=\"news-info col-sm-12\">
                <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-calendar\"></i> <b>Добавлено: </b><i>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date", array()), "html", null, true);
            echo "</i></p>
                <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-folder-o\"></i> <b>Категория: </b><i>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category_name", array()), "html", null, true);
            echo "</i></p>
                <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-user\"></i> <b>Автор: </b><i>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "email", array()), "html", null, true);
            echo "</i></p>
            </div>
        </div>
    </div>
    ";
        }
        // line 25
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
        return array (  83 => 25,  75 => 20,  71 => 19,  67 => 18,  61 => 15,  56 => 13,  52 => 11,  50 => 10,  46 => 8,  43 => 7,  38 => 5,  30 => 3,  11 => 1,);
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
/*             <h2 class="news-title">{{ article.title }}</h2>*/
/*             <div class="col-sm-12 news-description bg-info">*/
/*                 {{ article.full_text|raw }}*/
/*             </div>*/
/*             <div class="news-info col-sm-12">*/
/*                 <p class="pull-right" style="margin: 0 10px"><i class="fa fa-calendar"></i> <b>Добавлено: </b><i>{{ article.date }}</i></p>*/
/*                 <p class="pull-right" style="margin: 0 10px"><i class="fa fa-folder-o"></i> <b>Категория: </b><i>{{ article.category_name }}</i></p>*/
/*                 <p class="pull-right" style="margin: 0 10px"><i class="fa fa-user"></i> <b>Автор: </b><i>{{ article.email }}</i></p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/* </div>*/
/* {% endblock %}*/
