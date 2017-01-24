@extends('layout.layout')

@section('title')
    Proxynium | Accueil
@stop

@section('content')


    <div class="container page-background">

        <!-- menu -->

        <div class="row">

            <div id="menu">

                <div class="col-xs-4">
                    <div class="accueil">

                        <a href="">quel électeur suis-je ?</a>

                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="mission">

                        <a href="">notre mission</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- end menu -->

        <!-- 1er block -->

        <div class="row">

            <div class="rubrique-one">
                <div class="block-white">

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
                <div class="block-transparent">

                    <div class="text-one text-center">
                        Le compte à rebours est lancé ! Plus jamais vous ne verrez les élections de la même façon, Ni sondage, Ni débat, Ni tractation
                    </div>

                    <div class="text-two text-center">
                        Service réservé aux 10 000 premiers inscrits
                    </div>

                    <div class="option-block">
                        <div class="option-one">
                            <a href="">Je ne peut pas me deplacer au bureau pour voter</a>
                        </div>
                        <div class="option-one">
                            <a href="">Je vote mais j'hésite</a>
                        </div>
                        <div class="option-one">
                            <a href="">Je n'est pas le temps de m'y intéresser</a>
                        </div>
                        <div class="option-one">
                            <a href="">Je vote blanc</a>
                        </div>
                        <div class="option-one">
                            <a href="">Je m'abstien par conviction</a>
                        </div>
                        <div class="option-one">
                            <a href="">Je suis fidèle aux urne</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- fin 1er block -->
    </div>
    <br><br>
    <!-- footer -->
    <div class="container">
        <!-- footer -->
        <div class="row text-center">
            <div class="footer">
                <div class="row"><br><br>
                    <div class="col-sm-4 text-center">

                        <div class="footer-title">
                            proxynium
                        </div>
                        <br><br>
                        <a class="footer-link" href="">Page d'accueil</a>

                        <a class="footer-link" href="">Vous</a>

                        <a class="footer-link" href="">Notre Mission</a>

                        <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-sm-4 text-justify">

                        <div class="footer-title">
                            à propos
                        </div>
                        <br><br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto atque commodi consectetur deleniti dicta ducimus.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur error exercitationem explicabo impedit ipsa laboriosam officiis quaerat recusandae, sint. Aperiam earum ex facilis iste officia, possimus quo rerum vero?

                        </p>

                    </div>
                    <div class="col-sm-4">

                        <div class="footer-title">
                            contact
                        </div>
                        <br><br>

                        TEL : 01 12 34 56 78 <br>
                        Adresse:
                        <br><br>
                        Mail : proxynium@gmail.com

                    </div>

                    <div class="col-sm-12">
                        <br><br>
                        Crédit et mentions légale
                    </div>
                </div>
                <br><br><br>
            </div>

        </div>
    </div>
    <!-- /footer -->


@stop