<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'classes/employe.php';
include 'includes/traitement.php';
include 'classes/Projet.php';
include 'classes/EmployeNonInformaticien.php';
include 'classes/EmployeInformaticien.php';

try{
    //traitement::instanciationUnEmploye();
    //traitement::instanciationUnEmployeErreur();
    traitement::instanciationUnEmploye();
    traitement::instanciationProjetV1();
    traitement::instanciationEmployeInformatiqueV1();
}
 catch (Exception $ex) {
    echo $ex->getMessage();

}