<!-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Paises</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Paises</h1>
      <a href="{{ route('paises.create')}}" class= "btn btn-success">Add</a>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Code</th>
                <th scope="col">Pais</th>
                <th scope="col">Capital</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($paises as $pais)
                <tr>
                <th scope="row">{{ $pais->pais_codi }}</th>
              <td>{{ $pais->pais_nomb }}</td>
              <td>{{ $pais->muni_nomb }}</td>
              <td>

              <a href="{{route('paises.edit',['pais'=>$pais->pais_codi]) }}"
                class="btn btn-info"> Edit </a></li> 

              <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi]) }}"
                method='POST' style="display: inline-block">
                @method('delete')
                @csrf
                <input class="btn btn-danger" type="submit" value="Delete">
                </form>
                

              </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
   </body>
</html> -->

<!-- <!doctype html> -->
<html lang="en">
  <head>
 <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pais') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('paises.create') }}" class="btn btn-primary">Add</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Capital</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paises as $pais)
                            <tr>
                                <th scope="row">{{ $pais->pais_codi }}</th>
                                <td>{{ $pais->pais_nomb }}</td>
                                <td>{{ $pais->muni_nomb }}</td>
                                <td>
                                    <a href="{{ route('paises.edit', ['pais' => $pais->pais_codi]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi]) }}" method='POST' style="display: inline-block">
                                        @method('delete')
                                        @csrf
                                        <input class="btn btn-primary" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>