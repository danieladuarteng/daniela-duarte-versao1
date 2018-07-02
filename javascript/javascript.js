//para aparecer botão quando mobile
$(document).ready(function () {
      

    $('#btn-drop').on('click', function (e) {
        e.preventDefault();
        $('#submenu').slideToggle(500);
    }); 
    
  
    $(window).resize(function () {
        if (innerWidth >= 480) {
            if ($('#submenu').css('display') == 'none') {
                $('#submenu').removeAttr('style');
            }
        }
    }); 
});
