@extends('layouts.app')

@section('content')
<div class="p-6 max-w-2xl">
    <h1 class="text-2xl font-semibold mb-4">Editar nota</h1>

    <form method="POST" action="{{ route('notes.update', $note) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Título</label>
            <input type="text" name="title" value="{{ old('title', $note->title) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Contenido</label>
            <textarea name="content" rows="5" class="w-full border rounded p-2" required>{{ old('content', $note->content) }}</textarea>
        </div>

        <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded">Actualizar</button>
    </form>
</div>
@endsection
