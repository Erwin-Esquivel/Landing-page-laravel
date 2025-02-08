<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BETA</title>
</head>
<body class="m-0 p-0 bg-blue-100 ">
    <div class="">
        <div class="subcont">
            <nav class="flex p-3 bg-gradient-to-r from-blue-500 to-blue-900 text-white justify-center">
                <ul class="flex space-x-4">
                    <li class=" hover:animate-bounce font-bold" ><a href="{{ route('index') }}">Inicio</a></li>
                    <li class=" hover:animate-bounce font-bold" ><a href="{{ route('info') }}">Informacion de usuario</a></li>
                    <li class="hover:animate-bounce font-bold"><a href="{{ route('preguntas') }}">Dudas frecuentes</a></li>
                </ul>
            </nav>

            <div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="mt-4 text-center text-4xl">Sistema informativo sobre actos financieros</h1>
                </div>
            </div>
            
            <div class="flex justify-center items-center mt-10 ">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/2  flex justify-center items-center transform transition-all duration-300 hover:scale-125 hover:shadow-xl">
                    <p class="font-bold ">Este es un sitio web con el objetivo de cultivar a el usuario con temas financieros
                incluyendo RFC, Ahorro, inversiones e impuestos. para que todas y todos puedan tener un futuro mejor financiado 
                    </p>
                </div>
            </div>

            <div class="flex justify-center items-center mt-10 ">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/2  flex justify-center items-center transform transition-all duration-300 hover:scale-125 hover:shadow-xl">
                    <p class="font-bold ">
                        Este sitio web esta en fase beta, por lo que puede tener errores, si encuentras alguno por favor reportalo
                    </p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>