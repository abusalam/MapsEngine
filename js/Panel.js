/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
  $('#PanelMenu').menu({
    select: function(event, ui) {
      switch (ui.item.attr('id')) {
        case "AddNewLayer":
          alert("Adding New Layer");
          break;
        case "UploadKML":
          alert("Upload New KML Layer");
          break;
      }
      return false;
    }
  }).hide();
  $("#PanelMenuLink").click(function() {
    // Make use of the general purpose show and position operations
    // open and place the menu where we want.
    $('#PanelMenu').show().position({
      my: "left top",
      at: "left bottom",
      of: this
    });
    // Make sure to return false here or the click registration
    // above gets invoked.
    return false;
  });

  // Register a click outside the menu to close it
  $(document).on("click", function() {
    $('#PanelMenu').hide();
  });

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
