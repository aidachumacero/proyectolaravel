<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    <title>Crear nuevo viaje</title>
</head>
<body class="bg-gray-100 font-sans min-h-full items-center justify-center flex flex-col">
    <p>
        <b>CREAR UN NUEVO VIAJE </b>
    </p>
    <hr width=600>
    <div class="max-w-7xl mx-auto">
        <div class="max-w-5xl bg-white px-8 py-2 mt-20 rounded-lg shadow-lg">
            <form method="post" action="{{ route('viajes.store') }}">
                {{ csrf_field() }}
            <div class="grid grid-cols-2 gap-4">    
                <div class="pb-4">
                    <label for="origen" class="block text-sm font-medium text-gray-700">ORIGEN</label>
                    <input type="text" name="origen" id="origen" class="px-4 mt-1  border border-indigo focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-9">
                </div>

                <div class="pb-4">
                    <label for="destino" class="block text-sm font-medium text-gray-700">DESTINO</label>
                    <input type="text" name="destino" id="destino" autocomplete="given-name" class="px-4 mt-1 border border-indigo focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-9">
                </div>
    
                
                    <div class="pb-4">
                        <label for="fecha" class="block text-sm font-medium text-gray-700">FECHA</label>
                        <input type="date" name="fecha" id="fecha" class="px-4 mt-1 border border-indigo  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-9">
                    </div>
                
                    <div class="pb-4">
                        <label for="hora" class="block text-sm font-medium text-gray-700">HORA</label>
                        <input type="time" name="hora" id="hora" class="px-4 mt-1 border border-indigo  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-9">
                    </div>
                    <div class="pb-4">
                        <label for="placa" class="block text-sm font-medium text-gray-700">PLACA DE BUS</label>
                        <input type="text" name="placa" id="placa" class="mt-1 px-4 border border-indigo  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-9">
                    </div>
                    <div class="pb-4">
                        <label for="ci" class="block text-sm font-medium text-gray-700">CI USUARIO</label>
                        <input type="text" name="ci" id="ci" class="mt-1 px-4 border border-indigo  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-9">
                    </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="px-5 py-2 bg-blue-700 hover:bg-blue-600 text-white rounded shadow">
                        Enviar</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>