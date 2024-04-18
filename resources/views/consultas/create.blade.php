<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Consulta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        /* Estilos para los campos del formulario */
        form div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="datetime-local"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <h1>Crear Consulta</h1>
        <form action="{{ route('consultas.store') }}" method="post">
            @csrf
            <div>
                <label for="fecha">Fecha:</label>
                <input type="datetime-local" id="fecha" name="fecha" required>
            </div>
            <div>
                <label for="paciente_id">Paciente:</label>
                <select id="paciente_id" name="paciente_id" required>
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->NOMBRE }} {{ $paciente->APELLIDO_PATERNO }} {{ $paciente->APELLIDO_MATERNO }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="diagnostico">Diagnóstico:</label>
                <textarea id="diagnostico" name="diagnostico" required></textarea>
            </div>
            <div>
                <label for="tratamiento">Tratamiento:</label>
                <textarea id="tratamiento" name="tratamiento" required></textarea>
            </div>
            <button type="submit">Guardar Consulta</button>
        </form>
</body>
</html>
