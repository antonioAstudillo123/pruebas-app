<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <div class="container p-5">
        <x-alert type="danger" >
            <x-slot name="mensajeError">
                Mensaje de error 1
            </x-slot> />
            <x-slot name="mensajeSuccess">
                Mensaje de success 2
            </x-slot> />
            <x-slot name="mensajeDanger">
                Mensaje danger 3
            </x-slot> />
        </x-alert>
    </div>


    <livewire:generar-excel />


</body>
</html>
