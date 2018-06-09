<?php

class DBConexao
{
    const HOST = "localhost";
    const NOMEBANCO = "copao";
    const USUARIO = "root";
    const SENHA = "root";

    public static $conexao = null;

    public static function getConexao(){

        try{
            if (self::$conexao == null){
                self:: $conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$conexao;

        }catch (PDOException $e){
            die("Falha na conexão ou erro com o banco de dados: ". $e->getMessage());
        }
        return $conexao;
    }
}