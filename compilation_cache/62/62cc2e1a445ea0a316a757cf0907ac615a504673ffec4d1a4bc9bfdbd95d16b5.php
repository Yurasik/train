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
        echo "    <div class=\"container\">
        <form action=\"\" method=\"post\">
            <p><b>Заголовок: <br></b><input style=\"width: 100%\" type=\"text\" name=\"title\"></p>
            <p><b>Описание: <br></b><textarea style=\"width: 100%\" name=\"description\" id=\"description\" rows=\"5\"></textarea></p>
            <p><b>Новость: <br></b><textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" cols=\"35\" rows=\"15\"></textarea></p>
            <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Добавить</button>
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
        echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\">Отмена</a>
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
        return array (  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "Admin/admin_template_view.html.twig" %}*/
/* */
/* {% block title %} Добавить новость {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <form action="" method="post">*/
/*             <p><b>Заголовок: <br></b><input style="width: 100%" type="text" name="title"></p>*/
/*             <p><b>Описание: <br></b><textarea style="width: 100%" name="description" id="description" rows="5"></textarea></p>*/
/*             <p><b>Новость: <br></b><textarea style="width: 100%" name="full_text" id="full_text" cols="35" rows="15"></textarea></p>*/
/*             <button type="submit" name="save" class="btn btn-success pull-right">Добавить</button>*/
/*             <a href="{{ url.generate('adminNews') }}" class="btn btn-danger pull-right" style="margin-right: 10px;">Отмена</a>*/
/*             <div class="clear"></div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
