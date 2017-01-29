@extends('layout.layout')

@section('title')
    Je m'abstien par conviction
@endsection


@section('content')

    <div class="container-fluid page6-background">
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
                                <a href="">Je m'abstien par conviction</a>
                            </div>
                            <div class="option-three">
                                <span class="coluche">Coluche :</span><br>

                                <sup>"</sup> Si voter changeait quelque chose, il y a longtemps que sa serait interdit. <sup>"</sup>
                                <br><br>

                                <span class="coluche">Vraiment ?</span><br><br>

                                Si vous aimeriez que votre vote change les choses, rendez-vous sur le site <a target="_blank" href="">www.neo-garde.com</a><br>
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