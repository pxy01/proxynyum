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
                                                <select name="" id="" class="champ-formulaire">
                                                    <option value="">Paris</option>
                                                    <option value="">Nice</option>
                                                    <option value="">Monaco</option>
                                                    <option value="">Lyon</option>
                                                    <option value="">Saint Etienne</option>
                                                    <option value="">Nante</option>
                                                    <option value="">Lile</option>
                                                    <option value="">Brest</option>
                                                    <option value="">Guingamp</option>
                                                    <option value="">Marseille</option>
                                                    <option value="">Rennes</option>
                                                    <option value="">Bordeau</option>
                                                    <option value="">Toulouse</option>
                                                    <option value="">Nancy</option>
                                                </select>
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