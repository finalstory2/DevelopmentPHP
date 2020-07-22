<?php



if( isset($_POST['submit']) ){
    //echo 'Se han enviado los datos correctamente';
    //print_r($_POST['submit']);
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $mail = $_POST['Mail'];

    if ( !empty($name) ){
        // $name = trim($name);
        // $name = htmlspecialchars($name);
        // $name = stripslashes($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    }else {
        
    }

    if ( !empty($surname) ){
        $name = trim($surname);
        $surname = htmlspecialchars($surname);
        $surname = stripslashes($surname);
    }else {
       
    }

    if ( !empty($mail) ){
        $mail = trim($mail);
        $name = htmlspecialchars($mail);
        $mail = stripslashes($mail);
    }else {
        
    }

}




// if ($_POST){
//     echo $_POST['Name'];
// }
//  if($_SERVER['REQUST_METHOD']  == 'POST') {
//      //... Code
//  }else{
//  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form validation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 m-3">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ?>" id=""> 
                        <input type="text" placeholder="Name:" name="Name" id="" class="form-control mt-3">
                        <input type="text" placeholder="Surname:" name="Surname" id="" class="form-control mt-3">
                        <input type="mail" placeholder="Mail:" name="Mail" id="" class="form-control mt-3">
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary mt-3"></input>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
