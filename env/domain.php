<?php

class model_domain {

function dom() {
    
    require_once 'option.php';
    $sub_domaincon = new model_option();
    $sub_domain = $sub_domaincon->dom();
    $option=$sub_domain;

    if($option==1){//localhost
        $sub_domain="http://localhost";
        return $sub_domain;

    }
    if($option==2){//desarrollo
 $sub_domain="https://dev-tools.lugma.tech"; // o dirección IP del servidor de la base de datos remota
 return $sub_domain;

    }
    if($option==3){//pruebas-staging
        $sub_domain="https://staging-koiosintegrations.lugma.tech";
        return $sub_domain;
    }
    if($option==4){//ptoducción

        $sub_domain="https://koiosintegrations.lugma.tech";
        return $sub_domain;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
function dom_broker() {
    require_once 'option.php';
    $sub_domaincon = new model_option();
    $sub_domain = $sub_domaincon->dom();
    $option=$sub_domain;

    if($option==1){//localhost
        $sub_domain="http://localhost";
        return $sub_domain;

    }
    if($option==2){//desarrollo
 $sub_domain="https://dev-koioscore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
 return $sub_domain;

    }
    if($option==3){//pruebas-staging
        $sub_domain="https://staging-koioscore.lugma.tech";
        return $sub_domain;
    }
    if($option==4){//ptoducción

        $sub_domain="https://koioscore.lugma.tech";
        return $sub_domain;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
}

?>