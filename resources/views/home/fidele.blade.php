@extends('layout.layout')

@section('title')
    Je suis fidèle aux urnes
@endsection


@section('content')

    <div class="container-fluid page7-background">
        <!-- menu -->

    @include('partials.header')

        <!-- end menu -->

        <!-- 2eme block -->

        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="retour-button">
                    <a href="{{route('index')}}"><i class="fa fa-reply" aria-hidden="true"></i> Retour</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div class="rubrique-one">

                    <div class="block-white">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                <div class="bloc-day">
                                    <span class="title">
                                        DAYS
                                    </span>
                                    <span class="content">
                                        50
                                    </span>
                                </div>
                                <div class="bloc-hour">
                                    <span class="title">
                                        HOURS
                                    </span>
                                    <span class="content">
                                        18
                                    </span>
                                </div>
                                <div class="bloc-minute">
                                    <span class="title">
                                        MINUTES
                                    </span>
                                    <span class="content">
                                        45
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-transparent">
                        <br><br>
                        <div class="option-block deuxieme-block">
                            <div class="option-one">
                                <a href="">Je suis fidèle aux urnes</a>
                            </div>
                            <br><br>
                            <div class="option-three">

                                <span class="coluche">
                                    Ne changez rien à vos habitudes :) <br>
                                    Vous n'avez pas besoin de vous inscrire ici.
                                </span><br>

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