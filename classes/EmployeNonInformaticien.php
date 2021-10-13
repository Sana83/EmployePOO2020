<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmployeNonInformaticien extends Employe{
    private float $primeA;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, \Datetime $pddn, float $psalaire, float $primeA) {
        parent::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire);
        $this->prime = $primeA;
    }
    
    function getPrimeA() : float {
        return $this->primeA;
    }

    function setPrimeA(float $primeA) : void {
        if($primeA > $this->psalaire){
            $this->primeA = $this->psalaire;
        }
        else{
            $this->primeA = $primeA;
        }
    }
}