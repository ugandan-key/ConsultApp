<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Consultas</title>
    <!-- Agrega tus enlaces a CSS aquí -->
    <!-- Por ejemplo, si estás usando Bootstrap: -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        table th {
            background-color: #f2f2f2;
        }

        /* Botón "Crear Consulta" */
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>

<body>
    <header>
        <h1>Listado de Consultas</h1>
    </header>
    
    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Paciente</th>
                        <th>Diagnóstico</th>
                        <th>Tratamiento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultas as $consulta)
                        <tr>
                            <td>{{ $consulta->fecha }}</td>
                            <td>{{ $consulta->paciente->NOMBRE }} {{ $consulta->paciente->APELLIDO_PATERNO }} {{ $consulta->paciente->APELLIDO_MATERNO }}</td>
                            <td>{{ $consulta->diagnostico }}</td>
                            <td>{{ $consulta->tratamiento }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $consultas->links() }}
        </div>
    </main>

    <button onclick="openConsultaModal()">Crear Consulta</button>

    <footer>
        <!-- Agrega información adicional en el pie de página si lo deseas -->
    </footer>

    <!-- Agrega tus enlaces a JavaScript aquí -->
    <!-- Por ejemplo, si estás usando Bootstrap: -->
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
    <script>
        function openConsultaModal() {
            window.open('{{ route("consultas.create") }}', '_blank', 'width=600,height=400');
        }
    </script>

</body>
</html>

