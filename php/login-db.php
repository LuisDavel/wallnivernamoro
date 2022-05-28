<?php
	include('conexao.php');
	$login = $_POST['nome_login'];
	$senha = $_POST['password'];
?>

<?php
    $queryLogin = "SELECT * FROM login where login = '$login' and senha = '$senha'";
    $retornoLogin = mysqli_query($con, $queryLogin);

    if (mysqli_num_rows($retornoLogin) == 1){
        header("Location:inicio.php");
    }else{
        header("Location:../index.php?retorno=erro");

    }
?>