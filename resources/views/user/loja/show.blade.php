@extends('user.layouts.app')


@section('content')


<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Ver loja - {{ $loja->nome }} <a href="{{ route('loja.edit',$loja->id) }}"><i
                        class="far fa-edit"></i></a>
                <a class="btn btn-outline-primary float-right" href="{{ action('LojaController@index') }}">Ver
                    Lojas</a>
                <a class="btn btn-outline-primary float-right" href="{{ action('LojaController@create') }}">Criar
                    Loja</a>

            </div>
            <div class="card-body">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $loja->nome }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Descrição:</strong>
                                    {{ $loja->descricao }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Estado:</strong>
                                    {{ app\Loja::$estados[$loja->estado] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






@endsection