jQuery('document').ready(function () {
    jQuery('form.callback').on('submit',function (event) {
        event.preventDefault();
        var n = jQuery(this).serialize();
        console.log(n);

        jQuery.ajax({
            type: "POST",
            url: "callback/send.php",
            data: {data:n},
            success: function(html) {
                window.location.href = "/";
                $('#result').html(msg);
            }
        });
    });
});