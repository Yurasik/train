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
                echo "\" class=\"btn btn-warning\">Редактировать</a>
                <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleDelete", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-danger\">Удалить</a>
            </p>
            <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        } elseif ((isset($context["article"]) ? $context["article"] : null)) {
            // line 17
            echo "        <form action=\"\" method=\"post\">
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
            echo "\">
            <p><b>Заголовок: <br></b><input style=\"width: 100%\" type=\"text\" name=\"title\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "\"></p>
            <p><b>Описание: <br></b><textarea style=\"width: 100%\" name=\"description\" id=\"description\" rows=\"5\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "description", array()), "html", null, true);
            echo "</textarea></p>
            <p><b>Новость: <br></b><textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" cols=\"35\" rows=\"15\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "full_text", array()), "html", null, true);
            echo "</textarea></p>
            <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить</button>
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\">Отмена</a>
            <div class=\"clear\"></div>
        </form>
    ";
        } else {
            // line 27
            echo "        <h1 class=\"text-center text-info\">Добро пожаловать в панель администратора!</h1>
    ";
        }
        // line 29
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
        return array (  105 => 29,  101 => 27,  94 => 23,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  74 => 17,  71 => 16,  61 => 12,  57 => 11,  51 => 10,  48 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
/*                 <a href="{{ url.generate('articleEdit', {id: article.id}) }}" class="btn btn-warning">Редактировать</a>*/
/*                 <a href="{{ url.generate('articleDelete', {id: article.id}) }}" class="btn btn-danger">Удалить</a>*/
/*             </p>*/
/*             <hr>*/
/*         {% endfor %}*/
/*     {% elseif article %}*/
/*         <form action="" method="post">*/
/*             <input type="hidden" name="id" value="{{ article.id }}">*/
/*             <p><b>Заголовок: <br></b><input style="width: 100%" type="text" name="title" value="{{ article.title }}"></p>*/
/*             <p><b>Описание: <br></b><textarea style="width: 100%" name="description" id="description" rows="5">{{ article.description }}</textarea></p>*/
/*             <p><b>Новость: <br></b><textarea style="width: 100%" name="full_text" id="full_text" cols="35" rows="15">{{ article.full_text }}</textarea></p>*/
/*             <button type="submit" name="save" class="btn btn-success pull-right">Сохранить</button>*/
/*             <a href="{{ url.generate('adminNews') }}" class="btn btn-danger pull-right" style="margin-right: 10px;">Отмена</a>*/
/*             <div class="clear"></div>*/
/*         </form>*/
/*     {% else %}*/
/*         <h1 class="text-center text-info">Добро пожаловать в панель администратора!</h1>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
