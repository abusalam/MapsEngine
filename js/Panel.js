/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
  $('#ctrlPanel').click(function() {
    $('#Panel').toggleClass("expandPanel");
    $(this).toggleClass("close ui-corner-all");
    if ($(this).hasClass("ui-icon-arrow-1-w")) {
      $(this).removeClass("ui-icon-arrow-1-w");
      $(this).addClass("ui-icon-arrow-1-e ui-corner-tr ui-corner-br");
      $("#PanelContent").hide();
    } else {
      $(this).removeClass("ui-icon-arrow-1-e ui-corner-tr ui-corner-br");
      $(this).addClass("ui-icon-arrow-1-w");
      $("#PanelContent").show();
    }
  });

  $(".Layer").on("mousedown", function(e) {
    if ($(this).hasClass("Layer")) {
      $(".activeLayer").addClass("Layer");
      $(".activeLayer").removeClass("activeLayer", 200);
      $(this).addClass("activeLayer");
      $(this).removeClass("Layer");
    }
  });

});
