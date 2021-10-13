<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Employe {
    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected datetime $dateDeNaissance;
    protected float $salaireM;
    private const MINSALAIRE = 1000;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, Datetime $pddn, float $psalaire){
        $this->numero = $pnum;
        $this->nom = $pnom;
        $this->prenom = $pprenom;
        $this->dateDeNaissance = $pddn;
        //$this->salaireM = $psalaire;
        $this->setSalaireM($psalaire);
    }
    public function getNumero() : int {
        return $this->numero;
    }
    public function getNom() : string {
        return $this->nom;
    }
    
    public function getPrenom() : string {
        return $this->prenom;
    }
        
    public function getDateDeNaissance(): DateTime {
        return $this->dateDeNaissance;
    }
        
    function getSalaireM() : float {
        return $this->salaireM;
    }
    
    function setSalaireM(float $salaireM) : void {
        //$this->salaireM = $salaireM;
        if($salaireM >= self::MINSALAIRE){
            $this->salaireM = $salaireM;
        }
        else{
            throw new Exception("le salaire ne doit pas être inférieur à " . self::MINSALAIRE);
        }
    }     
    
    public function __toString() : string {
        return $this->numero . " - " . $this->getNom() . " - " . $this->getPrenom() . " - " .$this->dateDeNaissance->format('d/m/Y') . " - " . $this->getSalaireM() ."<br>";
    }
}
