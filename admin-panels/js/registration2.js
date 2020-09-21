$('.pop-up').addClass('open');

$('.pop-up .close').click(function () {
  $('.pop-up').removeClass('open');
});

$(function () {
  $('#reg-number-1').keypress(function () {
    var self = $(this);
    //wait until character is inserted
    setTimeout(function () {
      if (self.val().length > 3) {
        $('#reg-number-2').focus();
      }
    }, 1);
  });
});

$(function () {
  $('#reg-number-2').keypress(function () {
    var self = $(this);
    //wait until character is inserted
    setTimeout(function () {
      if (self.val().length > 3) {
        $('#reg-number-3').focus();
      }
    }, 1);
  });
});

$(function () {
  $('#reg-number-3').keypress(function () {
    var self = $(this);
    //wait until character is inserted
    setTimeout(function () {
      if (self.val().length > 3) {
        $('#reg-number-4').focus();
      }
    }, 1);
  });
});

$(function () {
  $('#reg-number-4').keypress(function () {
    var self = $(this);
    //wait until character is inserted
    setTimeout(function () {
      if (self.val().length > 3) {
        $('#btn-submit').focus();
      }
    }, 1);
  });
});
