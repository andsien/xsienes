/**
 * Created by andsien on 20/03/18.
 */
$(document).ready(function(){
    $("#xemail-btn").click(function(){
        $("#loader-modal").show();
        var xcemail = $("#xcemail").val();
        var xcmessage = $("#xcmessage").val();

        if(xcemail != "" && xcmessage != "") {
            $.ajax({
                url: "php/mail.php",
                method: "POST",
                data: {
                    xcemail: xcemail,
                    xcmessage: xcmessage
                },
                dataType: "html"
            }).done(function (msg) {
                $("#loader-modal").hide();
            }).fail(function (msg) {
                $("#loader-modal").hide();
            });
        }
    });
});
AOS.init();