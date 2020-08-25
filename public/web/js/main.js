// ------------step-wizard-------------
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});

$(function() {

    $('.cart-icon[data-toggle="modal"]').hover(function() {
      var modalId = $(this).data('target');
      $(modalId).modal('show');
  
    });
  
  });
  $("#alert").hide();

  $(".open-alert").on("click", function(event){
    event.preventDefault();
    event.stopPropagation();
    $("#alert").show("closed");
  });
  
  $("button").on("click", function(){
    $("#alert").fadeOut();
  });
  
  $(".alert-container").on("click", function(){
    $("#alert").fadeOut();
  });