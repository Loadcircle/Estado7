<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel')}}</title>
      
    </head>
    <body>
        <h1>Pagina en construcción</h1>
        
        <form action="{{route('sendMessage')}}" method="POST">
            @csrf
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombre y Apellido">
                <label for="email">Correo Electronico</label>
                <input type="text" name="email" id="email" placeholder="janedoe@mail.com">
                <label for="phone">Telefono</label>
                <input type="text" name="phone" id="phone" placeholder="+00999999999">
                <label for="message">Mensaje</label>
                <textarea type="text" name="message" id="message" placeholder="Deja tu mensaje..."></textarea>
            </div>
            <input type="submit" value="Enviar">
            
        @if(count($errors) > 0)
            <span>Verifique los datos ingresados</span>
        @endif
        </form>

    </body>
</html>
