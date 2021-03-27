<?php


class Comentario{

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

         function buscarComentarios()
        {
            $cmd = $this->pdo->prepare("SELECT *,(SELECT nome from usuarios WHERE id = fk_id_usuario) as nome_pessoa FROM comentarios ORDER BY id DESC");
            $cmd->execute();
            $dados = $cmd->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }

    }

}
?>