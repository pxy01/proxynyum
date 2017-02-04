<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/mobile_first.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">-->
@yield('custom_css')

<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>



<!-- content -->

@yield('content')

<!-- /content -->

<!-- footer -->
<div class="container-fluid footer" id="footer">
    <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-4 text-center mobile-padding-footer">

                    <span class="footer-title">
                        proxynium
                    </span>
                    <br><br>
                    <a class="footer-link" href="">Page d'accueil</a>

                    <a class="footer-link" href="">Vous</a>

                    <a class="footer-link" href="">Notre Mission</a>

                    <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>

                </div>
                <div class="col-sm-4 text-center mobile-padding-footer">

                    <span class="footer-title">
                        à propos
                    </span>
                    <br><br>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto atque commodi consectetur deleniti dicta ducimus.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur error exercitationem explicabo impedit ipsa laboriosam officiis quaerat recusandae, sint. Aperiam earum ex facilis iste officia, possimus quo rerum vero?

                    </p>

                </div>
                <div class="col-sm-4 text-center mobile-padding-footer">

                    <span class="footer-title">
                        contact
                    </span>
                    <br><br>

                    TEL : 01 12 34 56 78 <br>
                    Adresse:
                    <br><br>
                    Mail : proxynium@gmail.com

                </div>
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-12 text-center">
            <br><br>
            Crédit et mentions légale
        </div>
    </div>
</div>
<!-- /footer -->


<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ URL::asset('js/jquery.syotimer.js') }}"></script>
<script type="text/javascript" id="cookiebanner" src="http://cookiebanner.eu/js/cookiebanner.min.js" data-position="bottom" data-fg="#ffffff" data-bg="#424242" data-link="#dddddd" data-moreinfo="http://www.cnil.fr/vos-obligations/sites-web-cookies-et-autres-traceurs/que-dit-la-loi/" data-message="Les cookies assurent le bon fonctionnement de notre site Internet. En utilisant ce dernier, vous acceptez leur utilisation." data-linkmsg="En savoir plus"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script>
    window.onload = function () {
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
        else {
            document.getElementById("popup-container").style.display = 'block';
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
</script>
@yield('js_script')

</body>
</html>