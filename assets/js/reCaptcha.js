grecaptcha.ready(function() {
    grecaptcha.execute('6LeY-8cpAAAAAKz8HWMXDMOjGFjoQeKEGpiN5d4B', {action: 'homepage'}).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
    });
});