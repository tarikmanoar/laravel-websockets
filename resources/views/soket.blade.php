<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOCKET</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <style>
            {
                 ! ! Vite: :content('resources/css/app.css') ! !
            }
        </style>
        <script>
            {!! Vite::content('resources/js/app.js') !!}
        </script> --}}
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>SOCKET {{$id}}</h1>
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Well done! </h4>
                                        <p>Aww yeah, you successfully read this important alert message. This example
                                            text
                                            is going to run a bit longer so that you can see how spacing within an alert
                                            works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                            things nice and tidy.</p>
                                    </div>
                                    <ul id="soket">
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group py-3">
                                        <label for="message">ID</label>
                                        <select name="id" id="id" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="form-group py-3">
                                        <label for="message">Message</label>
                                        <input type="search" class="form-control" id="message">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" id="send">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const audio = new Audio('{{asset('chat.mp3')}}');
            $(function(){
            $('#send').click(function(){
                $.ajax({
                    url: '/send',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: $("#id").val(),
                        message: $("#message").val()
                    },
                    success: function(response){
                        console.log(response);
                    }
                });
            });
            Echo.channel(`{{$id}}-general`)
                .listen('TestEvent', (e) => {
                    console.log(e.message);
                    audio.play();
                    $('#soket').append('<li>'+e.message+'</li>');
                });
        });
        </script>
    </body>

</html>
