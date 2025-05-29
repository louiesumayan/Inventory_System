$(document).ready(function () {
  $('#togglePassword').on('click', function () {
    const passwordInput = $('#password');
    const type =
      passwordInput.attr('type') === 'password' ? 'text' : 'password';
    passwordInput.attr('type', type);

    // Swap the eye icon
    const eyeOpen = 'images/Icons/Eye_open.png';
    const eyeClose = 'images/Icons/Eye_close.png';
    $(this).attr('src', type === 'password' ? eyeClose : eyeOpen);
  });
});

$(document).ready(function () {
  // Animate h1 sliding in from left
  $('.content-container h1').animate(
    { left: '0', opacity: 1 },
    600, // duration 1 second
    'swing'
  );

  // Animate p sliding in from right
  $('.content-container p').animate({ right: '0', opacity: 1 }, 900, 'swing');
});

$(document).ready(function () {
  $('.login-container').animate(
    { top: '0', opacity: 1 },
    1000, // 1 second duration
    'swing'
  );
});
