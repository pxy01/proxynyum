@extends('layout.layout')

@section('title')
    Proxynium | Accueil
@stop

@section('content')

    <div class="container-fluid popup-body" id="popup-container" style="display: none;">

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div id="popup" class="row">

                    <div class="col-sm-12">
                        <div class="mission-block-one">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <img src="{{ asset('img/logo.png') }}" alt="" class="popup-logo">
                                </div>
                                <div class="col-sm-12">
                                    <div class="title">
                                        elections presidentielles <br>
                                        23 avril - 7 mai 2017
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mission-block-two">
                            bienvenue ! <br>
                            pour visiter ce site, vous devez être inscrit(e) sur les listes électorales de 2017.
                            <br><br>
                            êtes-vous électeur ?<br><br>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <span id="oui" class="electeur-button">oui</span>
                                    <span id="non" class="electeur-button">non</span>
                                    <span id="jeune" class="electeur-button">je suis jeune jamais inscrit <sup>*</sup></span>
                                    <br>
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

    </div>


    <div class="container-fluid page-background">


    @include('partials.header')

        <!-- end menu -->

        <!-- 1er block -->
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

                        <div class="text-one text-center">
                            Le compte à rebours est lancé ! Plus jamais vous ne verrez les élections de la même façon, Ni sondage, Ni débat, Ni tractation
                        </div>

                        <div class="text-two text-center">
                            Service réservé aux 10 000 premiers inscrits
                        </div>

                        <div class="option-block">
                            <div class="option-one">
                                <a href="{{ route('non.votant') }}">Je ne peut pas me deplacer au bureau de vote</a>
                            </div>
                            <div class="option-one">
                                <a href="{{ route('hesitant') }}">Je vote mais j'hésite</a>
                            </div>
                            <div class="option-one">
                                <a href="{{ route('non.interesse') }}">Je n'est pas le temps de m'y intéresser</a>
                            </div>
                            <div class="option-one">
                                <a href="{{ route('vote.blanc') }}">Je vote blanc</a>
                            </div>
                            <div class="option-one">
                                <a href="{{ route('abstenant') }}">Je m'abstien par conviction</a>
                            </div>
                            <div class="option-one">
                                <a href="{{ route('fidele') }}">Je suis fidèle aux urnes</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1"></div>
        </div>
        <br><br><br>
    </div>
    <br><br>
@stop

@section('js_script')
    {{--<script>--}}
        {{--window.onload = function()--}}
        {{--{--}}
            {{--document.getElementById("popup-container").style.display = "block";--}}
            {{--document.getElementById("footer").style.display = "none";--}}
        {{--}--}}

        {{--$('#oui').click(function () {--}}
            {{--$('.popup-body').fadeOut('hide');--}}
            {{--document.getElementById("footer").style.display = "block";--}}
        {{--});--}}
    {{--</script>--}}


    <script language="JavaScript" type="text/javascript">
        <!--
        window.onload = function() {
            function ScanCookie(variable) {
                cook = document.cookie;
                variable += "=";
                place = cook.indexOf(variable, 0);
                if (place <= -1)
                    return ("0" );
                else {
                    end = cook.indexOf(";", place)
                    if (end <= -1) return (unescape(cook.substring(place + variable.length, cook.length)));
                    else return (unescape(cook.substring(place + variable.length, end)));
                }
            }

            function CreationCookie(nom, valeur, permanent) {
                if (permanent) {
                    dateExp = new Date(2020, 11, 11);
                    dateExp = dateExp.toGMTString();
                    ifpermanent = '; expires=' + dateExp + ';';
                }
                else
                    ifpermanent = '';
                document.cookie = nom + '=' + escape(valeur) + ifpermanent;
            }
            console.log('prem' + ScanCookie("dejapopup"));
            if (ScanCookie("dejapopup") == 'oui') {
                console.log('deux' + ScanCookie("dejapopup"));
                $('.popup-body').fadeOut('hide');
                document.getElementById("footer").style.display = "block";

            }
            else
            {
                document.getElementById("popup-container").style.display = "block";
                document.getElementById("footer").style.display = "none";

                $('#oui').click(function () {
                    CreationCookie("dejapopup", "oui", false)
                    $('.popup-body').hide();
                    document.getElementById("footer").style.display = "block";
                });
                $('#non').click(function () {
                    window.location.replace('http://www.google.fr');
                });
                $('#jeune').click(function () {
                    window.location.replace('http://www.google.fr');
                });
            }
        }
        //-->
    </script>
@stop