<?php

namespace Entity;

class User
{
    private ?int $id;
    private string $username;
    private string $password;

    /**
     * @param int|null $id
     * @param string $username
     * @param string $password
     */
    public function __construct(?int $id, string $username, string $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

}