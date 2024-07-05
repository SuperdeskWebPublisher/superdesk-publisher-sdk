<?php

declare(strict_types=1);

namespace AHS\Content;

class Article extends Content implements ArticleInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $publishedAt;

    /**
     * @var array
     */
    protected $authors = [];

    /**
     * @var array
     */
    protected $keywords = [];

    /**
     * @var array
     */
    protected $topics = [];

    /**
     * @var string
     */
    protected $title;

    protected  $description;

    /**
     * @var string
     */
    protected $webcode;

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var string
     */
    protected $url;

    /**
     * @var array
     */
    protected $images = [];

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $issue;

    /**
     * @var string
     */
    protected $section;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $command;

    /**
     * @var Image|null
     */
    protected $image;

    protected $extra = [];

    protected $categories = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIdentifier()
    {
        return $this->getNumber();
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number = null): void
    {
        $this->number = $number;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getPublishedAt(): ?\DateTime
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(\DateTime $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    public function getAuthors(): array
    {
        return $this->authors;
    }

    public function setAuthors(array $authors)
    {
        $this->authors = $authors;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getWebcode(): ?string
    {
        return $this->webcode;
    }

    public function setWebcode(string $webcode = null): void
    {
        $this->webcode = $webcode;
    }

    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function setKeywords(array $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function getTopics(): array
    {
        return $this->topics;
    }

    public function setTopics($topics)
    {
        $this->topics = $topics;
    }  

    public function getFields(): array
    {
        return  $this->fields;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url = null): void
    {
        $this->url = $url;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images = null): void
    {
        $this->images = $images;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language = null): void
    {
        $this->language = $language;
    }

    public function getIssue(): ?string
    {
        return $this->issue;
    }

    public function setIssue(string $issue = null): void
    {
        $this->issue = $issue;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section = null): void
    {
        $this->section = $section;
    }

    public function getBody(): string
    {
        if (null === $this->body) {
            return '';
        }

        return $this->body;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function setCommand(string $command): void
    {
        $this->command = $command;
    }

    public function getOutputFileLocation(): string
    {
        return explode('/', $this->getUrl())[2];
    }

    public function getOutputFileName(): string
    {
        return $this->getNumber().'.json';
    }

    public function setImage(?ImageInterface $image) {
        $this->image = $image;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function isPublished(): bool
    {
        return true;
    }

    public function getExtra(): array
    {
        return $this->extra;
    }

    public function setExtra(array $extra): void
    {
        $this->extra = $extra;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }
}
