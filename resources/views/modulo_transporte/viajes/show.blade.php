<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <form action="">
                <div>
                    <label for="origen"> </label>
                    <input type="text" name="origen" id="origen" value="{{ $old('origen'}}">
                </div>
                <div>
                    <label for="destino"> </label>
                    <input type="text" name="destino" id="destino" value="{{ $old('destino'}}">
                </div>
                <div>
                    <label for="fecha_hora_salida"> </label>
                    <input type="datetime" name="fecha_hora_salida" id="fecha_hora_salida" value="{{ $old('fecha_hora_salida'}}">
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 bg-yellow-700 hover:bg-yellow-600 text-white">enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>