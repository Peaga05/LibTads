<?php
class Usuario
{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $matricula;
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

    public function setNome(string $_nome): void
    {
        $this->nome = $_nome;
    }

    public function getSobrenome(): ?string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $_sobrenome): void
    {
        $this->sobrenome = $_sobrenome;
    }

    public function getEmail(): ?int
    {
        return $this->email;
    }

    public function setEmail(int $_email): void
    {
        $this->email = $_email;
    }

    public function getSenha(): ?int
    {
        return $this->senha;
    }

    public function setSenha(int $_senha): void
    {
        $this->senha = $_senha;
    }

    public function getMatricula(): ?string
    {
        return $this->matricula;
    }

    public function setMatricula(string $_matricula): void
    {
        $this->matricula = $_matricula;
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
