@extends('template.navbar')

@section('title','data kegiatan')

@section('content')
<?php
$no = 0;
?>
<div class="px-4 sm:px-6 lg:px-40 mt-6">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <p class="mt-2 text-5xl text-blue-600">
                Data Kegiatan Harian.
            </p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{ route('kegiatan.form') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                Add Data
            </a>            
        </div>
    </div>
    
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class=" text-center py-3.5 pl-4 pr-3 text-sm font-semibold text-gray-900 sm:pl-6">NO</th>
                                <th scope="col" class="px-10 py-3.5 text-left text-sm font-semibold text-gray-900">Hari</th>
                                <th scope="col" class="px-10 py-3.5 text-left text-sm font-semibold text-gray-900">Kegiatan</th>
                                <th scope="col" class="px-10 py-3.5 text-left text-sm font-semibold text-gray-900">Waktu</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($kegiatan as $item)
                            <tr>
                                <td class="whitespace-nowrap py-2 pl-3 pr-2 text-sm text-center font-medium text-gray-900 sm:pl-6">{{ ++$no }}</td>
                                <td class="whitespace-nowrap px-10 py-3.5 text-sm text-gray-500"><a href="{{ route('kegiatan.detail', $item->id) }}">{{ $item ->hari }}</a></td>
                                <td class="whitespace-nowrap px-10 py-3.5 text-sm text-gray-500">{{ $item->kegiatan }}</td>
                                <td class="whitespace-nowrap px-10 py-3.5 text-sm text-gray-500">{{ $item ->waktu }}</td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <div class="button-container flex justify-between">
                                        <a href="{{ route('kegiatan.edit', $item->id) }}" class="justify-center py-2 bg-indigo-600 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 px-6 rounded-xl">Edit</a>
                                        <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="justify-center py-2 bg-indigo-600 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 px-4 rounded-xl" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection