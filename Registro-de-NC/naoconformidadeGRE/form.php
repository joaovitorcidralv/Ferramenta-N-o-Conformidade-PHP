<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resp = $_POST['resp'];
    $resp_email = $_POST['resp_email'];
    $rqaresp = $_POST['rqaresp'];
    $rqaresp_email = $_POST['rqaresp_email'];
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Não Conformidades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Processo de Gerência de Requisitos</h1>
        <form action="resultado.php" method="post">
            <label for="quest01">A documentação com Requisitos foi entregue? </label>
            <input type="radio" name="quest01" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest01" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest02">Uma equipe técnica avaliou os requisitos? </label>
            <input type="radio" name="quest02" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest02" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest02b">Os fornecedores estão em acordo com a equipe técnica? </label>
            <input type="radio" name="quest02b" id="q_sim" value="sim" required><label for "q_sim">Sim</label>
            <input type="radio" name="quest02b" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="resp_email">Email do Responsável: </label>
            <input type="email" name="resp_email" id="resp_email" required>
            <label for="rqaresp_email">Email do RQA Responsável: </label>
            <input type="email" name="rqaresp_email" id="rqaresp_email" required>
            <label for="quest03">Os produtos de trabalho foram considerados no planejamento? </label>
            <button type="submit">Verificar Resultados</button>
            <input type="hidden" name="resp" value="<?php echo $resp; ?>">
            <input type="hidden" name="rqaresp" value="<?php echo $rqaresp; ?>">
            <input type="hidden" name="resp_email" value="<?php echo $resp_email; ?>"> 
            <input type="hidden" name="rqaresp_email" value="<?php echo $rqaresp_email; ?>"> 
            <input type="hidden" name="inicio" value="<?php echo $inicio; ?>">
            <input type="hidden" name="final" value="<?php echo $final; ?>">
        </form>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>

<?php
}
?>
