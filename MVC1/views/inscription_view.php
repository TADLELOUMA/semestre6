
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <head>
        <title>StopGaspillage</title>
        </head>
        <body>

        <div class = "row"> 
        <div class = "col-md-4">  </div>
        <div class = "col-md-4"> 

        <h1> INSCRIPTION </h1>
        <div class="form-group">
                
            <form  method="POST" class="form-signin" action="../controllers/inscription_controller.php">
                

            <div class="form-group">
                <label for="login">username</label>
                <input type="text" class="form-control" name ="username" id="login" placeholder="username" required>

                <label for="email">Email</label>
                <input type="email" id="inputEmail" class="form-control" name ="email" placeholder="Email address" required autofocus>


                <label for="Password">Password</label>
                <input type="password" id="inputPassword" name ="password" class="form-control" placeholder="Password" required>


                <label for="Confirmed_Password">Confirmed_Password</label>
                <input type="password" id="inputPassword" class="form-control" name ="confirmedpassword" placeholder="Password" required>

                <input  type="submit" class="btn btn-primary" name ="submit"  value="Inscription">
                <a  class="btn btn-success" href="connexion_view.php" style="float:right;">Se Connecte</a>
                <input  type = "hidden"  name = "attr"   value ="val" />
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
            
            </div>
            </form>
        </div>

        <div class = "col-md-4">  </div>
        </div>
        
    </body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>