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

                                {{--<form action="" class="formulaire">--}}
                                    {{ Form::open(array('route' => 'non.votant.send','class' => 'formulaire')) }}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 text-right champ-label">
                                                ADRESSE MAIL:
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::text('q', '', ['placeholder' =>  '@', 'class' => 'form-control champ-formulaire','name' => 'email'])}}
                                                @if ($errors->has('email'))
                                                    <span>
                                                        <ul class="basic_error"><li>{{ $errors->first('email') }}</li></ul>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-5 text-right champ-label">
                                                COMMUNE ELECTORALE <sup>*</sup>
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Saisissez votre commune electorale', 'class' => 'form-control champ-formulaire','name' => 'commune'])}}
                                                @if ($errors->has('commune'))
                                                    <span>
                                                        <ul class="basic_error"><li>{{ $errors->first('commune') }}</li></ul>
                                                    </span>
                                                @endif
                                                {{--<input type="text" id="tags" class="form-control champ-formulaire" placeholder="Saisissez votre commune electorale">--}}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-sm-6 text-left button-mobile-position">
                                            {{ Form::submit('OK', array('class' => 'button-style')) }}
                                            {{--<button class="button-style">--}}
                                                {{--OK--}}
                                            {{--</button>--}}
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                {{--</form>--}}
                            </div>

                            <div class="notice">
                             <sup>*</sup>Si vous avez un doute, contactez votre mairie pour connaître votre commune électorale
                                <br><br>
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