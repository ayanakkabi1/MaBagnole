<?php


class Avis {
    private int $id;
    private int $idClient;
    private int $idVehicule;
    private int $note;
    private string $commentaire;

    public function __construct(int $id, int $idClient, int $idVehicule, int $note, string $commentaire) {
        $this->id = $id;
        $this->idClient = $idClient;
        $this->idVehicule = $idVehicule;
        $this->setNote($note); // Utilise le setter pour valider la note
        $this->commentaire = $commentaire;
    }

    public function getNote(): int { return $this->note; }
    
    public function setNote(int $note): void {
        if ($note >= 1 && $note <= 5) {
            $this->note = $note;
        }
    }
}