<?php foreach($data as $row): ?>
<div class="col-sm-12 bg-info news-box">
    <div class="row">
        <h2 class="bg-primary news-title"><?php echo $row['title']?></h2>
        <div class="col-sm-12">
            <p class="news-description"><?php echo $row['description']?></p>
            <a href="news/news_item/?id=<?php echo $row['id']?>" class="btn btn-primary pull-right">Читать далее...</a>
        </div>
    </div>
</div>
<?php endforeach ?>