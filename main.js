$(document).ready(function () {
    $('.tab-link').click(function () {
      $('.tab-link').removeClass('active');
      $(this).addClass('active');
      $('.tab-content').hide();
      $('#' + $(this).data('tab')).show();
    });
    $('.active').click();
  });