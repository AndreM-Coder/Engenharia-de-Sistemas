
@extends('layouts.app')


@section('content')
        <div id="magicCarousel" class="carousel slide my-5" data-ride="carousel">

            <!--    Carousel Indicators    -->
            <ol class="carousel-indicators">
                <li data-target="#magicCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#magicCarousel" data-slide-to="1"></li>

            </ol>

            <!--    Carousel Slider    -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{url('images/slide3.png')}}" class="d-block w-100">
                    <div class="carousel-caption">
                        <h3>Comece a vender online em menos de 15 minutes!!</h3>
                        <p>Crie a sus loja online gratuita, adicione os produtos que quer vender e terá a sua loja
                            online pronta a ser usada pelos seus clientes!!</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{url('images/slide4.png')}}" class="d-block w-100">
                    <div class="carousel-caption">
                        <h3>Lojas totalmente otimizadas</h3>
                        <p>Ao criar a sua loja fica com um sistema totalmente automatizado e pronto para receber
                            compradores de todo o mundo!
                        </p>
                    </div>
                </div>

                <!--     Carousel Controls     -->
                <a href="#magicCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#magicCarousel" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>
        </div>



        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">MAIS SIMPLES É IMPOSSÍVEL. <span class="text-muted">Plataforma
                            e-commerce fácil e sem complicações</span></h2>
                    <p class="lead">Vender online pode ser divertido. Crie a sua loja, descreva os produtos e faça
                        upload de imagens em poucos cliques. Não precisa de um Web Designer. Faça você mesmo!</p>
                </div>
                <div class="col-md-5">
                    <img src="{{url('images/loja-responsiva.png')}}" class="d-block w-100">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Canais de Venda Integrados <span class="text-muted">Suporte para
                            redes sociais</span></h2>
                    <p class="lead">Venda diretamente no Facebook, Instagram e Google para milhões de clientes! Sem
                        necessidade de conhecimentos técnicos, crie a sua loja online e receba as suas primeiras
                        encomendas no mesmo dia.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{url('images/gerir-loja.png')}}" class="d-block w-100">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Criar Promoções Especiais. <span class="text-muted">Venda
                            mais!</span></h2>
                    <p class="lead">Leve os seus clientes a fazerem mais compras criando promoções exclusivas e vendendo
                        mais rapidamente. Promova produtos no Instagram e Facebook e mostre os seus produtos a milhões
                        de utilizadores diariamente.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{url('images/gerir-loja.png')}}" class="d-block w-100">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
        <div class="container">
            <div class="callToAction bg-primary">
                <div style="display: flex;width: 100%;">
                    <div class="data">
                        <div class="subtitle">
                            Junte-se a melhor plataforma de e-commerce </div>
                        <div class="title">
                            Comece a vender já</div>
                    </div>
                    <div class="action">
                    <a href="{{url('user/loja/create')}}" class="button">
                            Criar Loja Online </a>
                    </div>
                </div>
            </div>
        </div>
        @endsection