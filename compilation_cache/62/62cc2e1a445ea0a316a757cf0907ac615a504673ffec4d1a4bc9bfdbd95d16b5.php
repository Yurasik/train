<?php

/* Admin/admin_article_view.html.twig */
class __TwigTemplate_b9dc0e9faf27fd92d121dd1ec50574457ab54c5786a070ce5f64f442f4021cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin_template_view.html.twig", "Admin/admin_article_view.html.twig", 1);
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
        echo " Добавить новость ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"content\" class=\"container\">
    <form action=\"\" method=\"post\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
        echo "\" class=\"btn btn-danger\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
        <p><b>Название: </b><br><input style=\"width: 100%\" type=\"text\" name=\"title\"></p>
        ";
        // line 10
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 11
            echo "        <p>
            <b>Категория:</b><br>
            <select name=\"category\" id=\"category\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            </select>
        </p>
        ";
        }
        // line 20
        echo "        <p><b>Новость: </b><br><textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" class=\"tiny\" rows=\"15\"></textarea></p>
        <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
        <div class=\"clear\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "Admin/admin_article_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  69 => 17,  58 => 15,  54 => 14,  49 => 11,  47 => 10,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "Admin/admin_template_view.html.twig" %}*/
/* */
/* {% block title %} Добавить новость {% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content" class="container">*/
/*     <form action="" method="post">*/
/*         <a href="{{ url.generate('adminNews') }}" class="btn btn-danger" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*         <p><b>Название: </b><br><input style="width: 100%" type="text" name="title"></p>*/
/*         {% if category %}*/
/*         <p>*/
/*             <b>Категория:</b><br>*/
/*             <select name="category" id="category">*/
/*                 {% for row in category %}*/
/*                     <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </p>*/
/*         {% endif %}*/
/*         <p><b>Новость: </b><br><textarea style="width: 100%" name="full_text" id="full_text" class="tiny" rows="15"></textarea></p>*/
/*         <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*         <div class="clear"></div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
