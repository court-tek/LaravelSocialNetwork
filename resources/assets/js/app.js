$(document).ready(function() {

  $('#modalclick').on('click', function() {
    $('#simpleModal').show();
  });

  $('#cancelBtn').on('click', function() {
    $('#simpleModal').hide();
  });

  $('.fa-plus').on('click', function() {
    $('#postModal').show();
  });

  $('._login').on('click', function() {
    $('#welcome2').show();
  });

  $('._signup').on('click', function() {
    $('#welcome2').hide();
  });

  var postId = 0;
  $('#comment_form').on('submit', function(event) {
    event.preventDefault();
    var text = $('#add_comment').val();
    var posstId = $('.cardee').data('postid');
    $.post(url, { comment: text, postId: posstId, _token: token }, function(data){
      // console.log(data);.
    },"json").done(function(msg) {
      console.log(msg['message']);
    });
  });
});
