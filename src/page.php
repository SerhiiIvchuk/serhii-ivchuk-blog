<?php
require_once '../src/data.php';
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
            align-items: center;
            justify-content: space-between;
        }

        .post-list, .post {
            max-width: 50%;
        }
        .post {
            margin-left: 30px;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="serhii.i blog">
        <img src="logo.jpg" alt="Serhii Ivchuk blog  Logo" width="200"/>
    </a>
    <nav>
        <ul>
            <?php foreach (blogGetCategory() as $categoryData) : ?>
                <li>
                    <a href="/<?= $categoryData['url'] ?>"><?= $categoryData['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
    <?php require_once "../src/pages/$page" ?>
</main>


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
