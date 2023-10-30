<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <h1>Relatório & Feedback</h1>
        <p>
            <?php
            // Verifique se o formulário foi enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $resp = $_POST['resp'];
                $rqaresp = $_POST['rqaresp'];
                $inicio = $_POST['inicio'];
                $final = $_POST['final'];

                // Descrições das perguntas
            $perguntasNaoConformes = array(
                'quest01' => '"<strong>A documentação com Requisitos foi entregue?</strong>"' . '<br>' . '[Categoria MÉDIA] - Uma falta de documentação de requisitos pode ter um impacto significativo no projeto, tornando difícil entender e atender aos requisitos. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Certifique-se de que a documentação de requisitos seja revisada e entregue conforme o cronograma estabelecido. Identifique a razão para a falta de entrega e tome medidas para evitar atrasos' . '<br><br><br>',
                'quest02' => '"<strong>Uma equipe técnica avaliou os requisitos?</strong>"' . '<br>' .  '[Categoria LEVE] - A falta de avaliação técnica pode resultar em riscos, mas pode ser gerenciável com menos impacto. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Se não houve avaliação técnica, estabeleça um processo de revisão técnica para garantir que os requisitos sejam avaliados por especialistas. Identifique os motivos da falta de avaliação e implemente um processo para evitar isso.' . '<br><br><br>',
                'quest02b' => '"<strong>Os fornecedores estão em acordo com a equipe técnica?</strong>"' . '<br>' . '[Categoria ALTA] - Discordância entre fornecedores e equipe técnica pode levar a atrasos e conflitos, com alto impacto no projeto. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Realize uma reunião de alinhamento entre fornecedores e a equipe técnica para resolver discordâncias. Estabeleça um processo de comunicação mais eficaz para evitar futuros conflitos.' . '<br><br><br>',
                'quest03' => '"<strong>Os produtos de trabalho foram considerados no planejamento?</strong>"' . '<br>' . '[Categoria MÉDIA] - Falha em considerar produtos de trabalho no planejamento pode afetar a viabilidade do projeto. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Certifique-se de que os produtos de trabalho sejam considerados no planejamento do projeto. Identifique a razão pela qual eles não foram considerados e ajuste o processo de planejamento.' . '<br><br><br>',
                'quest03b' => '"<strong>Os requisitos estão alinhados com os produtos de trabalho disponíveis?"</strong>' . '<br>' . '[Categoria MÉDIA] - Falta de alinhamento pode levar a problemas de implementação e atrasos. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Avalie e alinhe os requisitos com os produtos de trabalho disponíveis. Se necessário, faça ajustes nos requisitos para garantir que estejam alinhados.' . '<br><br><br>',
                'quest04' => '"<strong>Os requisitos são consistentes?"</strong>' . '<br>' . '[Categoria ALTA] - Falta de consistência nos requisitos pode levar a confusão e erros no projeto. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Realize uma revisão detalhada dos requisitos para identificar inconsistências. Atualize e alinhe os requisitos para garantir consistência.' . '<br><br><br>',
                'quest04b' => '"<strong>Uma revisão periódica dos requisitos está sendo feita?</strong>"' . '<br>' . '[Categoria LEVE] - Revisões periódicas são importantes, mas a falta delas pode ser gerenciável com menos impacto. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Estabeleça um processo de revisão periódica dos requisitos para garantir que sejam atualizados regularmente. Identifique a razão pela falta de revisão e ajuste o processo.' . '<br><br><br>',
                'quest05' => '"<strong>Mudanças de requisitos são registradas?</strong>"' . '<br>' . '[Categoria LEVE] - O registro de mudanças é importante, mas a falta disso pode ser gerenciável com menos impacto. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Implemente um sistema de registro de mudanças de requisitos. Garanta que todas as mudanças sejam documentadas e revisadas antes de serem incorporadas ao projeto.' . '<br><br><br>',
                'quest05b' => '"<strong>É analisado o impacto dessas mudanças no projeto?"</strong>' . '<br>' . '[Categoria ALTA] - Quando mudanças importantes de requisitos são feitas, corre-se o risco de refazer o trabalho e aumentar os recursos previstos em planejamento. &#x2757;' . '<br><br>'. '<u>Ação Corretiva:</u> Realize uma análise de impacto de todas as mudanças de requisitos para entender como elas afetam o projeto. Ajuste o plano do projeto conforme necessário.' . '<br><br><br>'
            );

                // Inicialize variáveis para contagem de respostas "sim" e total de perguntas
                $contagemSim = 0;
                $totalPerguntas = 0;
                $status = "";
                $coresPerguntas = array();

    
                // Loop através das variáveis do POST para verificar as respostas
                foreach ($_POST as $key => $value) {
                    if (strpos($key, 'quest') === 0) { // Verificar se o campo começa com 'quest'
                        $totalPerguntas++;
                        if ($value == "sim") {
                            $contagemSim++;
                        }
                    }
                }

                if ($totalPerguntas > 0) { // Verificar se há pelo menos uma pergunta
                    $taxaAderencia = ($contagemSim / $totalPerguntas) * 100;
                } else {
                    $taxaAderencia = 0;
                }
                ?>

                <?php

                
                // Exibe os resultados
                echo "<p>Taxa de Aderência: " . $taxaAderencia . "%</p>";
            
                if ($taxaAderencia == 0) {
                    $status = "ABERTO";
                    echo "<p>Status:". $status . "</p>";
                } else if ($taxaAderencia < 100) {
                    $status = "EM ANDAMENTO";
                    echo "<p>Status:". $status . "</p>";
                } else {
                    $status = "FECHADO";
                    echo "<p>Status:". $status . "</p>";
                }
                ?>
                
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin: 10px; /* Adiciona margem ao redor da tabela */
                    }

                    table, th, td {
                        border: 1px solid black;
                        padding: 10px; /* Adiciona espaço interno nas células da tabela */
                    }
                </style>

                <table>
                    <tr>
                        <td><strong>Nome do Responsável:</strong></td>
                        <td><?php echo $resp; ?></td>
                    </tr>
                    <tr>
                        <td><strong>RQA Responsável:</strong></td>
                        <td><?php echo $rqaresp; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Data:</strong></td>
                        <td><?php echo $inicio; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Data do Prazo:</strong></td>
                        <td><?php echo $final; ?></td>
                    </tr>
                </table>


                <?php
                echo "<p><strong>Não Conformidades apresentadas:</strong></p>";
                if ($taxaAderencia == 100) {
                    echo "<p class='verde'>Nenhuma inconformidade relatada!</p>";
                } else {
                    echo "<ul>";
                    foreach ($_POST as $key => $value) {
                        if (strpos($key, 'quest') === 0 && $value === "nao") {
                            echo "<li class='vermelha'>" . $perguntasNaoConformes[$key] . "</li>" . "<br>";
                        }
                    }
                    echo "</ul";
                }
            }
            ?>
        </p>
    </main>
</body>
</html>
