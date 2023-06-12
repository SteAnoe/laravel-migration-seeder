<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Azienda</th>
              <th scope="col">Stazione di partenza</th>
              <th scope="col">Stazione di arrivo</th>
              <th scope="col">Orario partenza</th>
              <th scope="col">Orario arrivo</th>
              <th scope="col">Codice treno</th>
              <th scope="col">Numero carrozze</th>
              <th scope="col">In ritardo</th>
              <th scope="col">Cancellato</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allTrains as $train)
            <tr>
              <th scope="row">{{$train->Azienda}}</th>
              <td>{{$train->Stazione_di_partenza}}</td>
              <td>{{$train->Stazione_di_arrivo}}</td>
              <td>{{$train->Orario_di_partenza}}</td>
              <td>{{$train->Orario_di_arrivo}}</td>
              <td>{{$train->Codice_treno}}</td>
              <td>{{$train->Numero_carrozze}}</td>
              <td>{{$train->In_orario ? 'Si' : 'No'}}</td>
              <td>{{$train->Cancellato ? 'Si' : 'No'}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>

</body>

</html>