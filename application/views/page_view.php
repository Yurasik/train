<div id="page" class="container-fluid <?php echo $page_id?>">
    <div class="row">
        <div id="page-content" class="container-fluid">
            <div class="row">
                <?php if($sidebar_view != false) include 'application/views/'.$sidebar_view ?>
                <div id="content" class="bg-warning <?php if($sidebar_view == false) echo 'col-sm-12 '.$content_id; else echo 'col-sm-9 '.$content_id ?>">
                <?php include 'application/views/'.$content_view ?>
                </div>
            </div>
        </div>
    </div>
</div>