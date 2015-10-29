<?php

/* Admin/admin_main_view.html.twig */
class __TwigTemplate_e6d2dd149bf2730c5d87493421976ef0644826c4ced9fc87fe1eb32e53c0de8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin_template_view.html.twig", "Admin/admin_main_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/admin_template_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Панель администратора ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    ";
        // line 7
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 9
                echo "            <p>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "article", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" target=\"_blank\"><b style=\"margin-right: 10px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</b></a>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleEdit", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn-sm btn-warning\">Редактировать</a>
                <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleDelete", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn-sm btn-danger\">Удалить</a>
                <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleAdd"), "method"), "html", null, true);
                echo "\" class=\"btn-sm btn-success\">Добавить</a>
            </p>
            <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        } elseif ((isset($context["article"]) ? $context["article"] : null)) {
            // line 18
            echo "        <form action=\"\" method=\"post\">
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
            echo "\">
            <p>
                <b>Заголовок: </b><br>
                <input style=\"width: 100%\" type=\"text\" name=\"title\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "\">
            </p>
            ";
            // line 25
            if ((isset($context["category"]) ? $context["category"] : null)) {
                // line 26
                echo "            <p>
                <b>Категория:</b><br>
                <select name=\"category\" id=\"category\">
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 30
                    echo "                        ";
                    if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category_id", array()) == $this->getAttribute($context["row"], "id", array()))) {
                        // line 31
                        echo "                            <option selected class=\"bg-success\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                        echo "</option>
                        ";
                    } else {
                        // line 33
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                        echo "</option>
                        ";
                    }
                    // line 35
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                </select>
            </p>
            ";
            }
            // line 39
            echo "            <p>
                <b>Новость: </b><br>
                <textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" class=\"tiny\" rows=\"15\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "full_text", array()), "html", null, true);
            echo "</textarea></p>
            <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
            <div class=\"clear\"></div>
        </form>
    ";
        } else {
            // line 46
            echo "        <h1 class=\"text-center text-info\">Добро пожаловать в панель администратора!</h1>
    ";
        }
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Admin/admin_main_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  149 => 46,  141 => 41,  137 => 39,  132 => 36,  126 => 35,  118 => 33,  110 => 31,  107 => 30,  103 => 29,  98 => 26,  96 => 25,  91 => 23,  85 => 20,  81 => 19,  78 => 18,  75 => 17,  65 => 13,  61 => 12,  57 => 11,  51 => 10,  48 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "Admin/admin_template_view.html.twig" %}*/
/* */
/* {% block title %} Панель администратора {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/*     {% if news %}*/
/*         {% for article in news %}*/
/*             <p>*/
/*                 <a href="{{ url.generate('article',{id: article.id}) }}" target="_blank"><b style="margin-right: 10px;">{{ article.title }}</b></a>*/
/*                 <a href="{{ url.generate('articleEdit', {id: article.id}) }}" class="btn-sm btn-warning">Редактировать</a>*/
/*                 <a href="{{ url.generate('articleDelete', {id: article.id}) }}" class="btn-sm btn-danger">Удалить</a>*/
/*                 <a href="{{ url.generate('articleAdd') }}" class="btn-sm btn-success">Добавить</a>*/
/*             </p>*/
/*             <hr>*/
/*         {% endfor %}*/
/*     {% elseif article %}*/
/*         <form action="" method="post">*/
/*             <a href="{{ url.generate('adminNews') }}" class="btn btn-danger" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*             <input type="hidden" name="id" value="{{ article.id }}">*/
/*             <p>*/
/*                 <b>Заголовок: </b><br>*/
/*                 <input style="width: 100%" type="text" name="title" value="{{ article.title }}">*/
/*             </p>*/
/*             {% if category %}*/
/*             <p>*/
/*                 <b>Категория:</b><br>*/
/*                 <select name="category" id="category">*/
/*                     {% for row in category %}*/
/*                         {% if article.category_id == row.id %}*/
/*                             <option selected class="bg-success" value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                         {% else %}*/
/*                             <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </p>*/
/*             {% endif %}*/
/*             <p>*/
/*                 <b>Новость: </b><br>*/
/*                 <textarea style="width: 100%" name="full_text" id="full_text" class="tiny" rows="15">{{ article.full_text }}</textarea></p>*/
/*             <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*             <div class="clear"></div>*/
/*         </form>*/
/*     {% else %}*/
/*         <h1 class="text-center text-info">Добро пожаловать в панель администратора!</h1>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
