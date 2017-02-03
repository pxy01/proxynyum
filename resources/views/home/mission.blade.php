@extends('layout.layout')

@section('title')
    Notre Mission
@endsection


@section('content')

    <div class="container-fluid page9-background">
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
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div id="mission" class="row">

                    <div class="col-sm-12">
                        <div class="mission-block-one">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title">
                                        notre mission
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="text">
                                        L'abstention est devenu le premier parti politique en France, en Europe et à l'international, Notre mission est de développer des services pour lutter contre toute forme d'abstention et de faciliter l'accès au vote en toute circonstance.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mission-block-two">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="icon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="icon">
                                        <i class="fa fa-flag"></i>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="icon">
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mission-block-one other-block">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="title">
                                        securite
                                    </div>
                                    <div class="text">
                                        Aucune collecte de données inutiles. Les seules informations collectées, adresse mail, commune électorale et numéro de téléphone, sont protégées et seront supprimées à la fin des élections législative en juin 2017.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="title">
                                        neutralite
                                    </div>
                                    <div class="text">
                                        Tous les partis politiques ou mouvement bénéficient du même traitement.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="title">
                                        confiance
                                    </div>
                                    <div class="text">
                                        Confier son vote par procuration à un militant de parti politique pour garantir qu'il respectera votre choix politique.
                                    </div>
                                </div>
                            </div>
                            <br><br>
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