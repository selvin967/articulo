@extends('layouts.app')

@section('content')
<div class="card flex flex-col justify-center items-center">
    <form action="{{ route('notes.store') }}" method="POST" class="ml-40 mt-10">
        <h1 class="text-white">Crear Nota</h1>
        @csrf

        <div class="mb-3 flex flex-col gap-4">
            <label for="title" class="form-label text-white">Titulo</label>
            <input name="name" class="form-label-control text-dark w-96" value="{{ old('name') }}" type="text">
            @error('name')
            <div class="text-danger text-red-400">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 flex flex-col gap-4">
            <label for="description" class="form-label text-white">Descripción</label>
            <textarea name="description" class="form-control text-dark w-96">{{ old('description') }}</textarea>
            @error('description')
            <div class="text-danger text-red-400">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 flex flex-col gap-4">
            <label for="category_id" class="form-label text-white">Categoría</label>
            <select name="category_id" class="form-control text-dark w-96">
                <option value="">Seleccionar Categoría</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="text-danger text-red-400">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary text-white bg-red-600 transition duration-300 p-2 rounded-lg">Guardar</button>
    </form>
</div>
@endsection
