@extends('layouts.app')

@section('content')
<div class="p-6 max-w-2xl">
    <h1 class="text-2xl font-semibold mb-4">Editar Categoría</h1>

    <form method="POST" action="{{ route('categories.update', $category) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Descripción</label>
            <textarea name="description" rows="5" class="w-full border rounded p-2" required>{{ old('description', $category->description) }}</textarea>
        </div>

        <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded">Actualizar</button>
    </form>
</div>
@endsection
