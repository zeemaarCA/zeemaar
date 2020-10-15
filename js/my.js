$(document).ready(function() {

	setTimeout(function(){
		$('body').addClass('loaded');
	}, 1500);

});



function validateContact() {
  var b = true;
  $(".demoInputBox").css("background-color", "");
  $(".info").html("");
  if (!$("#userName").val()) {
    $("#userName-info").html("*Field is required");
    $("#userName").css("border-bottom", "2px solid #e53935");
    b = false
  }
  if (!$("#userEmail").val()) {
    $("#userEmail-info").html("*Field is required");
    $("#userEmail").css("border-bottom", "2px solid #e53935");
    b = false
  }
  if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#userEmail-info").html("*Email is invalid");
    $("#userEmail").css("border-bottom", "2px solid #e53935");
    b = false
  }
  if (!$("#content").val()) {
    $("#content-info").html("*Field is required");
    $("#content").css("border-bottom", "2px solid #e53935");
    b = false
  }
  return b
};
// $("#focus").click(function() {
//   $("#userName").focus()
// });
