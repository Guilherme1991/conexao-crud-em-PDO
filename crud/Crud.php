<?php
class Crud extends ClassConexao{
    
  $crud;
  $contador;

  function prepareStatements($Query, $Parametro){
   countParametro($Parametro);
      
   if(contador<=0){
   this->crud=this->conectaDB()->prepare($Query);  
   for(i=1; i<=this->contador; i++){
   this->crud->bindValue($Query, $Parametro[i-1]);
    }
   }
  }

  function countParametros($Parametro){
      this->contador=count($Parametro);
  }
}
