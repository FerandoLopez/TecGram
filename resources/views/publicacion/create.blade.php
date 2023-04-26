@extends('layouts.app')
@section('titulo')
    Crear nueva publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center mx-5">
        <div class="md:w-1/2 px-10">
            <form action="#" id="dropzone"
                class="dropzone border-dashed border-2 w-full h-72 rounded flex flex-col justify-center items-center bg-transparent">

            </form>
        </div>
        <div class="md:w-1/2 px-10 w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="titulo">Título</label>
                    <input class="border p-1 w-full rounded-lg @error('titulo') border-red-500 @enderror" type="text"
                        id="titulo" name="titulo" value="{{ old('titulo') }}"
                        placeholder="@error('titulo') {{ $message }} @enderror">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="titulo">Descripción</label>
                    <textarea class="border p-1 w-full rounded-lg @error('descripcion') border-red-500 @enderror" type="text"
                        id="descripcion" name="descripcion" placeholder="@error('descripcion') {{ $message }} @enderror">
                        {{ old('descripcion') }}
                    </textarea>
                </div>
                <input
                    class="cursor-pointer hover:bg-sky-700 uppercase w-full rounded-lg font-bold bg-sky-600 text-white p-2"
                    type="submit" value="Publicar">
            </form>
        </div>
    </div>
    </div>
@endsection
