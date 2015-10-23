{% extends "template_view.php" %}

{% block content %}
<div class="container">
<?php if( !isset($data) ){ ?>

<h1 class="text-center text-info">Добро пожаловать в панель администратора!</h1>

<?php } else { ?>

<?php foreach($data as $row): ?>
    <p class="text-center">
        <b style="margin-right: 10px";><?php echo $row['title'] ?></b>
        <a href="/admin/news-edit/?id=<?php echo $row['id'] ?>" class="text-info">Редактировать</a>
        <a href="/admin/news-delete/?id=<?php echo $row['id'] ?>" class="text-danger">Удалить</a>
        <a href="/news/news_item/?id=<?php echo $row['id'] ?>">Перейти</a>
    </p>
        <hr>
<?php endforeach; ?>

<?php } ?>
</div>
{% endblock %}