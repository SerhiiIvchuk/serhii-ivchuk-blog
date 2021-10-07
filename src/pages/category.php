

<section title="Posts">
        <h1><?= $data['name'] ?></h1>

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
