$(function () {

  //E-mail Ajax Send
  $("form.brief_form").submit(function () { //Change
    var th = $(this);
    $.ajax({
      type: "POST",
      url: "mail.php", //Change
      data: th.serialize()
    }).done(function () {
      $(".modal_window_wrapper").css("top", "0");
      $(".modal_window").css("visibility", "visible");
      $(".modal_window").css("opacity", "1");
      setTimeout(function () {
        // Done Functions
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });

  $(".modal_window .ok").on("click", function () {
    $(".modal_window").css("opacity", "0");
    $(".modal_window").css("visibility", "hidden");
    $(".modal_window_wrapper").css("top", "-100%");
  });

})