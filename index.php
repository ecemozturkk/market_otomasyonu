<?php
require_once 'php_action/db_connect.php';

session_start();

//kullanicinin giris yapip yapmadigini kontrol etme (linke dashboard.php yazarak sayfaya ulasmasini engelleme)
if(isset($_SESSION['userId'])) {
    header('location: http://localhost:8080/market/anasayfa.php');
}


$errors = array();

if($_POST){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        if($username == ""){
            $errors[] = " Kullanici adi gerekli.";
        }
        if($password== ""){
            $errors[] = " Sifre gerekli.";
        }
    }
    else {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $connect->query($sql);

        if($result->num_rows == 1){
            $password = md5($password);
            // exists
            $mainSql = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
            $mainResult = $connect->query($mainSql);

            if($mainResult->num_rows==1){
                $value = $mainResult->fetch_assoc();
                $user_id = $value['user_id'];


                //set session
                $_SESSION['userId'] = $user_id;

                header('location: http://localhost:8080/market/anasayfa.php');

            }
            else{
                $errors[] = "Hatali kullanici adi/parola girisi.";

            }
        }
        else{
            $errors[]="Bu kullanici adi mevcut degil.";
        }
    }
}







?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Otomasyonu</title>
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap theme -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/fontawesome.min.css">
    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="custom/css/custom.css">
    <!-- jquery -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- jqueryui-->
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
    <script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
    <!-- bootstrap js-->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row vertical" >
            <div class="col-md-5 col-md-offset-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" >Lutfen giris yapiniz.</h3>
                    </div>
                    <div class="panel-body">
                        <div class="messages">
                            <?php if($errors) {
                                foreach($errors as $key => $value){
                                    echo '<div class="alert alert-warning" role="alert">
                                    <i class="glyphicon glyphicon-exclamation-sign"></i>'.$value.'
                                    </div>';
                                }
                            }
                            
                            
                            ?>



                        </div>







                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="loginForm">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Kullanici:</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Kullanici adinizi giriniz.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Sifre:</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Sifrenizi giriniz.">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i>  Giris Yap</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- col-md-5 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->




</body>
</html>