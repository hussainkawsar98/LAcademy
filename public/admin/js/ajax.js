$(document).on("click", "a.delete", function (e) {
    var form = $(this);
    var url = $(form).attr("href");
    e.preventDefault();
    $(".delete_message").fadeToggle();
    $("#deletelink").val(url);
});

$(document).on("click", "#delete-confirm", function () {
    
    var url = $("#deletelink").val();
    $.ajax({
        type: "DELETE",
        url: url,
        data: {},
        success: function (res) {
            if (res.status == true) {
                $(".delete_message").fadeToggle();
                toastr.success(res.msg);
                if (res.url) {
                    document.location.href = res.url;
                } else {
                    window.location.reload();
                }
            } else if (res.status == false) {
                $(".delete_message").fadeToggle();
                toastr.error(res.msg);
            }
        },
        error: function (response) {
            $(".delete_message").fadeToggle();
            console.log(response);
        },
    });
});

$(document).on("click", "#cancel-delete", function () {
    $(".delete_message").fadeToggle();
});
