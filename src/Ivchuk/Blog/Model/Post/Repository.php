<?php
declare(strict_types=1);

namespace Ivchuk\Blog\Model\Post;

class Repository
{
    private \DI\FactoryInterface $factory;

    /**
     * @param \DI\FactoryInterface $factory
     */
    public function __construct(\DI\FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return Entity[]
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()->setPostId(1)
                ->setTitle('Post 1')
                ->setUrl('post-1')
                ->setText('Post 1 Description')
                ->setAuthor('Author1')
                ->setDate('10.03.07'),
            2 => $this->makeEntity()->setPostId(2)
                ->setTitle('Post 2')
                ->setUrl('post-2')
                ->setText('Post 2 Description')
                ->setAuthor('Author2')
                ->setDate('10.03.98'),
            3 => $this->makeEntity()->setPostId(3)
                ->setTitle('Post 3')
                ->setUrl('post-3')
                ->setText('Post 3 Description')
                ->setAuthor('Author3')
                ->setDate('10.03.95'),
            4 => $this->makeEntity()->setPostId(4)
                ->setTitle('Post 4')
                ->setUrl('post-4')
                ->setText('Post 4 Description')
                ->setAuthor('Author4')
                ->setDate('10.03.96'),
            5 => $this->makeEntity()->setPostId(5)
                ->setTitle('Post 5')
                ->setUrl('post-5')
                ->setText('Post 5 Description')
                ->setAuthor('Author5')
                ->setDate('10.03.93'),
            6 => $this->makeEntity()->setPostId(6)
                ->setTitle('Post 6')
                ->setUrl('post-6')
                ->setText('Post 6 Description')
                ->setAuthor('Author6')
                ->setDate('10.03.01')
        ];
    }

    /**
     * @param string $url
     * @return ?Entity
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getList(),
            static function ($post) use ($url) {
                return $post->getUrl() === $url;
            }
        );

        return array_pop($data);
    }

    /**
     * @param array $postIds
     * @return Entity[]
     */
    public function getByIds(array $postIds): ?Entity
    {
        return array_intersect_key(
            $this->getList(),
            array_flip($postIds)
        );
    }

    /**
     * @return Entity
     */
    private function makeEntity(): Entity
    {
        return $this->factory->make(Entity::class);
    }
}

