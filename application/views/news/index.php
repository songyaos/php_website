/**
 * Created by PhpStorm.
 * User: songyaoshanzhang
 * Date: 2015/2/5
 * Time: 7:33
 */
<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>