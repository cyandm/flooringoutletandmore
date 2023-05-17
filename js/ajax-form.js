//@need custom validating

jQuery(document).ready(($) => {
  $('#homeForm').submit((e) => {
    e.preventDefault();

    const submitBtn = $('#homeForm button');
    const phoneNumber = $('#homeForm input[type="tel"]').val();
    const email = $('#homeForm input[type="email"]').val();
    const sub = $('#homeForm input[type="checkbox"]').is(':checked');
    const desc = $('#homeForm textarea').val();

    submitBtn.text('Sending');
    submitBtn.addClass('pending');
    //@need date
    $.ajax({
      url: cynAjax.url,
      type: 'post',
      data: {
        action: 'send_form',
        _nonce: cynAjax.nonce,
        data: {
          phoneNumber: phoneNumber,
          email: email,
          sub: sub,
          desc: desc,
        },
      },
      success: (res) => {
        submitBtn.removeClass('pending');
        submitBtn.addClass('success');
        submitBtn.text("Thank You , We'll Call You Soon");

        setTimeout(() => {
          submitBtn.removeClass('success');
          submitBtn.text('Send');
        }, 2500);
      },
      error: (err) => {
        console.log('err: ', err.response);
        submitBtn.removeClass('pending');
        submitBtn.addClass('error');
      },
    });
  });
});
