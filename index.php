<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Formulari entrada</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        form{
            margin:2%;
        }
        h1{
            text-align: center;
        }
    </style>
  </head>
  <body>
        <h1>AUTENTICACIÓ BÀSICA PHP</h1>
    <form action="insert.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col">
              <label for="nom">Nom d'usuari:</label>
              <input type="text" class="form-control" id="user" name="user" placeholder="Jersei de punt blanc" required>
              <div class="invalid-feedback">
                  Has d'introduïr el nom d'usuari.
              </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
              <label for="desc">Contrasenya: </label>
              <input type="password" name="passwd" id="passwd" placeholder="·······" required>
              <div class="invalid-feedback">
                  Has d'intoduïr la contrasenya.
              </div>
            </div>
        </div>
        <button class="btn btn-dark" type="submit">Autentica</button>
    </form>
          

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>

</html>