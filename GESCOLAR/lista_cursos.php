<?php
try
{
    include 'include/conexao.php';

    $stmt = $conecao->prepare("SELECT * FROM aluno ORDER BY nome ASC ");
    $stmt->execute();

} catch(Exception $e) {
        echo $e->getMessege();
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<?php include_once 'includes/cabecalho.php' ?>

<table>
   <thead>
       <tr>
          <th>ID</th>
           <th>Nome</th> 
           </tr>
    </thead>
    <tbody>
    <?php while($cursos = $stmt->fetchObject()): ?>
    <tr>
        <td><?=$cursos->id ?><td> 
        <td><?=$cursos->nome ?></td>
    </tr>
    <?php endwhile ?>
    </tbody>
</table>    