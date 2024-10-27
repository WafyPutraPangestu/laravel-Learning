@extends('template.navbar')

@section('title', 'Formulir Kegiatan')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Formulir Kegiatan</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Form -->
    <form  method="POST">
        @csrf
        <!-- Hari -->
        <div class="mb-4">
            <label for="hari" class="block text-gray-700 text-sm font-bold mb-2">Hari:</label>
            <input type="text" name="hari" id="hari" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('hari') }}">
            @error('hari')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kegiatan -->
        <div class="mb-4">
            <label for="kegiatan" class="block text-gray-700 text-sm font-bold mb-2">Kegiatan:</label>
            <input type="text" name="kegiatan" id="kegiatan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('kegiatan') }}">
            @error('kegiatan')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Waktu -->
        <div class="mb-4">
            <label for="waktu" class="block text-gray-700 text-sm font-bold mb-2">Waktu:</label>
            <input type="text" name="waktu" id="waktu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('waktu') }}">
            @error('waktu')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Kegiatan
            </button>
        </div>
    </form>
</div>
@endsection
