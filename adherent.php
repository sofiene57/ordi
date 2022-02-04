<?php
class Client{
    public string $nom='';
    public string $prenom='';
    public string $sexe='';
    public string $date='';
    public int $nbrCommande=0;
    public int $budgetDepense=0;

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function getSexe(){
        return $this->sexe;
    }

    public function setDate($date){
        $this->dat = $date;
    }

    public function getDate(){
        return $this->date;
    }

    public function setNbrCommande($nbrCommande){
        $this->nbrCommande = $nbrCommande;
    }

    public function getNbrCommande(){
        return $this->nbrCommande;
    }

    public function setBudgetDepense($budgetDepense){
        $this->budgetDepense = $budgetDepense;
    }

    public function getBudgetDepense(){
        return $this->budgetDepense;
    }

    public function panierMoyen(){
        return 'Panier moyen ' . $this->budgetDepense/$this->nbrCommande;
    }


    public function __construct(string $prenom, string $nom, string $sexe, string $date, int $nbrCommande, int $budgetDepense){
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setSexe($sexe);
        $this->setDate($date);
        $this->setNbrCommande($nbrCommande);
        $this->setBudgetDepense($budgetDepense);
    }
}



$clicli = new Client('Will', 'Smith', 'Homme', '01/02/03', 20, 3000);
$panierMoyen= $clicli->panierMoyen();
var_dump($panierMoyen);
