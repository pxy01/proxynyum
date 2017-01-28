@extends('layout.layout')

@section('title')
    Proxynium | Accueil
@stop

@section('content')


    <div class="container-fluid page-background">

        <!-- menu -->

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
        <!--<div class="row">


        </div>-->

        <!-- fin 1er block -->
    </div>
    <br><br>
@stop