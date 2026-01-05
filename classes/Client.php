<?php
class Client  {
    private int $id;
    private string $nom;
    private string $email;
    private string $motDePasseHash;

    public function __construct(int $id, string $nom, string $email, string $motDePasseHash) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->motDePasseHash = $motDePasseHash;
    }

    public function getId(): int { return $this->id; }
    public function getNom(): string { return $this->nom; }
    public function getEmail(): string { return $this->email; }
    
    public function setNom(string $nom): void { $this->nom = $nom; }
    public function setEmail(string $email): void { $this->email = $email;}
}
?>