$(document).ready(function() {

    $.post("./select.php",
        {
            type: 0
        }, function (result) {
            if (result.type == 'error') {
                alert('ошибка загрузки  !!!');
                return (false);
            } else {
                var options = '';
                $(result.obl).each(function () {
                    options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('name_rus') + '</option>';
                });
                $('#obl').html('<option value="0">- область -</option>' + options);
                $('#obl').attr('disabled', false);
            }
        }, "json");



    $('#obl').change(function(){
        var obl = $('#obl').val();
        $('#uchZav').html('<option value="0">- учебное заведение - </option>');
        $('#uchZav').attr('disabled', true);
        if(obl < 1){
            $('#raion').html('<option value="0">- район - </option>');
            $('#raion').attr('disabled', true);
            return(false);
        }
        $.post("./select.php",
            {
                id_obl: obl,
                type: 1
            },function(result){
                if(result.type=='error'){
                    alert('ошибка загрузки  !!!');
                    return(false);
                }else{
                    var options = '';
                    $(result.raion).each(function() {
                        options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('name_rus') + '</option>';
                    });
                    $('#raion').html('<option value="0">- район -</option>'+options);
                    $('#raion').attr('disabled', false);
                }
            }, "json");
    });

    $('#raion').change(function(){
        var obl = $('#obl').val();
        var raion = $('#raion').val();
        if(obl < 1 && raion < 1){
            $('#uchZav').html('<option value="0">- учебное заведение - </option>');
            $('#uchZav').attr('disabled', true);
            return(false);
        }
        $.post("./select.php",
            {
                id_obl: obl,
                id_raion: raion,
                type: 2
            },function(result){
                if(result.type=='error'){
                    alert('ошибка загрузки  !!!');
                    return(false);
                }else{
                    var options = '';
                    $(result.uchZav).each(function() {
                        options += '<option value="' + $(this).attr('id') + '">' + $(this).attr('name_rus') + '</option>';
                    });
                    $('#uchZav').html('<option value="0">- учебное заведение -</option>' + options );
                    $('#uchZav').attr('disabled', false);
                }
            }, "json");
    });

    $('#login').click(function(){
       var obl = $('#obl').val();
       var raion = $('#raion').val();
       var uchzav = $('#uchZav').val();
       var password = $('#password').val().replace(/\s/g,"");
        if(obl < 1 || raion < 1 || uchzav < 1){
            $('#error').html('не указано учебное заведение');
            $("#error").show( "slow" );
            return false;
        }
        if(password == ""){
            $('#error').html('не указан пароль');
            $("#error").show( "slow" );
            return false;
        }
        $.post("./app.php",
            {
                id_obl: obl,
                id_raion: raion,
                id_uchzav: uchzav,
                password: password,
                type: 'login'
            },function(result){
                console.log(result);
            }, "json");
    });


});