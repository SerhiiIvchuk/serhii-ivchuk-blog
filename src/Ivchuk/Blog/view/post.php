<?php
/** @var \Ivchuk\Blog\Block\Post $post */
$post = $block->getPost();
?>
<div class="product-page">
        <img src="product-placeholder.jpeg" alt="<?= $post->getTitle() ?>" width="300"/>
        <h1><?= $post->getTitle() ?></h1>
        <h3><?= $post->getAuthor() ?></h3>
        <p><?= $post->getText() ?></p>
        <p><span><?= $post->getDate() ?></span></p>
        <a href="/contact-us"><button type="button">Comment</button></a>
</div>
