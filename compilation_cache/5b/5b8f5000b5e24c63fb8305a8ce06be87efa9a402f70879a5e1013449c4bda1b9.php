<?php

/* Users/profile_view.html.twig */
class __TwigTemplate_b93bb25d832cebb1cb27ac61161af9e102edb1e8536587ae8a419fefce692cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Users/profile_view.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
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
    public function block_js($context, array $blocks = array())
    {
        // line 4
        echo "    <script type=\"text/javascript\" src=\"/js/tinymce/tinymce.min.js\"></script>
    <script type=\"text/javascript\">
        tinymce.init({
            selector: \".tiny\",
            plugins: \"code\"
        });
    </script>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " ";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        echo "    <div id=\"sidebar\" class=\"col-sm-3\">
        <div class=\"row\">
            <div class=\"side-box\">
                <ul class=\"category-nav\">
                    <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "submitArticle"), "method"), "html", null, true);
        echo "\">Предложить новость</a></li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "<div id=\"content\" class=\"col-sm-9\">
    ";
        // line 29
        if ((isset($context["submit_news"]) ? $context["submit_news"] : null)) {
            // line 30
            echo "    <div class=\"col-sm-8\">
        <form action=\"\" method=\"post\">
            <p>
                <b>Название: </b><br>
                <input style=\"width: 100%\" type=\"text\" name=\"title\">
            </p>
            <p>
                <b>Категория:</b><br>
                <select style=\"width: 100%\" name=\"category\" id=\"category\">
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 40
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </select>
            </p>
            <p>
                <b>Новость: </b><br>
                <textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" class=\"tiny\" rows=\"15\"></textarea>
            </p>
            <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
            <div class=\"clear\"></div>
        </form>
    </div>
    ";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Users/profile_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  115 => 49,  106 => 42,  95 => 40,  91 => 39,  80 => 30,  78 => 29,  75 => 28,  72 => 27,  62 => 20,  56 => 16,  53 => 15,  45 => 13,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block js %}*/
/*     <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         tinymce.init({*/
/*             selector: ".tiny",*/
/*             plugins: "code"*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block title %} {{ title }} {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div id="sidebar" class="col-sm-3">*/
/*         <div class="row">*/
/*             <div class="side-box">*/
/*                 <ul class="category-nav">*/
/*                     <li><a href="{{ url.generate('submitArticle') }}">Предложить новость</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content" class="col-sm-9">*/
/*     {% if submit_news %}*/
/*     <div class="col-sm-8">*/
/*         <form action="" method="post">*/
/*             <p>*/
/*                 <b>Название: </b><br>*/
/*                 <input style="width: 100%" type="text" name="title">*/
/*             </p>*/
/*             <p>*/
/*                 <b>Категория:</b><br>*/
/*                 <select style="width: 100%" name="category" id="category">*/
/*                     {% for row in category %}*/
/*                         <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </p>*/
/*             <p>*/
/*                 <b>Новость: </b><br>*/
/*                 <textarea style="width: 100%" name="full_text" id="full_text" class="tiny" rows="15"></textarea>*/
/*             </p>*/
/*             <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*             <a href="{{ url.generate('adminNews') }}" class="btn btn-danger pull-right" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*             <div class="clear"></div>*/
/*         </form>*/
/*     </div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
