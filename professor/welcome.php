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
            cursor: pointer;
            box-sizing: border-box; /* Adicionado para garantir que a largura inclua padding e borda */
        }

        .option:nth-child(odd) {
            margin-right: 20px; /* Adiciona margem à direita nos ímpares para separar os pares */
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
        <a href="#" class="option" id="horas">Horários de aula</a>
    </div>

    <script>
        document.getElementById("horas").addEventListener("click", function() {
            window.open("https://drive.google.com/file/d/1tuXOMSHmHeuW8E6IaHFJ82iIzLyH9jkO/view");
        });
    </script>
</body>
</html>
