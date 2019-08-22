<?php
/**
 *  Arquivo para registrar os dados de um aluno no banco de dados.
 */
if(isset($_REQUEST['atualizar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql - "UPDATE alunos SET nome - ?, data_nascimento - ?, sexo -?,
                                  genero = ?, cpf = ?, cidade = ?, estado = ?,
                                  bairro = ?, rua = ?, cep = ?
                              WHERE id aluno = ?) ";

        $stmt - $conexao >prepare($sql);
        $stmt ->bindParam(1, $_REQUEST['nome']);
        $stmt ->bindParam(2, $_REQUEST['data_nascimento']);
        $stmt ->bindParam(3, $_REQUEST['sexo']);
        $stmt ->bindParam(3, $_REQUEST['genero']);
        $stmt ->bindParam(4, $_REQUEST['cpf']);
        $stmt ->bindParam(5, $_REQUEST['cidade']);
        $stmt ->bindParam(6, $_REQUEST['estado']);
        $stmt ->bindParam(7, $_REQUEST['bairro']);
        $stmt ->bindParam(8, $_REQUEST['rua']);
        $stmt ->bindParam(9, $_REQUEST['cep']);
        $stmt ->bindParam(10, $_REQUEST['id_alunoi']);
        $stmt ->execute();

    } catch(Exception $e) {
        echo $e->getMessage();
        
    }
}
?>
<div>
<fieldset>
    <legend>Cadastro de Aluno</legend>
       <form action="editar_alunos.php?atualizar=true">
           <label>Nome: <input type="text" name="nome" required /> </label>
           <label>Cidade: <input type="text" name="cidade" required /> <label>
           <label>CEP: <input type="text" name="cpf" required /> <label>
           <label>Bairro <input type="text" name="bairro" required /> </label>
           <label>Estado: <input type="text" name="rua" required /> <label>
           <label>Data Nasc:: <input type="text" name="data_nascimento" required /> <label>
           <button type="submit">Salvar</button>
        </form>
    </legend>
</div>        

           