<?php
class Client {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct(int $id, string $nom, string $prenom, string $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }
}
?>