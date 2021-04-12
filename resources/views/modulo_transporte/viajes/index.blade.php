<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viajes</title>
</head>
<body class="font-sans">

@include('sweetalert::alert')
    <div class="min-h-full flex flex-col max-w-7xl mx-auto"> 
        <div class="h-20 flex items-center justify-between">
            <h1 class="font-bold text-lg">LISTA DE VIAJE</h1>
                <a href="{{ route('viajes.create') }}" class="px-4 py-2 uppercase bg-blue-700 hover:bg-blue-600 text-white flex items-center rounded shadow">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                nuevo viaje
                </a>
                
        </div>
      <div class="overflow-hidden scroll-x-auto">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-10 py-2 font-bold text-sm uppercase bg-blue-200"> ID VIAJE </th>
                    <th class="px-10 py-2 font-bold text-sm uppercase bg-blue-200"> ORIGEN </th>
                    <th class="px-10 py-2 font-bold text-sm uppercase bg-blue-200"> DESTINO </th>
                    <th class="px-10 py-2 font-bold text-sm uppercase bg-blue-200"> FECHA </th>
                    <th class="px-10 py-2 font-bold text-sm uppercase bg-blue-200"> HORA </th>
                    <td class="px-3 py-2 font-bold text-sm uppercase bg-blue-200">ACCIONES</td>
                </tr>
            </thead>
            <tbody>
                @foreach ( $viajes as $viaje)
                <tr>
                    <td class="px-10 py-2">{{$viaje->id}}</td>
                    <td class="px-10 py-2">{{$viaje->origen}}</td>
                    <td class="px-10 py-2">{{$viaje->destino}}</td>
                    <td class="px-10 py-2">{{$viaje->fecha->format('d/m/Y') }}</td>  
                    <td class="px-10 py-2">{{$viaje->created_at->format('H:m:s')}}</td>             
                   <td>
                   <div class="flex items-center space-x-3">
                         <a href="{{ route('viajes.edit', $viaje->id) }}" class="flex items-center bg-yellow-600 text-white hover:bg-yellow-500 p-2 rounded">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                         </a>
                            <form method="post" action="{{ route('viajes.destroy', $viaje->id) }}" >
                                @method('delete')
                                    {{ csrf_field() }}
                                        <button type="submit" class="flex items-center bg-red-600 text-white hover:bg-red-500 p-2 rounded">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
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
   
</body>
</html>