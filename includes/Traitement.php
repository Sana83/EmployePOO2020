<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Traitement {
    public static function instanciationUnEmploye() : void {
        $e = new employe(1, "Dupont", "Jacques", new DateTime("07/12/1980"), 1000.00);
        //$nom = $e->getNom();
        //echo "l'employé instancié s'appelle " . $nom;
        echo $e;
    }
    
    public static function instanciationUnEmployeErreur() : void {
        $e = new employe(2, "Durand", "Sylvie", new DateTime("1975/06/14"), 800.00);
        echo $e;
    }
    
    public static function instanciationProjetV1(): void {
        $p = new Projet('PR7', 'Librairie Galistout', 102);
        echo $p;     
        echo "<br>Nom du projet = " . $p->getNomProjet();
    }
    
    public static function instanciationEmployeInformatiqueV1() {
        $p = new Projet('PR7', 'Librairie Galistout', 102);
        $informaticien = new EmployeInformaticien(2,'Dimont', 'Patrick', new DateTime("1980/07/12"), 1200, $p);
        echo "Nom du Projet de l'employé numéro " . $informaticien->getNumero() ." : ". $informaticien->getProjet()->getNomProjet();
        echo "<br>";
    }
}