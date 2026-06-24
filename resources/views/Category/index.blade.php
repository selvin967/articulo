<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Categorías</h2>
            <a href="{{ route('categories.create') }}" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                Crear categoría
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="p-4 bg-gray-800 text-white rounded">
                <strong>DEBUG:</strong> count = {{ $categories->count() }}
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($categories->isEmpty())
                        <div class="py-12 text-center">
                            <p class="text-gray-700 dark:text-gray-300 mb-4">No hay categorías disponibles aún.</p>
                            <a href="{{ route('categories.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded">Crear categoría</a>
                        </div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 text-left">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">ID</th>
                                        <th class="px-4 py-2">Nombre</th>
                                        <th class="px-4 py-2">Descripción</th>
                                        <th class="px-4 py-2">Categoría</th>
                                        <th class="px-4 py-2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="px-4 py-2">{{ $category->id }}</td>
                                            <td class="px-4 py-2">{{ $category->name }}</td>
                                            <td class="px-4 py-2">{{ $category->description }}</td>
                                            <td class="px-4 py-2">{{ $category->parent ? $category->parent->name : '-' }}</td>
                                            <td class="px-4 py-2 space-x-3">
                                                <a href="{{ route('categories.show', $category) }}" class="text-blue-600">Ver</a>
                                                <a href="{{ route('categories.edit', $category) }}" class="text-yellow-600">Editar</a>
                                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline" onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
