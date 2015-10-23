{% extends "template_view.php" %}

{% block content %}
    {% if news %}
        {% for row in news %}
        <div class="col-sm-12 bg-info news-box">
            <div class="row">
                <h2 class="news-title">{{ row.title|escape }}</h2>
                <div class="col-sm-12">
                    <p class="news-description">{{ row.full_text|escape }}</p>
                </div>
            </div>
        </div>
        {% endfor %}
    {% endif %}
{% endblock %}