<?php


use DateTime;

class Reservation {
    private int $id;
    private int $idClient;
    private int $idVehicule;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private ?string $statut;

    public function __construct(int $id, int $idClient, int $idVehicule, string $debut, string $fin, ?string $statut = 'en_attente') {
        $this->id = $id;
        $this->idClient = $idClient;
        $this->idVehicule = $idVehicule;
        $this->dateDebut = new DateTime($debut);
        $this->dateFin = new DateTime($fin);
        $this->statut = $statut;
    }

    public function getId(): int { return $this->id; }
    public function getDateDebut(): DateTime { return $this->dateDebut; }
    public function getStatut(): ?string { return $this->statut; }

    public function setStatut(string $statut): void { $this->statut = $statut; }
}
?>