<?php

namespace Entity;

class Ticket
{
    private ?int $id;
    private string $email;
    private string $message;

    /**
     * @param int|null $id
     * @param string $email
     * @param string $message
     */
    public function __construct(?int $id, string $email, string $message)
    {
        $this->id = $id;
        $this->email = $email;
        $this->message = $message;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

}