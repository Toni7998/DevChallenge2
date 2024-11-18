@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold text-center text-gray-900 dark:text-gray-100 mb-8">Llista de Compra</h1>

    <!-- Mostrar mensajes de éxito -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-6 text-center">{{ session('success') }}</div>
    @endif

    <!-- Formulario para agregar un nuevo elemento -->
    <form action="{{ route('shopping_list.add') }}" method="POST" class="mb-8 text-center">
        @csrf
        <input type="text" name="item_name" placeholder="Nom de l'element" required
            class="p-3 mb-4 w-3/4 max-w-md border rounded-md text-gray-900 dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700">
        <select name="category" required
            class="p-3 mb-4 w-3/4 max-w-md border rounded-md text-gray-900 dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700">
            <option value="">Selecciona Categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-green-500 text-white p-3 rounded-md hover:bg-green-600 transition-colors">Afegir
            Element</button>
    </form>

    <!-- Formulario para agregar una nueva categoría -->
    <form action="{{ route('shopping_list.add_category') }}" method="POST" class="mb-8 text-center">
        @csrf
        <input type="text" name="category_name" placeholder="Nom de la categoria" required
            class="p-3 mb-4 w-3/4 max-w-md border rounded-md text-gray-900 dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700">
        <button type="submit" class="bg-green-500 text-white p-3 rounded-md hover:bg-green-600 transition-colors">Afegir
            Categoria</button>
    </form>

    <!-- Mostrar los elementos de la lista -->
    <h2 class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-100 mb-6">Elements de la Llista</h2>
    @foreach ($itemsWithIds as $item)
        <div class="item bg-gray-200 dark:bg-gray-700 p-4 rounded-md mb-4 flex justify-between items-center shadow-md">
            <span class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ $item['item_name'] }}
                ({{ $item['category'] }})</span>
            <form action="{{ route('shopping_list.delete') }}" method="POST" class="inline">
                @csrf
                <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                <button type="submit"
                    class="bg-red-500 text-white p-2 rounded-md hover:bg-red-600 transition-colors">Esborrar</button>
            </form>
        </div>
    @endforeach
</div>
@endsection