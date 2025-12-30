<?php
class Vehicule {
    private int $id;
    private string $modele;
    private string $immatriculation;
    private float $prixJour;
    private int $idCategorie;
    private bool $disponible;

    public function __construct(int $id, string $modele, string $immatriculation, float $prixJour, int $idCategorie, bool $disponible = true) {
        $this->id = $id;
        $this->modele = $modele;
        $this->immatriculation = $immatriculation;
        $this->prixJour = $prixJour;
        $this->idCategorie = $idCategorie;
        $this->disponible = $disponible;
    }

    // Getters
    public function getId(): int { return $this->id; }
    public function getModele(): string { return $this->modele; }
    public function getImmatriculation(): string { return $this->immatriculation; }
    public function getPrixJour(): float { return $this->prixJour; }
    public function getIdCategorie(): int { return $this->idCategorie; }
    public function isDisponible(): bool { return $this->disponible; }

    // Setters
    public function setModele(string $m): void { $this->modele = $m; }
    public function setPrixJour(float $p): void { $this->prixJour = $p; }
    public function setDisponible(bool $d): void { $this->disponible = $d; }
}
?>