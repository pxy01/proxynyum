@extends('layout.layout')

@section('title')
    Je ne peut pas me déplacer au bureau de vote
@endsection


@section('content')

    <div class="container-fluid page2-background">
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
                                <a href="">Je ne peut pas me deplacer pour voter</a>
                            </div>
                            <div class="option-two">
                                Nous somme là :)<br><br>

                                Nous travaillons sur le developpement d'une nouvelle solution pour permettre aux électeurs d'exprimer leur vote ou qu'il soient pour faire partie du million d'utilisateur, laisser nous votre adresse email !
                            </div>
                            <div class="option-form">

                                <form action="" class="formulaire">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 text-right champ-label">
                                                ADRESSE MAIL:
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control champ-formulaire" placeholder="@">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 text-right champ-label">
                                                COMMUNE ELECTORALE <sup>*</sup>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="tags" class="form-control champ-formulaire" placeholder="Saisissez votre commune electorale">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-sm-6 text-left button-mobile-position">
                                            <button class="button-style">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="notice">
                             <sup>*</sup>Si vous avez un doute, contactez votre mairie pour connaître votre commune électorale
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