window.formSubmitter = function(formId, captchaWidget) {
  var form = document.getElementById(formId);

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    // grecaptcah execute or check captcha
    if (isRecapchaValid(window.captchaWidget)) {
      form.submit();
    } else {
      form.querySelectorAll('.js-catcha-error')[0].classList.add('has-error');
    }

  });
}

window.check = function () {
  
}

window.proposeCollectionCb = function(token) {
  if (isRecapchaValid(window.proposeCollection)) {
    document.getElementById("form-propose-collection").submit();
  }
}

function isRecapchaValid(captchaWidget) {
  var res = grecaptcha.getResponse(captchaWidget);
  
  if (res == "" || res == undefined || res.length == 0) {
    return false;
  }
  return true;
}