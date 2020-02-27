@extends('user.layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">As minhas lojas <a class="btn btn-outline-primary float-right"
                        href="{{ action('LojaController@create') }}">Criar Loja</a></div>
                <div class="card-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <td>Nome</td>
                                        <td>Descrição</td>
                                        <td>Quantidade Produtos</td>
                                        <td>Estado</td>
                                        <th width="180px">Ações</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($lojas as $loja)
                                        <tr>
                                            <td>{{ $loja->nome }}</td>
                                            <td class="inner-table">{{ $loja->descricao }}</td>
                                            <td><a href="#" class="badge badge-primary">5</a></td>
                                            <td class="inner-table">{{ app\Loja::$estados[$loja->estado] }}</td>
                                            <td>
                                                <form action="{{ route('loja.destroy',$loja->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-info"
                                                        href="{{ route('loja.show',$loja->id) }}"><i class="far fa-eye"></i></a>

                                                    <a class="btn btn-primary"
                                                        href="{{ route('loja.edit',$loja->id) }}"><i class="far fa-edit"></i></a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $lojas->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection