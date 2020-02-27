@extends('user.layouts.app')


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Criar loja <a class="btn btn-outline-primary float-right"
                        href="{{ action('LojaController@index') }}">Ver Lojas</a></div>
                <div class="card-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <form method="POST" action="{{ action('LojaController@store') }}">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" name="nome" class="form-control" id="inputNome">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputState">Estado</label>
                                        <select id="inputState" name="estado" class="form-control">
                                            @foreach (App\Loja::$estados as $key=>$estado)
                                            <option value="{{ $key }}">{{ $estado }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Criar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection