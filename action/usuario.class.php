<?php

class usuario
{

    public $id;

    public $nome;

    public $email;

    public $senha;

    private $SQL;
    public $msgError = "";

    public function conectar()
    {
        global $SQL;
        $SQL = mysqli_connect("localhost", "db_tarefas", "admin123") or die("Não foi possivel conectar ao DB_Tarefas");
        $msgError = mysqli_connect_errno();
    }

    public function cadastrar()
    {
        global $SQL;
    }

    public function logar()
    {
        global $SQL;
    }
}
