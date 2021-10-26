@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow"> 

   
<h1 class="text-3xl text-center font-bold">Register</h1>

<form class="mt-4" method="POST" action="">
  @csrf

  <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre de usuario" id="name" name="name"> 

  <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ingrese su contraseña" id="password" name="password">

  <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Repita su contraseña" id="password_confirmation" name="password_confirmation">

  <input type="dni" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ingrese su DNI" id="dni" name="dni">

  <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">

  <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* Error</p>

  <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Registrar</button>

</form>

</div>


@endsection