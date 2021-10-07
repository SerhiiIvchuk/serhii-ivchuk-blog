<?php
require_once 'data.php';
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
        <form method="post" action="/send-leave-post-request">
            <h2>Add your post here:</h2>
            <div class="field">
                <label for="post-name">Your name:</label>
                <input type="text" id="contact-name" placeholder="John Doe">
            </div>
            <div class="field">
                <label for="post-email">Your email:</label>
                <input type="email" id="contact-email" placeholder="email@example.com">
            </div>
            <div class="field">
                <label for="post-title">Title of your post:</label>
                <textarea id="contact-question" rows="4" placeholder="Please, enter your title"></textarea>
            </div>
            <div class="field">
                <label for="post-text">Text of your post:</label>
                <textarea id="contact-question" rows="4" placeholder="Please, enter your text"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>

    <footer>
        <nav>
            <ul>
                <li>
                    <a href="/about-us">About this blog</a>
                </li>
            <   li>
                    <a href="/terms-and-conditions">Terms & Conditions</a>
                </li>
                <li>
                    <a href="/leave-post">Leave your post</a>
                </li>
            </ul>
        </nav>
        <p>© Open tag 2021. All Rights Reserved.</p>
<   /footer>
</body>
</html>
