<?php

/* Admin/admin_news_view.html.twig */
class __TwigTemplate_ba947c4a862a957029f6faf0cc0c12d7e9f6f267d3f94fdd3aa4db4714ea5b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin_template_view.html.twig", "Admin/admin_news_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'js' => array($this, 'block_js'),
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
        echo " Администрирование новостей ";
    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\" src=\"/js/tinymce/tinymce.min.js\"></script>
    <script type=\"text/javascript\">
        tinymce.init({
            selector: \".tiny\",
            plugins: \"code\"
        });
    </script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div id=\"content\">
    ";
        // line 17
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 18
            echo "        <div class=\"col-sm-offset-2 col-sm-8\">
            <ol>
                <hr>
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 22
                echo "                    <li>
                        ";
                // line 23
                if (($this->getAttribute($context["article"], "status", array()) == "moderation")) {
                    echo " <b class=\"text-danger\"><i class=\"fa fa-info-circle\"></i> Ожидает модерации -</b>";
                }
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "article", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" target=\"_blank\"><b style=\"margin-right: 10px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</b></a>
                        <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleAdd"), "method"), "html", null, true);
                echo "\" class=\"btn-xs btn-success\">Добавить</a>
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleEdit", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn-xs btn-warning\">Редактировать</a>
                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "articleDelete", 1 => array("id" => $this->getAttribute($context["article"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn-xs btn-danger\">Удалить</a>
                    </li>
                    <hr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </ol>
        </div>
    ";
        } elseif (        // line 33
(isset($context["article_add"]) ? $context["article_add"] : null)) {
            // line 34
            echo "        <div class=\"col-sm-offset-2 col-sm-8\">
            <form action=\"\" method=\"post\">
                <p>
                    <b>Название: </b><br>
                    <input style=\"width: 100%\" type=\"text\" name=\"title\">
                </p>
                <p>
                    <b>Категория:</b><br>
                    <select style=\"width: 100%\" name=\"category\" id=\"category\">
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 44
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    </select>
                </p>
                <p>
                    <b>Новость: </b><br>
                    <textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" class=\"tiny\" rows=\"15\"></textarea>
                </p>
                <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
                <div class=\"clear\"></div>
            </form>
        </div>
    ";
        } elseif (        // line 57
(isset($context["article_edit"]) ? $context["article_edit"] : null)) {
            // line 58
            echo "        <div class=\"col-sm-offset-2 col-sm-8\">
            <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article_edit"]) ? $context["article_edit"] : null), "id", array()), "html", null, true);
            echo "\">
                <p>
                    <b>Заголовок: </b><br>
                    <input style=\"width: 100%\" type=\"text\" name=\"title\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article_edit"]) ? $context["article_edit"] : null), "title", array()), "html", null, true);
            echo "\">
                </p>
                <p>
                    <b>Категория:</b><br>
                    <select style=\"width: 100%\" name=\"category\" id=\"category\">
                        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 69
                echo "                            ";
                if (($this->getAttribute((isset($context["article_edit"]) ? $context["article_edit"] : null), "category_id", array()) == $this->getAttribute($context["row"], "id", array()))) {
                    // line 70
                    echo "                                <option selected class=\"bg-success\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 72
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 74
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </select>
                </p>
                <p>
                    <b>Новость: </b><br>
                    <textarea style=\"width: 100%\" name=\"full_text\" id=\"full_text\" class=\"tiny\" rows=\"15\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article_edit"]) ? $context["article_edit"] : null), "full_text", array()), "html", null, true);
            echo "</textarea>
                </p>
                <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
                <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "adminNews"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
                <div class=\"clear\"></div>
            </form>
        </div>
    ";
        } elseif (        // line 86
(isset($context["category_add"]) ? $context["category_add"] : null)) {
            // line 87
            echo "        <div class=\"col-sm-offset-2 col-sm-8\">
            <form action=\"\" method=\"post\">
                <p>
                    <b>Название категории: </b><br>
                    <input style=\"width: 100%\" type=\"text\" name=\"category_name\">
                </p>
                <p>
                    <b>Принадлежность: </b>
                    <select style=\"width: 100%\" name=\"parent_id\" id=\"category\">
                        <option selected value=\"0\">Основная категория</option>
                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 98
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    </select>
                </p>
                <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
                <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "category"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
                <div class=\"clear\"></div>
            </form>
        </div>
    ";
        } elseif (        // line 107
(isset($context["category_edit"]) ? $context["category_edit"] : null)) {
            // line 108
            echo "        <div class=\"col-sm-offset-2 col-sm-8\">
            <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category_info"]) ? $context["category_info"] : null), "id", array()), "html", null, true);
            echo "\">
                <p>
                    <b>Название категории: </b><br>
                    <input style=\"width: 100%\" type=\"text\" name=\"category_name\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category_info"]) ? $context["category_info"] : null), "category_name", array()), "html", null, true);
            echo "\">
                </p>
                <p>
                    <b>Принадлежность: </b>
                    <select style=\"width: 100%\" name=\"parent_id\" id=\"category\">
                        <option selected value=\"0\">Основная категория</option>
                        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 120
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                    </select>
                </p>
                <button type=\"submit\" name=\"save\" class=\"btn btn-success pull-right\">Сохранить <i class=\"fa fa-file-o\"></i></button>
                <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "category"), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-right: 10px;\"><i class=\"fa fa-close\"></i> Отмена</a>
                <div class=\"clear\"></div>
            </form>
        </div>
    ";
        } elseif (        // line 129
(isset($context["category"]) ? $context["category"] : null)) {
            // line 130
            echo "        <div class=\"col-sm-offset-2 col-sm-8\">
            <ol>
                <hr>
                ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 134
                echo "                    <li>
                        <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "newsCategory", 1 => array("id" => $this->getAttribute($context["row"], "id", array()))), "method"), "html", null, true);
                echo "\" target=\"_blank\"><b style=\"margin-right: 10px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category_name", array()), "html", null, true);
                echo "</b></a>
                        <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "categoryAdd"), "method"), "html", null, true);
                echo "\" class=\"btn-xs btn-success\">Добавить</a>
                        <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "categoryEdit", 1 => array("id" => $this->getAttribute($context["row"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn-xs btn-warning\">Редактировать</a>
                        <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "generate", array(0 => "categoryDelete", 1 => array("id" => $this->getAttribute($context["row"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"btn-xs btn-danger\">Удалить</a>
                    </li>
                    <hr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "            </ol>
        </div>
    ";
        }
        // line 145
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Admin/admin_news_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 145,  342 => 142,  332 => 138,  328 => 137,  324 => 136,  318 => 135,  315 => 134,  311 => 133,  306 => 130,  304 => 129,  297 => 125,  292 => 122,  281 => 120,  277 => 119,  268 => 113,  262 => 110,  258 => 108,  256 => 107,  249 => 103,  244 => 100,  233 => 98,  229 => 97,  217 => 87,  215 => 86,  208 => 82,  202 => 79,  196 => 75,  190 => 74,  182 => 72,  174 => 70,  171 => 69,  167 => 68,  159 => 63,  153 => 60,  149 => 58,  147 => 57,  140 => 53,  131 => 46,  120 => 44,  116 => 43,  105 => 34,  103 => 33,  99 => 31,  89 => 27,  85 => 26,  81 => 25,  74 => 24,  70 => 23,  67 => 22,  63 => 21,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "Admin/admin_template_view.html.twig" %}*/
/* */
/* {% block title %} Администрирование новостей {% endblock %}*/
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
/* {% block content %}*/
/* <div id="content">*/
/*     {% if news %}*/
/*         <div class="col-sm-offset-2 col-sm-8">*/
/*             <ol>*/
/*                 <hr>*/
/*                 {% for article in news %}*/
/*                     <li>*/
/*                         {% if article.status == 'moderation' %} <b class="text-danger"><i class="fa fa-info-circle"></i> Ожидает модерации -</b>{% endif %}*/
/*                         <a href="{{ url.generate('article',{id: article.id}) }}" target="_blank"><b style="margin-right: 10px;">{{ article.title }}</b></a>*/
/*                         <a href="{{ url.generate('articleAdd') }}" class="btn-xs btn-success">Добавить</a>*/
/*                         <a href="{{ url.generate('articleEdit', {id: article.id}) }}" class="btn-xs btn-warning">Редактировать</a>*/
/*                         <a href="{{ url.generate('articleDelete', {id: article.id}) }}" class="btn-xs btn-danger">Удалить</a>*/
/*                     </li>*/
/*                     <hr>*/
/*                 {% endfor %}*/
/*             </ol>*/
/*         </div>*/
/*     {% elseif article_add %}*/
/*         <div class="col-sm-offset-2 col-sm-8">*/
/*             <form action="" method="post">*/
/*                 <p>*/
/*                     <b>Название: </b><br>*/
/*                     <input style="width: 100%" type="text" name="title">*/
/*                 </p>*/
/*                 <p>*/
/*                     <b>Категория:</b><br>*/
/*                     <select style="width: 100%" name="category" id="category">*/
/*                         {% for row in category %}*/
/*                             <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </p>*/
/*                 <p>*/
/*                     <b>Новость: </b><br>*/
/*                     <textarea style="width: 100%" name="full_text" id="full_text" class="tiny" rows="15"></textarea>*/
/*                 </p>*/
/*                 <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*                 <a href="{{ url.generate('adminNews') }}" class="btn btn-danger pull-right" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*                 <div class="clear"></div>*/
/*             </form>*/
/*         </div>*/
/*     {% elseif article_edit %}*/
/*         <div class="col-sm-offset-2 col-sm-8">*/
/*             <form action="" method="post">*/
/*                 <input type="hidden" name="id" value="{{ article_edit.id }}">*/
/*                 <p>*/
/*                     <b>Заголовок: </b><br>*/
/*                     <input style="width: 100%" type="text" name="title" value="{{ article_edit.title }}">*/
/*                 </p>*/
/*                 <p>*/
/*                     <b>Категория:</b><br>*/
/*                     <select style="width: 100%" name="category" id="category">*/
/*                         {% for row in category %}*/
/*                             {% if article_edit.category_id == row.id %}*/
/*                                 <option selected class="bg-success" value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </p>*/
/*                 <p>*/
/*                     <b>Новость: </b><br>*/
/*                     <textarea style="width: 100%" name="full_text" id="full_text" class="tiny" rows="15">{{ article_edit.full_text }}</textarea>*/
/*                 </p>*/
/*                 <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*                 <a href="{{ url.generate('adminNews') }}" class="btn btn-danger pull-right" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*                 <div class="clear"></div>*/
/*             </form>*/
/*         </div>*/
/*     {% elseif category_add %}*/
/*         <div class="col-sm-offset-2 col-sm-8">*/
/*             <form action="" method="post">*/
/*                 <p>*/
/*                     <b>Название категории: </b><br>*/
/*                     <input style="width: 100%" type="text" name="category_name">*/
/*                 </p>*/
/*                 <p>*/
/*                     <b>Принадлежность: </b>*/
/*                     <select style="width: 100%" name="parent_id" id="category">*/
/*                         <option selected value="0">Основная категория</option>*/
/*                         {% for row in category %}*/
/*                             <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </p>*/
/*                 <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*                 <a href="{{ url.generate('category') }}" class="btn btn-danger pull-right" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*                 <div class="clear"></div>*/
/*             </form>*/
/*         </div>*/
/*     {% elseif category_edit %}*/
/*         <div class="col-sm-offset-2 col-sm-8">*/
/*             <form action="" method="post">*/
/*                 <input type="hidden" name="id" value="{{ category_info.id }}">*/
/*                 <p>*/
/*                     <b>Название категории: </b><br>*/
/*                     <input style="width: 100%" type="text" name="category_name" value="{{ category_info.category_name }}">*/
/*                 </p>*/
/*                 <p>*/
/*                     <b>Принадлежность: </b>*/
/*                     <select style="width: 100%" name="parent_id" id="category">*/
/*                         <option selected value="0">Основная категория</option>*/
/*                         {% for row in category %}*/
/*                             <option value="{{ row.id }}">{{ row.category_name }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </p>*/
/*                 <button type="submit" name="save" class="btn btn-success pull-right">Сохранить <i class="fa fa-file-o"></i></button>*/
/*                 <a href="{{ url.generate('category') }}" class="btn btn-danger pull-right" style="margin-right: 10px;"><i class="fa fa-close"></i> Отмена</a>*/
/*                 <div class="clear"></div>*/
/*             </form>*/
/*         </div>*/
/*     {% elseif category %}*/
/*         <div class="col-sm-offset-2 col-sm-8">*/
/*             <ol>*/
/*                 <hr>*/
/*                 {% for row in category %}*/
/*                     <li>*/
/*                         <a href="{{ url.generate('newsCategory', {id:row.id}) }}" target="_blank"><b style="margin-right: 10px;">{{ row.category_name }}</b></a>*/
/*                         <a href="{{ url.generate('categoryAdd') }}" class="btn-xs btn-success">Добавить</a>*/
/*                         <a href="{{ url.generate('categoryEdit', {id: row.id}) }}" class="btn-xs btn-warning">Редактировать</a>*/
/*                         <a href="{{ url.generate('categoryDelete', {id: row.id}) }}" class="btn-xs btn-danger">Удалить</a>*/
/*                     </li>*/
/*                     <hr>*/
/*                 {% endfor %}*/
/*             </ol>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
