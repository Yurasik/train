<?php

/* admin_template_view.php */
class __TwigTemplate_d417740f1cf77acc41cd5077895251b7d36aaca86a48b322b7834d87fcb15035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "admin_template_view.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_view.php";
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
        return "admin_template_view.php";
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
/* {% extends "template_view.php" %}*/
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
