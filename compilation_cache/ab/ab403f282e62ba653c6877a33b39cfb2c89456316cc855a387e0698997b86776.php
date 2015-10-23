<?php

/* services_view.php */
class __TwigTemplate_a4fb909759c07025d544d70cb4c07cf3b807ae50da96e99c2543be2478c9a188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.php", "services_view.php", 1);
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
    <h2>Компания <a href=\"/\">Web Dealer</a> оказывает следующие услуги:</h2>
    <ul>
        <li>создание и доработка сайтов разной сложности (от сайтов-визиток, лендингов до социальных сетей и сложных Web-сервисов);</li>
        <li>разрабатываем браузерные и мобильные версии сайтов, мобильные приложения и приложения для социальных сетей;</li>
        <li>созданием уникального графического дизайна / редизайн (сайтов и полиграфической продукции, фирменного стиля),
            а также предоставляем услуги 3D моделирования и анимации с помощью технологий 3D и flash;</li>
        <li>полной SEO оптимизацией, от создания карты сайта, ЧПУ до хеширования данных. Работаем с биржами ссылок, контекстной рекламой Google, Yandex;</li>
        <li>написанием уникального контента, с использованием новейших версий Advego и написание технической документации;</li>
        <li>наполнением сайтов, удалением вирусов, предоставлением услуг хостинга;</li>
        <li>всеми видами Интернет-маркетинга.</li>
    </ul>
    <h3>Используем современные технологии:</h3>
    <p>HTML5, CSS3, PHP, JS, AJAX. Jquery, MySQL, PHP.</p>
    <h3>Проводим имплементацию с системами управления контентом для сайтов:</h3>
    <p>WordPress, Joomla, Droopal, ModX, OpenCart, Presta Shop.</p>
    <h3>Вся вёрстка кроссбраузерна, соответствует стандартам W3C.</h3>
</div>
";
    }

    public function getTemplateName()
    {
        return "services_view.php";
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
/*     <h2>Компания <a href="/">Web Dealer</a> оказывает следующие услуги:</h2>*/
/*     <ul>*/
/*         <li>создание и доработка сайтов разной сложности (от сайтов-визиток, лендингов до социальных сетей и сложных Web-сервисов);</li>*/
/*         <li>разрабатываем браузерные и мобильные версии сайтов, мобильные приложения и приложения для социальных сетей;</li>*/
/*         <li>созданием уникального графического дизайна / редизайн (сайтов и полиграфической продукции, фирменного стиля),*/
/*             а также предоставляем услуги 3D моделирования и анимации с помощью технологий 3D и flash;</li>*/
/*         <li>полной SEO оптимизацией, от создания карты сайта, ЧПУ до хеширования данных. Работаем с биржами ссылок, контекстной рекламой Google, Yandex;</li>*/
/*         <li>написанием уникального контента, с использованием новейших версий Advego и написание технической документации;</li>*/
/*         <li>наполнением сайтов, удалением вирусов, предоставлением услуг хостинга;</li>*/
/*         <li>всеми видами Интернет-маркетинга.</li>*/
/*     </ul>*/
/*     <h3>Используем современные технологии:</h3>*/
/*     <p>HTML5, CSS3, PHP, JS, AJAX. Jquery, MySQL, PHP.</p>*/
/*     <h3>Проводим имплементацию с системами управления контентом для сайтов:</h3>*/
/*     <p>WordPress, Joomla, Droopal, ModX, OpenCart, Presta Shop.</p>*/
/*     <h3>Вся вёрстка кроссбраузерна, соответствует стандартам W3C.</h3>*/
/* </div>*/
/* {% endblock %}*/
