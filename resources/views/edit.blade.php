<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
           
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <style>
            html, body {
                background-color:#037bfc;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }


            .title {
               margin-top:10rem;
               font-size:60px;
               text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .list-group li{
                color:#000000;
            }
            .icon{
                margin-left:25rem;
                margin-right:10px;
            }
        </style>
    </head>
    <body>
        <div>
          <h2 class="title bg-dark">Todo App</h2>
           <form action="{{route('todo.update', ['id'=>$todo->id])}}" method="post">
                  {{ csrf_field() }}
               <div class="container row">
                 <div class="offset-md-6 col-md-6">
                 <input type="text" name="name" value="{{$todo->name}}" placeholder="Add Todo">
                 <input type="submit" value="update Todo" class="btn btn-success">
                 </div>
               
               </div>
           </form>
                    
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>