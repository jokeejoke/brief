$(function () {

  let $textarea = $('textarea');
  setInterval(function () {
    $textarea.get(0).style.setProperty("--line-height", $textarea.height() + 'px');
  }, 100);

})