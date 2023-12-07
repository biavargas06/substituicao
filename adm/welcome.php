<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }

        .options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .option {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            width: 100%;
            cursor: pointer; /* Adicionado cursor: pointer para indicar que é clicável */
        }

        .option:last-child {
            width: auto;
        }

        .option:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo!</h1>
    <div class="options">
        <a href="solicitacoes_troca_periodo.php" class="option">Solicitações de troca de período</a>
        <a href="solicitar_documentos.php" class="option">Solicitar documentos</a>
        <a href="registrar_professor.php" class="option">Registrar professor</a>
        <a href="#" class="option" id="calendario">Calendário acadêmico</a>
    </div>

    <script>
        // Adiciona um evento de clique ao botão "Calendário acadêmico"
        document.getElementById("calendario").addEventListener("click", function() {
            // Abre o link desejado em uma nova janela
            window.open("https://ifrs.edu.br/bento/wp-content/uploads/sites/13/2023/11/ANEXO-DA-RESOLUCAO-42-2023_Calendario-Academico-2024_Campus-Bento-Goncalves.pdf");
        });
    </script>
</body>
</html>
