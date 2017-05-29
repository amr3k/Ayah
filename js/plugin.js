/* global console,$ */
$('document').ready(function () {
    "use strict";
    function rand() {
        $.ajax({
            method  :   'POST',
            url     :   'app.php',
            data    :   {click:"true"},
            success :   function (result) {
                $('#ayah').html(result);
            }
        }); 
    };
    $('button').on('click',rand);
});