@extends('user.layouts.app')

@section('content')


        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>oops!</strong> Existe um problema com os dados que introduziu!.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar loja - {{ $loja->nome }}
                    <a class="btn btn-outline-primary float-right" href="{{ action('LojaController@index') }}">Ver
                        Lojas</a>
                    <a class="btn btn-outline-primary float-right" href="{{ action('LojaController@create') }}">Criar
                        Loja</a>
                </div>
                <div class="card-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <form action="{{ route('loja.update',$loja->id) }}" method="POST">
                                @csrf           
                                @method('PUT')                    
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" name="nome" value="{{ $loja->nome }}" class="form-control"
                                            id="inputNome">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputState">Estado</label>
                                        <select id="inputState" name="estado" class="form-control">
                                            @foreach (app\Loja::$estados as $key=>$estado)
                                            @php
                                                $selected = '';
                                               if( $loja->estado == $key) 
                                               {
                                                $selected = ' selected';
                                               }                                            
                                            @endphp
                                            <option value="{{ $key }}" {{ $selected }}>{{ $estado }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                              
                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao"
                                        rows="5">{{ $loja->descricao }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection