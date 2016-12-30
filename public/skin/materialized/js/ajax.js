/* 
 @Package   : messanger
 @Created on : Dec 12, 2013, 12:28:13 PM
 @Author     : Merab Chikvaidze
 */
$(document).ready(function () {
    $("#leave_comment").click(function () {
        $.post(URL + 'public/loads/addcomment/loadid/' + $(this).attr("loadid") + '/replay_member_id/0/comment/' + $("#comment_box").val(), function (data) {
            $("#comments_block").html(data);
            $("#comment_box").val('');
        });
    });
    $("#send_apply").click(function () {
        $.post(URL + 'public/loads/sendapply/loadid/' + $(this).attr("loadid"), {bid_content: $("#bid_content").val()}, function (data) {
            Materialize.toast(data, 10000);
            $("#bid_content").val('');
        });
    });
    var checkMessageNotifications = function () {
        $.post(URL + 'public/messanger/getmessages/', function (data) {
            if ($("#right_sidebar_messages").html() != data)
                Materialize.toast('You have new message.', 10000);
            $("#right_sidebar_messages").html(data);
        });
    };
    setInterval(checkMessageNotifications, 15000);
});