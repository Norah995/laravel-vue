<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div id="main">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Lista</h1>
                    <ul class="list-group">
                        <li v-for="item in lists" class="list-group-item">
                            @{{ item.name }}
                            @{{ item.id }}
                        </li>
                    </ul>
                </div> 
            <div class="col-sm-8">
                <h1>Json</h1>
                <pre>@{{ $data | json}}</pre>
            </div>
        </div>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>

    <script src="{{ asset('js/apppru.js') }}"></script>
       
    </body>
</html>
