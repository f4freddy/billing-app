(function(){
$('.register a').click(function () {alert('here')
    $('.register-form').addClass('hide');
    $('.login-form').addClass('show');
});
$('.login a').click(function () {alert('here1')
    $('.login-form').addClass('hide');
    $('.register-form').addClass('show');
});

 })();

