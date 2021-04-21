<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="zSltvkU8JxpeOnAfBWBIBNwJoV1tMG8EyiXlXQJC">
    <meta name="description" content="" />

    <title>Home - Chattogram Branch</title>

    <link href="//fonts.googleapis.com/css?family=Arimo:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/lightbox.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/media.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">
   
    @yield('content')

    
<script src="{{ asset('frontend/js/jquery-1.12.4.min.js ') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js ') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js ') }}"></script>
<script src="{{ asset('frontend/js/lightbox.min.js ') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js ') }}"></script>
<script src="{{ asset('frontend/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script>
    $(document).on('ready', function() {

        $('#myModal').modal('toggle');

        //seminar form
        $(".btn_submit").click(function(e) {

            $('.name_err').text('');
            $('.email_err').text('');
            $('.number_err').text('');
            $('.seminar_cat_err').text('');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var number = $("input[name='number']").val();
            var seminar_cat = $("#seminar_cat").val();
            var address = $("textarea[name='address']").val();

            $.ajax({
                url: "https://ctg.creativeitinstitute.com/seminarleed",
                type: "POST",
                data: {
                    _token: _token,
                    name: name,
                    email: email,
                    number: number,
                    seminar_cat: seminar_cat,
                    address: address
                },
                datatype: 'json',
                success: function(data) {
                    document.getElementById('seminar_leed').reset();
                    $('#joinSeminars').modal('hide');
                    $('#success_modal').modal('show');
                    setTimeout(function() {
                        $('#success_modal').modal('hide');
                    }, 2500)
                },
                error: function(response) {
                    $('.name_err').text(response.responseJSON.errors.name);
                    $('.email_err').text(response.responseJSON.errors.email);
                    $('.number_err').text(response.responseJSON.errors.number);
                    $('.seminar_cat_err').text(response.responseJSON.errors
                        .seminar_cat);

                },

            });


        });


    });

</script>
</body>

</html>
