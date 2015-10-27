<?php

/* Services/services_view.html.twig */
class __TwigTemplate_b5ce8337906c7e70b4faadebb9a44ab606fd4ca3cd3d95a0c4c1ac1f36552333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Services/services_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo " Услуги ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
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
        return "Services/services_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} Услуги {% endblock %}*/
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
