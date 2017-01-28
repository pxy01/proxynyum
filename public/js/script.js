/**
 * Created by root on 24/01/17.
 */

var indice = 0;

$('#nav').click(function () {

    if(indice == 0){
        $('#sous-menu').fadeIn('show');
        indice = 1;
    }else{
        $('#sous-menu').fadeOut('hide');
        indice = 0;
    }

});