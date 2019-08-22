<?php
/**
 * Arquivo para regidtrar os dados de um aluno no bando de dados.
 */
if(isset($request['cadastrar']))
{
    try
    {
        include 'incluides/conexao.php';

        $sql = "INSERT INTO ALUNOS (nome, data_nascimento, sexo,
                                    genero, cpf, cidade, estado,
                                    bairro, rua, cep)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ) " ;
                        
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $_REQUEST['nome']);
        $stmt->bindParam(2, $_REQUEST['data_nascimento']);
        $stmt->bindParam(3, $_REQUEST['sexo']);
        $stmt->bindParam(4, $_REQUEST['genero']);
        $stmt->bindParam(5, $_REQUEST['cpf']);
        $stmt->bindParam(6, $_REQUEST['cidade']);
        $stmt->bindParam(7, $_REQUEST['estado']);
        $stmt->bindParam(8, $_REQUEST['bairro']);
        $stmt->bindParam(9, $_REQUEST['rua']);
        $stmt->bindParam(10, $_REQUEST['cep']);
        $stmt->execute();

    } catch(Expection $e) {
        echo $e->getMessage();
    }        

}