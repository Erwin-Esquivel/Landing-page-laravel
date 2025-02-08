<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BETA</title>
</head>
<body class="m-0 p-0 bg-red-100 " >
    <div class="w-full h-screen">
        <div class="">
            <nav class="flex p-3 bg-gradient-to-r from-red-500 to-blue-500 text-white justify-center" >
                <ul class="flex space-x-4" >
                <li class=" hover:animate-bounce font-bold" ><a href="{{ route('index') }}">Inicio</a></li>
                    <li class=" hover:animate-bounce font-bold" ><a href="">Informacion de usuario</a></li>
                    <li class="hover:animate-bounce font-bold"><a href="{{ route('preguntas') }}">Dudas frecuentes</a></li>
                </ul>
            </nav>

            <div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="mt-4 text-center text-4xl">Bienvenido {Usuario}</h1>
                </div>
            </div>
            <div class="h-[550px]">
                <div class="bg-gray-500 p-6 h-full rounded-lg shadow-lg">
                <h2 class="mt-4  text-center text-white text-3xl">Informacion de {Usuario}</h2>

                <img src="{{ asset('images/imagen_ardilla.jfif') }}" alt="Imagen de Ardilla" class=" absolute w-[270px] 
                h-[270px] mx-auto mt-[45px] ml-[8px] rounded-lg shadow-lg">

                <h3 class="mt-6 ml-[304px] text-white text-2xl" > Nombre: 
                    <div class="" >
                        <div class="bg-gray-200 p-6 rounded-lg shadow-lg h-[34px] w-[400px]">
                             <h3 class="mt-[-15px]  text-black text-2xl">{Nombre_db}</h3>
                        </div>
                    </div>
                </h3>
                <h3 class="mt-6 ml-[304px] text-white text-2xl">Apellido: 

                <div class="" >
                        <div class="bg-gray-200 p-6 rounded-lg shadow-lg h-[34px] w-[400px]">
                             <h3 class="mt-[-15px]  text-black text-2xl">{apellido_db}</h3>
                        </div>
                    </div>

                </h3>
                <h3 class="mt-6 ml-[304px] text-white text-2xl">Usuario: 

                <div class="" >
                        <div class="bg-gray-200 p-6 rounded-lg shadow-lg h-[34px] w-[400px]">
                             <h3 class="mt-[-15px]  text-black text-2xl">{Usuario_db}</h3>
                        </div>
                    </div>

                </h3>
                </div>
            </div>

        </divc>
    </div>
</body>
</html>