@extends('layouts.app')
@section('titulo')
    Registrate en TecGram
@endsection

@section('contenido')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class="rounded-full shadow-xl" src="{{ asset('img/Registro.jpg') }}" alt="">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('cuenta.store') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="name">Nombre</label>
                    <input class="border p-1 w-full rounded-lg @error('name') border-red-500 @enderror" type="text"
                        id="name" name="name" value="{{ old('name') }}"
                        placeholder="@error('name') {{ $message }} @enderror">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="username">Username</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror"type="text"
                        id="username" name="username" value="{{ old('username') }}"
                        placeholder="@error('username') {{ $message }} @enderror">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="email">Email</label>
                    <input class="border p-1 w-full rounded-lg @error('email') border-red-500 @enderror" type="text"
                        id="email" name="email" value="{{ old('email') }}"
                        placeholder="@error('email') {{ $message }} @enderror">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="password">Password</label>
                    <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="password"
                        id="password" name="password" placeholder="@error('password') {{ $message }} @enderror">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="password_confirmation">Repetir
                        Password</label>
                    <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="password"
                        id="password_confirmation" name="password_confirmation">
                </div>
                <input
                    class="cursor-pointer hover:bg-sky-700 uppercase w-full rounded-lg font-bold bg-sky-600 text-white p-2"
                    type="submit" value="Crear cuenta">
            </form>
        </div>
    </div>
@endsection
