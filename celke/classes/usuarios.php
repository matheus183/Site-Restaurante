<?php


class Usuario{

    private $pdo;

    // construtor 
    function __construct($dbname, $host, $usuario, $senha)

    {
        try 
        {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $usuario, $senha); 
        } catch (PDOException $e)
        {
            echo "Erro com BD: ".$e->getmessage();
        } catch (Exception $e)
        {
            echo "Erro: ".$e->getmessage();
        }
    }



    // cadastrar
    function cadastrar($nome, $email, $senha)
    {
        // verificar dse ja foi cadastrado
        $cmd = $this->pdo->prepare("SELECT id from usuarios WHERE email = :e");
        $cmd->bindValue(":e",$email);
        $cmd->execute();
        if($cmd->rowCount() > 0) // Veio ID
        {
            return false;
        } else // não veio id 
        {
            //cadastrar
            $cmd = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) values (:n, :e, :s)");
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":s",md5($senha));
            $cmd->execute();
            return true;
        }


        // logar
         function entrar($email,$senha)
        {
            $cmd = $this->$pdo->prepare("SELECT * from usuarios WHERE email = :e AND senha = :s");
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":s",md5($senha));
            $cmd->execute();
            if($cmd->rowCount() > 0 ) // se foi encontrado essa pessoa
            {
                $dados  = $cmd->fetch();
                session_start();
                if($dados['id'] == 1)
                {
                    // usuario adm
                    $_SESSION['id_master'] = 1;
                }else
                {
                    // usuario normal
                    $_SESSION['id_usuario'] = $dados['id'];
                }
                return true; // foi encontrada
            } else {
                return false; // não foi encontrada
            }
        }









    }

    
}
?>