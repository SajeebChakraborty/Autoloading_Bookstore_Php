<?php

namespace Bookstore\Domain;

class Customer {
    private $id;
    private $name;
    private $surname;
    private $email;
    public function __construct(
        int $id,
        string $firstname,
        string $surname,
        string $email
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }
    public function getId(): id {
        return $this->id;
    }
    public function getFirstname(): string {
        return $this->firstname;
    }
    public function getSurname(): string {
        return $this->surname;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
}

?>