
     /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    // =============================================================================================================
    // tooltipe register inputs
    
    $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    // ================================================================================================================
        // Enable pusher logging - don't include this in production
    //  import Echo from 'laravel-echo';

    //     window.Pusher = require('pusher-js');
    //     Pusher.logToConsole = true;

    //     window.Echo = new Echo({
    //         broadcaster: 'pusher',
    //         key: '51c0f0aca1adfe48229c',
    //         cluster: "us2",
    //         encrypted: true
    //     });
    
    // echo.channel('articles')
    // .listen('MyEvent',function(e){
    //     console.log(e);

    // });

    // var pusher = new Pusher('51c0f0aca1adfe48229c', {
    //   cluster: 'us2',
    //   forceTLS: true,
    // });

    // var channel = pusher.subscribe('my-channel');
    // channel.bind('my-event', function(data) {
    //   alert(JSON.stringify(data));
    // });
   