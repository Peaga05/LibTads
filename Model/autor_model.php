<?php
use DateTime;
class Autor
{
    private $id;
    private $nome;
    private $creationTime;
    private $isDeleted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCreationTime(): ?DateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(DateTime $creationTime): void
    {
        $this->creationTime = $creationTime;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }
}