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