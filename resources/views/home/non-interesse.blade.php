@extends('layout.layout')

@section('title')
    Proxynium
@endsection


@section('content')

    <div class="container-fluid page4-background">
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

                    @include('partials.block_white')
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

                                {{ Form::open(array('route' => 'non.interesse.send','class' => 'formulaire')) }}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 mobile-position text-right" style="padding-top: 7px;">
                                                ADRESSE MAIL:
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::text('q', '', ['placeholder' =>  '@', 'class' => 'form-control champ-formulaire','name' => 'email'])}}
                                                            @if ($errors->has('email'))
                                                                <span>
                                                                    <ul class="basic_error"><li>{{ $errors->first('email') }}</li></ul>
                                                                </span>
                                                            @endif
                                                            {{ Form::button('<i class="fa fa-angle-right" aria-hidden="true"></i>', array('type' => 'submit','class' => 'other-button-style')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                {{ Form::close() }}
                            </div>
                            <div class="notice" style="margin-top: -2em;">
                                @include('partials.flash')
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