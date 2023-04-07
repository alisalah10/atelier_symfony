<?php
namespace App\taxes ;
class calcul{
    
    public function calculMontantTva($pu,$tva){
        $mtva=$pu*$tva;
        return $mtva;
    }
    public function calculMontantTTC($pu,$tva){
        return $pu+($tva*$pu);
    }
}