<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Compra</title>
    <style>
        /* Reset de estilos */
        body,
        h1,
        h2,
        p,
        form,
        input,
        select,
        button {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Fondo general */
        body {
            background-color: #f7f7f7;
            color: #333;
            padding: 20px;
            line-height: 1.5;
        }

        /* Contenedor principal */
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Títulos */
        h1,
        h2 {
            text-align: center;
            color: #4CAF50;
        }

        h1 {
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 20px;
        }

        /* Formulario para añadir items y categorías */
        form {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"],
        select {
            padding: 10px;
            margin: 10px;
            width: 80%;
            max-width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Estilo para la lista de elementos */
        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin: 10px 0;
            background-color: #f1f1f1;
            border-radius: 5px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .item span {
            font-size: 18px;
            font-weight: bold;
        }

        .item button {
            background-color: #f44336;
            margin-left: 10px;
        }

        /* Estilo para mensajes de éxito */
        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Llista de Compra</h1>

        <!-- Mostrar mensajes de éxito -->
        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <!-- Formulario para agregar un nuevo elemento -->
        <form action="{{ route('shopping_list.add') }}" method="POST">
            @csrf
            <input type="text" name="item_name" placeholder="Nom de l'element" required>
            <select name="category" required>
                <option value="">Selecciona Categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}">{{ $category }}</option>
                @endforeach
            </select>
            <button type="submit">Afegir Element</button>
        </form>

        <!-- Formulario para agregar una nueva categoría -->
        <form action="{{ route('shopping_list.add_category') }}" method="POST">
            @csrf
            <input type="text" name="category_name" placeholder="Nom de la categoria" required>
            <button type="submit">Afegir Categoria</button>
        </form>

        <!-- Mostrar los elementos de la lista -->
        <h2>Elements de la Llista</h2>
        @foreach ($itemsWithIds as $item)
            <div class="item">
                <span>{{ $item['item_name'] }} ({{ $item['category'] }})</span>
                <form action="{{ route('shopping_list.delete') }}" method="POST" style="display:inline;">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                    <button type="submit">Esborrar</button>
                </form>
            </div>
        @endforeach
    </div>
</body>

</html>