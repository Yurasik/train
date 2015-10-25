<?php

/* Admin/admin_template_view.html.twig */
class __TwigTemplate_7ef2841e84f9c7c587f7d8ba4c4905d8236b1ef14a6abfa23f44f6251f5424f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Admin/admin_template_view.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
<?php if( !isset(\$data) ){ ?>

<h1 class=\"text-center text-info\">Добро пожаловать в панель администратора!</h1>

<?php } else { ?>

<?php foreach(\$data as \$row): ?>
    <p class=\"text-center\">
        <b style=\"margin-right: 10px\";><?php echo \$row['title'] ?></b>
        <a href=\"/admin/news-edit/?id=<?php echo \$row['id'] ?>\" class=\"text-info\">Редактировать</a>
        <a href=\"/admin/news-delete/?id=<?php echo \$row['id'] ?>\" class=\"text-danger\">Удалить</a>
        <a href=\"/news/news_item/?id=<?php echo \$row['id'] ?>\">Перейти</a>
    </p>
        <hr>
<?php endforeach; ?>

<?php } ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "Admin/admin_template_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/* <?php if( !isset($data) ){ ?>*/
/* */
/* <h1 class="text-center text-info">Добро пожаловать в панель администратора!</h1>*/
/* */
/* <?php } else { ?>*/
/* */
/* <?php foreach($data as $row): ?>*/
/*     <p class="text-center">*/
/*         <b style="margin-right: 10px";><?php echo $row['title'] ?></b>*/
/*         <a href="/admin/news-edit/?id=<?php echo $row['id'] ?>" class="text-info">Редактировать</a>*/
/*         <a href="/admin/news-delete/?id=<?php echo $row['id'] ?>" class="text-danger">Удалить</a>*/
/*         <a href="/news/news_item/?id=<?php echo $row['id'] ?>">Перейти</a>*/
/*     </p>*/
/*         <hr>*/
/* <?php endforeach; ?>*/
/* */
/* <?php } ?>*/
/* </div>*/
/* {% endblock %}*/
