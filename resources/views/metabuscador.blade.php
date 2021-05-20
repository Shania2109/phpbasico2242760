<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form
        method="POST"
        action="{{ url( "buscar" )}}"
        class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Busqueda en varios motores</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="1.Ingrese el termino de busqueda">1.Ingrese el termino de busqueda</label>
          <div class="col-md-4">
          <input id="1.Ingrese el termino de busqueda" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>



        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2.Seleccione motor de busqueda </label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>

           <div class="radio">
            <label for="motores-2">
              <input type="radio" name="motores" id="motores-2" value="3">
              Youtube
            </label>
            </div>

           <div class="radio">
            <label for="motores-3">
              <input type="radio" name="motores" id="motores-3" value="4">
              Facebook
            </label>
            </div>

            <div class="radio">
              <label for="motores-4">
               <input type="radio" name="motores" id="motores-4" value="5">
               Yahoo
            </label>
            </div>

            <div class="radio">
                <label for="motores-5">
                 <input type="radio" name="motores" id="motores-5" value="6">
                 Baidu
              </label>
              </div>

              <div class="radio">
                <label for="motores-6">
                 <input type="radio" name="motores" id="motores-6" value="7">
                 Yandex
              </label>
              </div>

              <div class="radio">
                <label for="motores-7">
                 <input type="radio" name="motores" id="motores-7" value="8">
                 Duckduckgo
              </label>
              </div>

              <div class="radio">
                <label for="motores-8">
                 <input type="radio" name="motores" id="motores-8" value="9">
                 Qwant
              </label>
              </div>

              <div class="radio">
                <label for="motores-9">
                 <input type="radio" name="motores" id="motores-9" value="10">
                 Pinterest
              </label>
              </div>

          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
              <button id="" name="" class="btn btn-danger">Buscar</button>
            </div>
          </div>

        </fieldset>
        </form>


</body>
</html>
