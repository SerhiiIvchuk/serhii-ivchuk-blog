<?php
/** @var \Ivchuk\Blog\Block\Category $block */
?>
<section title="Posts">
        <h1><?= $block->getCategory()->getName() ?></h1>

            <div class="post-list">
                <?php foreach ($block->getCategoryPosts() as $post) : ?>
                    <div class="post">
                        <a href="/<?= $post->getUrl() ?>" title="<?= $post->getTitle() ?>">
                            <img src="/product-placeholder.jpeg" alt="<?= $post->getTitle() ?>" width="200"/>
                        </a>
                        <p><a href="/<?= $post->getUrl() ?>" title="<?= $post->getTitle() ?>"><?= $post->getTitle() ?></a></p>
                        <p>By <span><?= $post->getAuthor()?></span> </p>
                        <p><?= $post->getText() ?></p>

                        <p> <span><?= $post->getDate()?></span></p>
                        <a href="/contact-us"><button type="button">Comment</button></a>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
