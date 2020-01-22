<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
echo '<h1>Hello World</h1>';

$inteiro = 12;

$flutuante = 2.4;

$booleano = true; //false

/*

*/

?>

<form action="">
    <label for="nome">Nome:</label>
        <?php echo '<input type="text" id="nome" />'; 
        //para o html aparecer na tela é preciso colocar o echo
        //o php escreve o que ta dentro do echo nesse exemplo em html e o html que executa a ação
        ?>
    
    <label for="email">Email:</label>
        <?php echo '<input type="email" id="email" />'; ?>
</form>

<?php 
    //condicionais
    /*a variavel pode estar em outro bloco de php antes que ainda puxa nos demais, só não pode estar depois de onde ele puxa
    é comum fazer no topo do arquivo um bloco com todas as variaveis do arquivo para melhor localização e alteração das variaveis
    */

    $status = true;
    
    if ($status === true){
        echo '<div style="width: 100px; background-color:green;">Ativo</div>';
        
    } else {
        echo '<div style="width: 100px; background-color:red;">Inativo</div>';
    }
?>

<br>






</body>
</html>