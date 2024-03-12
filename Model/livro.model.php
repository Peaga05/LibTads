<?php
class Livro
{
    private $id;
    private $titulo;
    private $isbn;
    private $quantidade;
    private $quantidadeDisponivel;
    private $qrCode;
    private $creationTime;
    private $isDeleted;
    private $autorId;
    private $generoId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getQuantidade(): ?int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $_quantidade): void
    {
        $this->quantidade = $_quantidade;
    }

    public function getQuantidadeDisponivel(): ?int
    {
        return $this->quantidadeDisponivel;
    }

    public function setQuantidadeDisponivel(int $_quantidadeDisponivel): void
    {
        $this->quantidade = $_quantidadeDisponivel;
    }

    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    public function setQrCode(string $qrCode): void
    {
        $this->qrCode = $qrCode;
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

    public function getAutorId(): ?int
    {
        return $this->autorId;
    }

    public function setAutorId(int $autorId): void
    {
        $this->autorId = $autorId;
    }

    public function getGeneroId(): ?int
    {
        return $this->generoId;
    }

    public function setGeneroId(int $generoId): void
    {
        $this->generoId = $generoId;
    }
}
