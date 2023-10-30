<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resp = $_POST['resp'];
    $rqaresp = $_POST['rqaresp'];
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
            <input type="radio" name="quest02b" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest02b" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest03">Os produtos de trabalho foram considerados no planejamento? </label>
            <input type="radio" name="quest03" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest03" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest03b">Os requisitos estão alinhados com os produtos de trabalho disponíveis? </label>
            <input type="radio" name="quest03b" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest03b" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest04">Os requisitos são consistentes em sua maioria?</label>
            <input type="radio" name="quest04" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest04" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest04b">Uma revisão periódica dos requisitos está sendo feita?</label>
            <input type="radio" name="quest04b" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest04b" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest05">Mudanças de requisitos são registradas?</label>
            <input type="radio" name="quest05" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest05" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <label for="quest05b">É analisado o impacto dessas mudanças no projeto?</label>
            <input type="radio" name="quest05b" id="q_sim" value="sim" required><label for="q_sim">Sim</label>
            <input type="radio" name="quest05b" id="q_nao" value="nao" required><label for="q_nao">Não</label>
            <button type="submit">Verificar Resultados</button>
            <input type="hidden" name="resp" value="<?php echo $resp; ?>">
            <input type="hidden" name="rqaresp" value="<?php echo $rqaresp; ?>">
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
