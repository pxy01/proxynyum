@extends('layout.layout')

@section('title')
    Je vote blanc
@endsection


@section('content')

    <div class="container-fluid page5-background">
        <!-- menu -->

    @include('partials.header')

        <!-- end menu -->

        <!-- 2eme block -->

        <br><br><br>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div class="rubrique-one">

                    @include('partials.block_white')
                    <div class="block-transparent">
                        <br><br>
                        <div class="option-block deuxieme-block">
                            <div class="option-one">
                                <a href="">Je vote blanc</a>
                            </div>
                            <div class="option-three">
                                Nous allons vous donner un super pouvoir et vous permettre d'influencer le cours de la campagne. Plus nombreux serez, plus important sera l'impact :)<br><br>

                                Pour être informé, laissez-nous votre adresse courriel
                            </div>
                            <div class="option-form">

                                <form action="" class="formulaire">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 text-right mobile-position" style="padding-top: 7px;">
                                                ADRESSE MAIL:
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control champ-formulaire" placeholder="@">
                                                <button class="other-button-style">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br><br><br>
        <!-- fin 2eme block -->
    </div><br><br>
@stop