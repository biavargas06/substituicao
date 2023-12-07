<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações de Troca de Período</title>
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
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            width: 80%;
            margin-top: 20px;
        }

        .box {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin: 10px;
            width: 200px;
        }

        button {
            background-color: #2980b9;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #216a94;
        }

        /* Estilo para a caixa de informações (modal) */
        #modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        #modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: left;
        }

        #authorize-btn, #reject-btn {
            margin-top: 10px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        #authorize-btn {
            background-color: #27ae60; /* Verde */
            color: #fff;
        }

        #reject-btn {
            background-color: #e74c3c; /* Vermelho */
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Solicitações de Troca de Período</h1>

    <div class="container">
        <div class="box" onclick="openModal('Bianca', 'História', '3° Informática', '08/12/2023', '15h', 'Não poderei dar aula pois tenho exame.', 'Professor Thyago Salvá')">
            <h2>Solicitação feita por Bianca</h2>
            <button>Visualizar</button>
        </div>

        <div class="box" onclick="openModal('Vargas', 'Matemática', '1° Informática', '10/12/2023', '14h', 'Participação em evento acadêmico.', 'Professor Rafael Jaques')">
            <h2>Solicitação feita por Vargas</h2>
            <button>Visualizar</button>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal">
        <div id="modal-content">
            <h2 id="modal-title"></h2>
            <p><strong>Autor:</strong> <span id="modal-author"></span></p>
            <p><strong>Disciplina:</strong> <span id="modal-discipline"></span></p>
            <p><strong>Turma:</strong> <span id="modal-class"></span></p>
            <p><strong>Data:</strong> <span id="modal-date"></span></p>
            <p><strong>Horário:</strong> <span id="modal-time"></span></p>
            <p><strong>Justificativa:</strong> <span id="modal-justification"></span></p>
            <p><strong>Substituto:</strong> <span id="modal-substitute"></span></p>
            <button id="authorize-btn" onclick="authorizeRequest()">Autorizar</button>
            <button id="reject-btn" onclick="rejectRequest()">Não autorizar</button>
        </div>
    </div>

    <script>
        function openModal(author, discipline, classInfo, date, time, justification, substitute) {
            document.getElementById("modal-title").innerText = "Solicitação de " + author;
            document.getElementById("modal-author").innerText = author;
            document.getElementById("modal-discipline").innerText = discipline;
            document.getElementById("modal-class").innerText = classInfo;
            document.getElementById("modal-date").innerText = date;
            document.getElementById("modal-time").innerText = time;
            document.getElementById("modal-justification").innerText = justification;
            document.getElementById("modal-substitute").innerText = substitute;

            document.getElementById("modal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }

        function authorizeRequest() {
            // Implemente a lógica de autorização aqui
            alert("Solicitação autorizada!");
            closeModal();
        }

        function rejectRequest() {
            // Implemente a lógica de não autorização aqui
            alert("Solicitação não autorizada!");
            closeModal();
        }
    </script>
</body>
</html>
