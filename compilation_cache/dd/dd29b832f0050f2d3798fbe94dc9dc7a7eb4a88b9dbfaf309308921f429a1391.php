<?php

/* Contacts/contacts_view.html.twig */
class __TwigTemplate_3398a04371da530a7793a03058acc8310a17ebb32d2b9a22f3ffea4c961a1680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "Contacts/contacts_view.html.twig", 1);
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
        echo " Контакты ";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"content\" class=\"cols-sm-12\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\" id=\"contact-box\">
                <p><img src=\"images/icq.png\" alt=\"icq\"> 86686613</p>
                <p><img src=\"images/skype.png\" alt=\"skype\"> Yurasik_kh</p>
                <p><img src=\"images/mail.png\" alt=\"mail\">info@yurasik.ml</p>
                <p><img src=\"images/sms.png\" alt=\"sms\">+3 8(063) 02-02-502</p>
            </div>
            <div class=\"col-sm-12\">
                <iframe align=\"left\" src=\"https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%91%D0%BE%D0%B1%D1%80%D1%83%D0%B9%D1%81%D0%BA,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&amp;sll=53.174971,29.250412&amp;sspn=0.127788,0.363579&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%91%D0%BE%D0%B1%D1%80%D1%83%D0%B9%D1%81%D0%BA,+%D0%9C%D0%BE%D0%B3%D0%B8%D0%BB%D1%91%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&amp;ll=53.163,29.241&amp;spn=0.063897,0.181789&amp;t=m&amp;z=13&amp;iwloc=A&amp;output=embed\"
                        frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" align=\"right\" width=\"100%\" height=\"380\">
                </iframe>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Contacts/contacts_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "template_view.html.twig" %}*/
/* */
/* {% block title %} Контакты {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="content" class="cols-sm-12">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12" id="contact-box">*/
/*                 <p><img src="images/icq.png" alt="icq"> 86686613</p>*/
/*                 <p><img src="images/skype.png" alt="skype"> Yurasik_kh</p>*/
/*                 <p><img src="images/mail.png" alt="mail">info@yurasik.ml</p>*/
/*                 <p><img src="images/sms.png" alt="sms">+3 8(063) 02-02-502</p>*/
/*             </div>*/
/*             <div class="col-sm-12">*/
/*                 <iframe align="left" src="https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%91%D0%BE%D0%B1%D1%80%D1%83%D0%B9%D1%81%D0%BA,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&amp;sll=53.174971,29.250412&amp;sspn=0.127788,0.363579&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%91%D0%BE%D0%B1%D1%80%D1%83%D0%B9%D1%81%D0%BA,+%D0%9C%D0%BE%D0%B3%D0%B8%D0%BB%D1%91%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&amp;ll=53.163,29.241&amp;spn=0.063897,0.181789&amp;t=m&amp;z=13&amp;iwloc=A&amp;output=embed"*/
/*                         frameborder="0" marginwidth="0" marginheight="0" scrolling="no" align="right" width="100%" height="380">*/
/*                 </iframe>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
