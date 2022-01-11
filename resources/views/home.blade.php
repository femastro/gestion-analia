@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lista de Posteos') }}</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cordoba</td>
                            <td>Fiesta de la Cerbeza</td>
                            <td>Column content Fiesta de la Cerbeza</td>
                            <th scope="col">
                                <a class="btn btn-primary" href="">Edit</a>
                                <a class="btn btn-danger" href="">Borra</a>
                            </th>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
