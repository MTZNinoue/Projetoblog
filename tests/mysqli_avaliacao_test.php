<?php

    require_once '../includes/funcoes.php';
    require_once '../core/conexao_mysql.php';
    require_once '../core/sql.php';
    require_once '../core/mysql.php';

    insert_teste ('Que meu', 2, 1, 4); 
    buscar_teste(44);
    update_teste (44, 'Não ficou legal', 34, 1, 4); 
    //delete_teste(2);
    /*
    update_teste (2, 'murilo', 'silva@gmail.com'); 
    buscar_teste();*/

    //Teste inserção banco de dados
    function insert_teste ($comment, $nota, $usuario_id, $post_id): void{
        $dados = ['comentario' => $comment, 'nota' => $nota, 'usuario_id' => $usuario_id, 'post_id' => $post_id];
        insere ('avaliacao', $dados);
    }

    // Teste select banco de dados 
    function buscar_teste(): void{
        $usuarios = buscar ('avaliacao', ['*'], [], ''); 
        print_r($usuarios);
    }
    
    // Teste update banco de dados
    function update_teste ($id, $comment, $nota, $usuario_id, $post_id): void{

        $dados = ['comentario' => $comment, 'nota' => $nota, 'usuario_id' => $usuario_id, 'post_id' => $post_id]; 
        $criterio = [['id', '=', $id]];
        atualiza ('avaliacao', $dados, $criterio);
    }
   
    function delete_teste($id): void{
        $usuarios = deleta ('avaliacao', [['id', '=', $id]], ''); print_r($usuarios);
    }
?>