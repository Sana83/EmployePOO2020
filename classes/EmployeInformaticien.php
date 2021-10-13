<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmployeInformaticien extends Employe{
    
    private float $primeM;
    private Projet $sonProjet;

    public function __constuct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire, float $primeM, projet $sonProjet){
        parent::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire);
        $this->prime = $primeM;
        $this->projet = $sonProjet;
    }
    
    function getPrimeM() : float {
        return $this->primeM;
    }
    
    function getProjet() : projet {
        return $this->sonProjet;
    }

    function setPrimeM(float $primeM) : void {
        if($primeM > $this->primeM * 1.3){
            throw new Exception("La prime excéde de 30%");
        }
        else{
            $this->primeM = $primeM;
        }
    }
}
