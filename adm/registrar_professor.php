<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar novo professor</title>
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
            min-height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            width: 80%;
            max-width: 900px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .checkbox-group label {
            flex: 0 0 48%;
            margin-right: 2%;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Registrar novo professor</h1>

    <form>
        <label for="nome">Nome completo do professor:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label>Disciplinas:</label>
        <div class="checkbox-group">
            <input type="checkbox" id="disciplina1" name="disciplinas[]" value="Matemática">
            <label for="disciplina1">Matemática</label>

            <input type="checkbox" id="disciplina2" name="disciplinas[]" value="Português">
            <label for="disciplina2">Português</label>

            <input type="checkbox" id="disciplina3" name="disciplinas[]" value="Ciências">
            <label for="disciplina3">Ciências</label>

            <input type="checkbox" id="disciplina4" name="disciplinas[]" value="História">
            <label for="disciplina4">História</label>

            <input type="checkbox" id="disciplina5" name="disciplinas[]" value="Geografia">
            <label for="disciplina5">Geografia</label>

            <input type="checkbox" id="disciplina6" name="disciplinas[]" value="Inglês">
            <label for="disciplina6">Inglês</label>

            <input type="checkbox" id="disciplina7" name="disciplinas[]" value="Física">
            <label for="disciplina7">Física</label>

            <input type="checkbox" id="disciplina8" name="disciplinas[]" value="Química">
            <label for="disciplina8">Química</label>
        </div>

        <label>Tipo de curso:</label>
        <div class="checkbox-group">
            <input type="checkbox" id="posGraduacao" name="tipoCurso[]" value="Pós-Graduação">
            <label for="posGraduacao">Pós-Graduação</label>

            <input type="checkbox" id="tecnico" name="tipoCurso[]" value="Técnico">
            <label for="tecnico">Técnico</label>

            <input type="checkbox" id="superior" name="tipoCurso[]" value="Superior">
            <label for="superior">Superior</label>
        </div>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
