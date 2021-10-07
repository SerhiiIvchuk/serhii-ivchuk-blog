<?php
require_once 'data.php';
//require_once 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>serhii.i blog</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }

        .post-list {
            display: flex;
        }

        .post-list .post {
            max-width: 30%;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="Serhii Ivchuk blog">
        <img src="logo.jpg" alt="Serhii Ivchuk blog  Logo" width="200"/>
    </a>
    <nav>
        <ul>
            <?php foreach (blogGetCategory() as $category) : ?>
                <li>
                    <a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

    <main>
        <section title="Posts">
        <h1>--><?= $data['name'] ?></h1>

            <div class="post-list">
                <?php foreach (blogGetCategoryPost($data['category_id']) as $post) : ?>
                    <div class="post">
                        <a href="/<?= $post['url'] ?>" title="<?= $post['title'] ?>">
                            <img src="/product-placeholder.jpeg" alt="<?= $post['title'] ?>" width="200"/>
                        </a>
                        <p><a href="/<?= $post['url'] ?>" title="<?= $post['title'] ?>"><?= $post['title'] ?></a></p>
                        <p>By <span><?= $post['author']?></span> </p>
                        <p><?= $post['text'] ?></p>

                        <p> <span><?= $post['date']?></span></p>
                        <a href="/contact-us"><button type="button">Comment</button></a>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
    </main>

<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About this blog</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
            </li>
            <li>
                <a href="/leave-post">Leave your post</a>
            </li>
        </ul>
    </nav>
    <p>© Open tag 2021. All Rights Reserved.</p>
</footer>
</body>
</html>
