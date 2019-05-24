<?php
class Crud extends ClassConexao{
    
  $crud;
  $contador;

  function prepareStatements($Query, $Parametro){
   countParametro($Parametro);
   this->crud=prepare->this->conectaDB();
    
   for(i=1; i<=this->contador; i++){

   }
  }

  function countParametros($Parametro){
      this->contador=count($Parametro);
  }
}