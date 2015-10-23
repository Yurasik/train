{% extends "template_view.php" %}

{% block content %}
<div class="container portfolio-content">
    <table class="bg-info">
        <tr>
            <td>Год</td><td>Проект</td><td>Описание</td>
        </tr>
        {% for row in portfolio %}
        <tr>
            <td>{{row.year|escape}}</td>
            <td><a target="_blank" href="{{row.url|escape}}">{{row.url|escape}}</a></td>
            <td>{{row.description|escape}}</td>
        </tr>
        {% endfor %}
    </table>
</div>
{% endblock %}