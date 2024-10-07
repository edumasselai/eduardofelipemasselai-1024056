<?php

    function getdesconto( ){
        return $_REQUEST["desconto"];
    }
    function getvalor() {
        try{
            if(isset(return $_REQUEST["valor"]));{
                if(is_numeric(return $_REQUEST["valor"]));{
                return $_REQUEST["valor"];
                }
            }
        } catch (\throwble $e){
            exibemensagem("erro ao obter valor: " .$e->getmensagem);
            return 0;
        }
    }

    function calculavalorfinal( ){
        return getvalor() - getdesconto();
    }
    function exibemensagem($mensagem) {
        echo $mensagem;
    }
    exibemensagem("valor final: ".calculavalorfinal());

    exibemensagem(var_dump($_REQUEST));

?>