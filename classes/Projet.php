<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Projet {
    private string $CodeProjet;
    private string $NomProjet;
    private int $DureePrevue;
    
    public function __construct(string $CodeProjet, string $NomProjet, int $DureePrevue) {
        $this->CodeProjet = $CodeProjet;
        $this->NomProjet = $NomProjet;
        $this->DureePrevue = $DureePrevue;
    }
    
    function setDureeProjet(int $DureePrevus) : int {
        return $this->DureePrevue = $DureePrevus;
    }
    
    public function getCodeProjet() : string {
        return $this->CodeProjet;
    }
    
    public function getNomProjet() : string {
        return $this->NomProjet;
    }
    
    public function getDureePrevue(): int {
        return $this->DureePrevue;
    }
    
    public function __toString() {
        return "Projet :" . $this->CodeProjet . " - ". $this->NomProjet. " - " . $this->DureePrevue;
    }
}