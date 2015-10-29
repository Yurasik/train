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
        echo " Новости ";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"sidebar\" class=\"col-sm-3\">
    <div class=\"side-box\">
        <h2 class=\"side-title\">Категории:</h2>
        <ul class=\"category-nav\">
            <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "news"), "method"), "html", null, true);
        echo "\">Все новости</a></li>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "newsCategory", 1 => array("id" => $this->getAttribute($context["row"], "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
    </div>
</div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<div id=\"content\" class=\"col-sm-9\">
    ";
        // line 21
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 23
                echo "        <div class=\"col-sm-12 news-box\">
            <div class=\"row\">
                <h2 class=\"news-title\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo " </h2>
                <div class=\"col-sm-12 news-description bg-info\">
                    ";
                // line 27
                echo $this->getAttribute($context["article"], "description", array());
                echo "
                </div>
                <div class=\"news-info col-sm-12\">
                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "article", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary pull-right\"><b>Читать далее... </b><i class=\"fa fa-eye\"></i></a>
                    <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-calendar\"></i> <b>Добавлено: </b><i>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "date", array()), "html", null, true);
                echo "</i></p>
                    <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-folder-o\"></i> <b>Категория: </b><i>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category_name", array()), "html", null, true);
                echo "</i></p>
                    <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-user\"></i> <b>Автор: </b><i>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "email", array()), "html", null, true);
                echo "</i></p>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        // line 39
        echo "</div>
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
        return array (  125 => 39,  122 => 38,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  93 => 27,  88 => 25,  84 => 23,  79 => 22,  77 => 21,  74 => 20,  71 => 19,  64 => 14,  53 => 12,  49 => 11,  45 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} Новости {% endblock %}*/
/* */
/* {% block  sidebar%}*/
/* <div id="sidebar" class="col-sm-3">*/
/*     <div class="side-box">*/
/*         <h2 class="side-title">Категории:</h2>*/
/*         <ul class="category-nav">*/
/*             <li><a href="{{ url.generate('news') }}">Все новости</a></li>*/
/*             {% for row in category %}*/
/*             <li><a href="{{ url.generate('newsCategory', {id:row.id}) }}">{{ row.category_name }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content" class="col-sm-9">*/
/*     {% if news %}*/
/*         {% for article in news %}*/
/*         <div class="col-sm-12 news-box">*/
/*             <div class="row">*/
/*                 <h2 class="news-title">{{ article.title }} </h2>*/
/*                 <div class="col-sm-12 news-description bg-info">*/
/*                     {{ article.description|raw }}*/
/*                 </div>*/
/*                 <div class="news-info col-sm-12">*/
/*                     <a href="{{ url.generate('article',{id: article.id}) }}" class="btn btn-primary pull-right"><b>Читать далее... </b><i class="fa fa-eye"></i></a>*/
/*                     <p class="pull-right" style="margin: 0 10px"><i class="fa fa-calendar"></i> <b>Добавлено: </b><i>{{ article.date }}</i></p>*/
/*                     <p class="pull-right" style="margin: 0 10px"><i class="fa fa-folder-o"></i> <b>Категория: </b><i>{{ article.category_name }}</i></p>*/
/*                     <p class="pull-right" style="margin: 0 10px"><i class="fa fa-user"></i> <b>Автор: </b><i>{{ article.email }}</i></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
