$(function() {

    $("#cancel-comment-reply-link").hide();
	$(".balas").on('click', function(event) {
        event.preventDefault();
        var id = $(this).attr("id");
        var cl = $("#comment_form").clone('comment_form');
		if ($("#li_comment_" + id).find('ul').length > 0) {
            $("#li_comment_" + id + " ul:first").prepend($("#comment_form"));
        } else {
            $("#li_comment_" + id).append($("#comment_form"));
        }
        $("#id_main").attr("value", id);
        $("#cancel-comment-reply-link").show();
    });


    $("#cancel-comment-reply-link").bind("click", function (event) {
        event.preventDefault();
        $("#id_main").attr("value", "");
        $("#comment_form_wrapper").append($("#comment_form"));
        $(this).hide();
    });

    function resetForm(){
        $("#comment_form")[0].reset();
    }

    $(document).ajaxSend(function() {
        $("#overlay").fadeIn(300);　
      });

    $("#comment_form").bind("submit", function(event) {
        event.preventDefault();

        if ($("#message").val() == "") {
            alert("Please enter your comment");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "http://belajar.local/komen",
            data: $('#comment_form').serialize(),
            dataType: "html",
            success: function (comment) {
                var reply_id = $("#id_main").val();
                if (reply_id == "") {
                    $("#komentar ul:first").prepend(comment);
                }
                else {
                    if ($("#li_comment_" + reply_id).find('ul').length > 0) {
                        $("#li_comment_" + reply_id + "ul:first").prepend(comment);
                    }
                    else {
                        $("#li_comment_" + reply_id).append('<ul class="row-cols" style="list-style: none">' + comment + '</ul');
                    }
                }
                resetForm();
                $("#comment_form_wrapper").append($("#comment_form"));
            }
        }).done(function() {
            setTimeout(function(){
              $("#overlay").fadeOut(300);
            },500);
          });

          
    })
});

