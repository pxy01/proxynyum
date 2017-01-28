@extends('layout.layout')

@section('title')
    Je n'est pas le temps de m'y intéresser
@endsection


@section('content')

    <div class="container-fluid page4-background">
        <!-- menu -->

        @include('partials.header')

        <!-- end menu -->

        <!-- 2eme block -->
        <br><br><br>
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
                                <a href="">Je n'est pas le temps de m'y intéresser</a>
                            </div>
                            <div class="option-three">
                                10 minutes montre en mains pour vous faire un avis sur les programmes électoraux.<br><br>

                                Pour être informé, laissez-nous votre adresse courriel
                            </div>
                            <div class="option-form">

                                <form action="" class="formulaire">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 text-right" style="padding-top: 7px;">
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