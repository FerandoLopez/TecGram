@extends('layouts.app')
@section('titulo')
    Iniciar Sesión
@endsection

@section('contenido')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class="rounded-full shadow-xl" src="{{ asset('img/Registro.jpg') }}" alt="">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                @if (session('mensaje'))
                    <p class="text-red-700 my-2">{{ session('mensaje') }}</p>
                @endif
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="username">Username</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror"type="text"
                        id="username" name="username" value="{{ old('username') }}"
                        placeholder="@error('username') {{ $message }} @enderror">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold uppercase" for="password">Password</label>
                    <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="password"
                        id="password" name="password" placeholder="@error('password') {{ $message }} @enderror">
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="remember" id="">
                    <label for="remember" class="text-gray-700">Recuerdame</label>
                </div>
                <input
                    class="cursor-pointer hover:bg-sky-700 uppercase w-full rounded-lg font-bold bg-sky-600 text-white p-2"
                    type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </div>
@endsection
