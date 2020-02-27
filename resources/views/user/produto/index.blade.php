@extends('user.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Os meus Produtos <a class="btn btn-outline-primary float-right"
                    href="{{ action('ProdutoController@create') }}">Criar Produto</a></div>
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
                                    <td>Preço normal</td>
                                    <td>Preço desconto</td>                                   
                                    <td>Observações</td>
                                    <td>Loja</td>
                                    <td>Categoria</td>                                   
                                    <td>Adicionado Data</td>
                                    <th width="180px">Ações</th>
                                </thead>
                                <tbody>
                                    @foreach ($produtos as $produto)
                                    <tr>
                                        <td>{{ $produto->titulo }}</td>
                                        <td class="inner-table">{{ $produto->descricao }}</td>                                      
                                        <td class="inner-table">{{ $produto->preco_normal }}</td>
                                        <td class="inner-table">{{ $produto->preco_desconto }}</td>                                      
                                        <td class="inner-table">{{ $produto->preco_normal }}</td>
                                        <td class="inner-table">{{ $produto->descricao }}</td>                                      
                                        <td class="inner-table">{{ $produto->preco_normal }}</td>
                                        <td>
                                            <form action="{{ route('loja.destroy',$produto->id) }}" method="POST">

                                                <a class="btn btn-info" href="{{ route('loja.show',$produto->id) }}"><i
                                                        class="far fa-eye"></i></a>

                                                <a class="btn btn-primary"
                                                    href="{{ route('loja.edit',$produto->id) }}"><i
                                                        class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $produtos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection