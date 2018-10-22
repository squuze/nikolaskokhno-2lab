var send_login = 'no';
var send_passworn = 'no';


$("#btn-auth").click(function () {
  var auth-login = $("#auth-login").val();
  var auth-password = $("#auth-password").val();

  if (auth-login == "" || auth-login >30) {
    $("#auth-login").css("borderColor","#FDB6B6");
    send_login = 'no';
  }else {
    $("#auth-login").css("borderColor", "#DBDBDB");
    send_login = 'yes';
  }

  if (auth-password == "" || auth-login > 20) {
    $("#auth-password").css("borderColor","#FDB6B6");
    send_login = 'no';
  }else {
    $("#auth-password").css("borderColor", "#DBDBDB");
    send_login = 'yes';
  }

})
