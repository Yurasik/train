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
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"sidebar\" class=\"col-sm-3\">
    <div class=\"row\">
        <div class=\"side-box\">
            <h4 class=\"side-title\"><i class=\"fa fa-folder-open-o\"></i>: <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "news"), "method"), "html", null, true);
        echo "\">Все новости</a></h4>
            <ul class=\"category-nav\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "                    <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
</div>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "<div id=\"content\" class=\"col-sm-9\">
    ";
        // line 22
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 24
                echo "        <div class=\"col-sm-12 news-box\">
            <div class=\"row\">
                <h4 class=\"news-title\"><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "article", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a></h4>
                <div class=\"col-sm-12 news-description bg-info\">
                    ";
                // line 28
                echo $this->getAttribute($context["article"], "description", array());
                echo "
                </div>
                <div class=\"news-info col-sm-12\">
                    <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-calendar\"></i> <b>Добавлено: </b><i>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getDate", array(0 => "d-m-Y", 1 => $this->getAttribute($context["article"], "date", array())), "method"), "html", null, true);
                echo "</i></p>
                    <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-folder-o\"></i> <b>Категория: </b><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "newsCategory", 1 => array("id" => $this->getAttribute($context["article"], "category_id", array()))), "method"), "html", null, true);
                echo "\"><i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category_name", array()), "html", null, true);
                echo "</i></a></p>
                    <p class=\"pull-right\" style=\"margin: 0 10px\"><i class=\"fa fa-user\"></i> <b>Автор: </b><i>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "email", array()), "html", null, true);
                echo "</i></p>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
        }
        // line 40
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
        return array (  129 => 40,  126 => 39,  114 => 33,  108 => 32,  104 => 31,  98 => 28,  91 => 26,  87 => 24,  82 => 23,  80 => 22,  77 => 21,  74 => 20,  66 => 14,  55 => 12,  51 => 11,  46 => 9,  41 => 6,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} {{ title }} {% endblock %}*/
/* */
/* {% block sidebar%}*/
/* <div id="sidebar" class="col-sm-3">*/
/*     <div class="row">*/
/*         <div class="side-box">*/
/*             <h4 class="side-title"><i class="fa fa-folder-open-o"></i>: <a href="{{ url.generate('news') }}">Все новости</a></h4>*/
/*             <ul class="category-nav">*/
/*                 {% for row in category %}*/
/*                     <li><a href="{{ url.generate('newsCategory', {id:row.id}) }}">{{ row.category_name }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
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
/*                 <h4 class="news-title"><a href="{{ url.generate('article',{id: article.id}) }}"><i class="fa fa-eye"></i> {{ article.title }}</a></h4>*/
/*                 <div class="col-sm-12 news-description bg-info">*/
/*                     {{ article.description|raw }}*/
/*                 </div>*/
/*                 <div class="news-info col-sm-12">*/
/*                     <p class="pull-right" style="margin: 0 10px"><i class="fa fa-calendar"></i> <b>Добавлено: </b><i>{{ model.getDate("d-m-Y", article.date) }}</i></p>*/
/*                     <p class="pull-right" style="margin: 0 10px"><i class="fa fa-folder-o"></i> <b>Категория: </b><a href="{{ url.generate('newsCategory', {id:article.category_id}) }}"><i>{{ article.category_name }}</i></a></p>*/
/*                     <p class="pull-right" style="margin: 0 10px"><i class="fa fa-user"></i> <b>Автор: </b><i>{{ article.email }}</i></p>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
