<?php
class ClassConexao{
  function conectaDB(){
      try{
      $con = new PDO("mysql:host=localhost;dbname=crud;", "root","");
      return $con;
      }catch(PDOException $Erro){
       return $Erro;
      }
  }
}