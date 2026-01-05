<?php
class Categorie {
    private int $id;
    private string $nom;
    private ?string $description; // Le ? signifie qu'il peut être NULL

    public function __construct(int $id, string $nom, ?string $description = null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getId(): int { return $this->id; }
    public function getNom(): string { return $this->nom; }
    public function getDescription(): ?string { return $this->description; }

    public function setNom(string $nom){ $this->nom = $nom; }
    public function setDescription(?string $desc){ $this->description = $desc; }
}
?>