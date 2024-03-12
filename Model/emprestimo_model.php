<?php
class Emprestimo
{
    private $id;
    private $dataEmprestimo;
    private $dataDevolucao;
    private $dataPrevisao;
    private $isDeleted;
    private $livroId;
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDataEmprestimo(): ?DateTime
    {
        return $this->dataEmprestimo;
    }

    public function setDataEmprestimo(DateTime $dataEmprestimo): void
    {
        $this->dataEmprestimo = $dataEmprestimo;
    }

    public function getDataDevolucao(): ?DateTime
    {
        return $this->dataDevolucao;
    }

    public function setDataDevolucao(?DateTime $dataDevolucao): void
    {
        $this->dataDevolucao = $dataDevolucao;
    }

    public function getDataPrevisao(): ?DateTime
    {
        return $this->dataPrevisao;
    }

    public function setDataPrevisao(?DateTime $_dataPrevisao): void
    {
        $this->dataPrevisao = $_dataPrevisao;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

    public function getLivroId(): ?int
    {
        return $this->livroId;
    }

    public function setLivroId(int $livroId): void
    {
        $this->livroId = $livroId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }
}
