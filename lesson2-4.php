<?php
$goods = [
    [
        'id' => 1,
        'title' => 'Piano',
        'price' => 2341
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 567
    ],
    [
        'id' => 3,
        'title' => 'Drum',
        'price' => 2564
    ],
]
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>title</title>
    </head>
    <body>
<section>
    <?php foreach ($goods as $good):?>
        <h3><?php echo $good['title']?></h3>
<!--    <img src="/img/goods/--><?php //echo $good['img']; ?><!--"-->
        <p><?php echo $good['price']?></p>
        <a href="good.php?id=<?php echo $good['id'];?>">подробнее</a>
    <?php endforeach; ?>
</section>
    </body>
    </html>

