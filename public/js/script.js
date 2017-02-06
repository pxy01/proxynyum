/**
 * Created by root on 24/01/17.
 */

$(document).ready(function() {

    indice = 0;

    $('#nav').click(function () {

        if (indice == 0){

            document.getElementById("sous-menu").style.marginLeft = "0";
            document.getElementById("sous-menu").style.transition = "0.2s";

            indice = 1;
        }else{

            document.getElementById("sous-menu").style.marginLeft = "-100%";
            document.getElementById("sous-menu").style.transition = "0.2s";

            indice = 0;
        }


    });


    //console.log('test test');
    // window.onload = function () {
    //     function ScanCookie(variable) {
    //         cook = document.cookie;
    //         variable += "=";
    //         place = cook.indexOf(variable, 0);
    //         if (place <= -1)
    //             return ("0" );
    //         else {
    //             end = cook.indexOf(";", place)
    //             if (end <= -1) return (unescape(cook.substring(place + variable.length, cook.length)));
    //             else return (unescape(cook.substring(place + variable.length, end)));
    //         }
    //     }
    //
    //     function CreationCookie(nom, valeur, permanent) {
    //         if (permanent) {
    //             dateExp = new Date(2020, 11, 11);
    //             dateExp = dateExp.toGMTString();
    //             ifpermanent = '; expires=' + dateExp + ';';
    //         }
    //         else
    //             ifpermanent = '';
    //         document.cookie = nom + '=' + escape(valeur) + ifpermanent;
    //     }
    //
    //     console.log('prem' + ScanCookie("dejapopup"));
    //     if (ScanCookie("dejapopup") == 'oui') {
    //         console.log('deux' + ScanCookie("dejapopup"));
    //         $('.popup-body').fadeOut('hide');
    //         document.getElementById("footer").style.display = "block";
    //
    //     }
    //     else {
    //         document.getElementById("popup-container").style.display = 'block';
    //         document.getElementById("footer").style.display = "none";
    //
    //         $('#oui').click(function () {
    //             CreationCookie("dejapopup", "oui", false)
    //             $('.popup-body').hide();
    //             document.getElementById("footer").style.display = "block";
    //         });
    //         $('#non').click(function () {
    //             window.location.replace('http://www.google.fr');
    //         });
    //         $('#jeune').click(function () {
    //             window.location.replace('http://www.google.fr');
    //         });
    //     }
    // }



    $(function()
    {
        $( "#q" ).autocomplete({
            source: "search/autocomplete",
            //minLength: 2,
            select: function(event, ui) {
                $('#q').val(ui.item.value);
            }
        });
    });
    //console.log('syo')

    $('#simple_timer').syotimer({
        year: 2017,
        month: 3,
        day: 21,
        hour: 20,
        minute: 30
    });

    $('.jeune-electeur-button').tooltipster({
        theme: 'tooltipster-noir'
    });
});
