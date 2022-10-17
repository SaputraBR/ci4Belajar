$(function () {
    $("#cancel-comment-reply-link").hide();
	$(".balas").on('click', function(event) {
        event.preventDefault();
        var id = $(this).attr("id");
		if ($("#li_comment_" + id).find('ul').length > 0) {
            $("#li_comment_" + id + " ul:first").prepend($("#comment_form_wrapper"));
        } else {
            $("#li_comment_" + id).append($("#comment_form_wrapper"));
        }
        $("#id_main").attr("value", id);
        $("#cancel-comment-reply-link").show();
    });

    $("#cancel-comment-reply-link").bind("click", function (event) {
        event.preventDefault();
        $("#id_main").attr("value", "");
        $("#comment_wrapper").prepend($("#comment_form_wrapper"));
        $(this).hide();
    });

    $("#comment_form").bind("submit", function (event) {
        event.preventDefault();
        if ($("#message").val() == "") {
            alert("Please enter your comment");
            return false;
        }
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/Home/comment_add",
            data: $('#comment_form').serialize(),
            dataType: "html",
            success: function (comment) {
                var reply_id = $("#id_main").val();
                if (reply_id == "") {
                    $("#comment_wrapper ul:first").prepend(comment);
                    if (comment.toLowerCase().indexOf("error") >= 0) {
                        $("#comment_resp_err").attr("value", comment);
                    }
                }
                else {
                    if ($("#li_comment_" + reply_id).find('ul').length > 0) {
                        $("#li_comment_" + reply_id + " ul:first").prepend(comment);
                    }
                    else {
                        $("#li_comment_" + reply_id).append('<ul class="row-cols" style="list-style-type: none">' + comment + '</ul>');
                    }
                }
                $("#message").attr("value", "");
                $("#Id_main").attr("value", "");
                $("#cancel-comment-reply-link").hide();
                $("#comment_wrapper").prepend($("#comment_form_wrapper"));
                $('#comment_wrapper').unblock();
            }
        });
    });
});