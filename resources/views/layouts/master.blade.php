<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title ng-bind="title">Creole | Daily Report</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <base href="<?= url('/') . '/' ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         {{ HTML::style('resources/assets/css/bootstrap.min.css',array('rel'=>'stylesheet')) }}
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
          {{ HTML::style('resources/assets/css/bootstrap-datetimepicker.css',array('rel'=>'stylesheet')) }}    
         {{ HTML::script('resources/assets/js/jquery.min.js') }}
        
         
        <!-- Styles -->
        <style>
            html, body {
             
                font-family: 'Raleway', sans-serif;
               /* font-weight: 200;*/
                height: 100vh;
                margin: 0;
                font-size: 19px;
            }
            .navbar .navbar-default {
                 font-weight: 600 !important;
            }

            nav navbar-nav li a{
                 font-weight: 600 !important;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .center_div{
                margin: 0 auto;
                width:80% /* value of your choice which suits your alignment */
                position: absolute;
                left: 0;
                  right: 0;
                  margin: auto;  
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><b>Creole Studios Reporting</b></a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="">Home</a></li>
              <li><a href="{{url('/create')}}">Create</a></li>
              <li><a href="{{url('/sendreport')}}">Send Report</a></li>
             <!--  <li><a href="#">Page 3</a></li> -->
            </ul>
          </div>
        </nav>
        @yield('content')
    </body>
        <script>var BASEURL = "<?= url('/') . '/' ?>"</script>
         {{ HTML::script('resources/assets/js/bootstrap.min.js') }}
       {{ HTML::script('resources/assets/js/datatables/datatables.min.js') }} 
       {{ HTML::script('resources/assets/js/datatables/plugins/bootstrap/datatables.bootstrap.js') }} 
       {{ HTML::script('resources/assets/js/moment-with-locales.js') }} 
       {{ HTML::script('resources/assets/js/bootstrap-datetimepicker.js') }} 

      <script type="text/javascript">
          
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
      </script>
    
</html>