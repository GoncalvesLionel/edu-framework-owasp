<?php

namespace Entity;

class Comment
{
    private ?int $id;
    private string $name;
    private string $body;

    /**
     * @param int|null $id
     * @param string $name
     * @param string $body
     */
    public function __construct(?int $id,string $name, string $body)
    {
        $this->id = $id;
        $this->name = $name;
        $this->body = $body;
    }

    public function getId(): int|null
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBody(): string
    {
        return $this->body;
    }

}