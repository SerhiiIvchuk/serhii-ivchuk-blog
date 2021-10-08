
        <section title="Recently Published Posts:">
            <h2>Recently Published Posts</h2>
            <div class="post-list">
                <?php foreach (blogGetNewPosts() as $newPost) : ?>
                <div class="post">
                    <a href="/<?= $newPost['url'] ?>" title="<?= $newPost['title'] ?>">
                        <img src="/product-placeholder.jpeg" alt="<?= $newPost['title'] ?>" width="200"/>
                    </a>
                    <p><a href="/<?= $newPost['url'] ?>" title="<?= $newPost['title'] ?>"><?= $newPost['title'] ?></a></p>
                    <p>By <span><?= $newPost['author']?></span> </p>
                    <p><?= $newPost['text'] ?></p>

                    <p> <span><?= $newPost['date']?></span></p>
                    <a href="/contact-us"><button type="button">Comment</button></a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
