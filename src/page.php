<?php
/** @var \Ivchuk\Framework\View\Renderer $this */
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
        <?= $this->render(\DVCampus\Catalog\Block\CategoryList::class) ?>
    </nav>
</header>

<main>
    <?= $this->render($this->getContent()) ?>
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
