<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo substr($news_item['text'],0,150);?>...
    </div>
    <p><a href="/news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>