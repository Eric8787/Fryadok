<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">

        <nav class="flex py-5 bg-indigo-500 text-white">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2x1 font-bold">Fryadok</p>
            </div>

          <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li>
                <a href="{{ route('login.index') }}">Login</a>
                <a href="{{ route('register.index') }}">Register</a>

            </li>

          </ul>
        </nav>  
      
      @yield('content')
    

  </body>
</html>