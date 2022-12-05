<div class="centralizar">
    <form id="espaco" action="sucesso.php" method="POST">
        <fieldset class="fale"> 
            <legend>FALE CONOSCO</legend>
            <div class="alterar">
                <label>Nome: <input type="Text" name="nome" required><br>
            </div>
            <div class="alterar">
                <label>Sobrenome: <input type="Text" name="sobrenome" required><br>
            </div>
            <div class="alterar">
                <label>Email: <input type="e-mail" name="email"required><br>
            </div>
            <div class="alterar">
                <label>Senha: <input type="password" name="senha" required><br>
            </div>
        </fieldset>
        <button>Enviar</button>
    </form>
</div>
<?php
    include("sucesso.php");
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO faleconosco(nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";
    if(mysqli_query($sucesso, $sql)){
        echo "Usuario cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($sucesso);
    }
    mysqli_close($sucesso);

?>