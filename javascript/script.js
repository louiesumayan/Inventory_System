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
