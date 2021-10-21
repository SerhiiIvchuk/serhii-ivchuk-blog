<?php
declare(strict_types=1);

namespace Ivchuk\Blog\Model\Post;

class Entity
{
    private int $postId;

    private string $title;

    private string $url;

    private string $text;

    private string $author;

    private string $date;

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return Entity
     */
    public function setPostId(int $postId): Entity
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Entity
     */
    public function setTitle(string $title): Entity
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Entity
     */
    public function setUrl(string $url): Entity
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Entity
     */
    public function setText(string $text): Entity
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return Entity
     */
    public function setAuthor(string $author): Entity
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Entity
     */
    public function setDate(string $date): Entity
    {
        $this->date = $date;
        return $this;
    }
}

