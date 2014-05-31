/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
  $('#ctrlPanel').click(function() {
    $('#Panel').toggleClass("expandPanel");
    $(this).toggleClass("close ui-corner-all");
    if ($(this).hasClass("ui-icon-minusthick")) {
      $(this).removeClass("ui-icon-minusthick");
      $(this).addClass("ui-icon-plusthick");
      $("#PanelContent").hide();
    } else {
      $(this).removeClass("ui-icon-plusthick");
      $(this).addClass("ui-icon-minusthick");
      $("#PanelContent").show();
    }
  });

  $(".Layer").on("mousedown", function(e) {
    $(".activeLayer").addClass("Layer");
    $(".activeLayer").removeClass("activeLayer");
    $(this).addClass("activeLayer");
    $(this).removeClass("Layer");
  });

});
