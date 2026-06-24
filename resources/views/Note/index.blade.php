<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Notas
            </h2>
            <a href="{{ route('notes.create') }}" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                Crear nota
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200 text-left">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Título</th>
                                <th class="px-4 py-2">Contenido</th>
                                <th class="px-4 py-2">Categorías</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($notes as $note)
                                <tr>
                                    <td class="px-4 py-2">{{ $note->id }}</td>
                                    <td class="px-4 py-2">{{ $note->name }}</td>
                                    <td class="px-4 py-2">{{ $note->description }}</td>
                                    <td class="px-4 py-2">{{ $note->category ? $note->category->name : '-' }}</td>
                                    <td class="px-4 py-2 space-x-3">
                                        <a href="{{ route('notes.show', $note) }}" class="text-blue-600">Ver</a>
                                        <a href="{{ route('notes.edit', $note) }}" class="text-yellow-600">Editar</a>
                                        <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline" onsubmit="return confirm('¿Seguro que deseas eliminar esta nota ?')">
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
            </div>
        </div>
    </div>
</x-app-layout>
