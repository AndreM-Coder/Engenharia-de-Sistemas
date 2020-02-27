@extends('user.layouts.app')

@section('content')
<style>
    .my-card {
        position: absolute;
        left: 40%;
        top: -20px;
        border-radius: 50%;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-3">
                    <div class="caixa">
                        <span class="caixa-icon bg-info elevation-1"><i class="fas fa-store"></i></span>
                        <div class="caixa-conteudo">
                            <span class="caixa-texto">Total Lojas</span>
                            <span class="caixa-numero">
                                10
                            </span>
                        </div>
                        <!-- /.caixa-content -->
                    </div>
                </div>
                <div class="col-3">
                    <div class="caixa">
                        <span class="caixa-icon bg-success elevation-1"><i class="fas fa-store"></i></span>
                        <div class="caixa-conteudo">
                            <span class="caixa-texto">Vendas Hoje</span>
                            <span class="caixa-numero">
                                1
                            </span>
                        </div>
                        <!-- /.caixa-content -->
                    </div>
                </div>
                <div class="col-3">
                    <div class="caixa">
                        <span class="caixa-icon bg-warning elevation-1"><i class="fas fa-store"></i></span>
                        <div class="caixa-conteudo">
                            <span class="caixa-texto">Ordem completas</span>
                            <span class="caixa-numero">
                                1
                            </span>
                        </div>
                        <!-- /.caixa-content -->
                    </div>
                </div>
                <div class="col-3">
                    <div class="caixa">
                        <span class="caixa-icon bg-danger elevation-1"><i class="fas fa-store"></i></span>
                        <div class="caixa-conteudo">
                            <span class="caixa-texto">Ordem Pendentes</span>
                            <span class="caixa-numero">
                                1
                            </span>
                        </div>
                        <!-- /.caixa-content -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">

                    

                </div>
            </div>
        </div>
    </div>

</div>


@endsection