<?php
function validarPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacoes) {
     
    $validacao = true;
    
     if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s]+$/", $nome)){
        echo "Nome errado<br>";
        $validacao = false;
}

if(empty(trim($cpf)) or (strlen($cpf)!= 11 and strlen($cpf) != 14)){
        echo "por favor digite o CPF correto<br>";
        $validacao = false;
    }
    else if(!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/",$cpf)){
        echo "Formato Invalido do Cpf<br>";
        $validacao = false;
}
    if(empty(trim($nascimento))) {
      echo "Favor Preencher data nascimento<br>";
      $validacao = false;
   }
    else if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
            echo "Formato inválido de data. Utilize o formato dd/mm/aaaa<br>";
            $validacao = false;    
    }
    else {
            $pedacos = explode('/', $nascimento);
            $dia = $pedacos[0];
            $mes = $pedacos[1];
            $ano = $pedacos[2];
    
        if(!checkdate($mes, $dia, $ano)){
            echo "Data inválida<br>";
            $validacao = false;
        }
        else{
             $dataYmd = $ano.$mes.$dia;
             $dataAtual = date('Ymd');
             
            if($dataAtual < $dataYmd){
            echo "Data Invalido esta no Futuro<br>";
            $validacao = false;
           }
        }      
        
    }
    if(!isset($sexo)) {
        echo "Selecione Sexo<br>";
        $validacao = false;
    }
    if($estado == "-1"){
        echo "Selecione um Estado<br>";
        $validacao = false;
     }
     
    if(empty(trim($telefone)) or (!preg_match("/^\d{3}\s\d{4}\\-\d{4}$/", $telefone))){
        echo "por favor digite o Telefone correto<br>";
        $validacao = false;
    }
    if(empty(trim($observacoes))) {
        echo "Favor escrever algo<br>";
        $validacao = false;
    }
    
if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s\\.\\,]+$/", $observacoes)){
        echo "formato de observacoes incorreta<br>";
        $validacao = false;
     }
     
     return($validacao);
}

?>
