<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Sing in</title>
</head>
<body>
    <div id="contend1">
        <div  class="col-6 py-4 vitrina container-fluid card shadow-lg">
            <form action="" method="post">
                {{csrf_field()}}
                <h1 class="text-primary">REGISTRO</h1>

                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="nombre">
                </div>

                <div class="mb-3">
                    <label for="">Correo</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="password">
                </div>

                <div class="mb-4">
                <button class="btn btn-primary sm-3" type="button" > Guardar</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
