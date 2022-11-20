<?php



include'function.php';
if(isset($_POST['submit'])){
  $sender_accound=$_POST['fname'];
  $receiver_Account_Number=$_POST['email'];
  $Amount=$_POST['ans'];
  money_update($sender_accound,$receiver_Account_Number,$Amount);
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>

<body>






  <div class="container">
    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Laksha Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto mr-md-3">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="Table/table.php" class="nav-link">User</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact-us</a></li>
          </ul>
        </div>
      </div>
    </nav>

  </div>
















  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
        <h3>Online Bank</h3>

        <div class="card">
          <h5 class="text-center mb-4">Money Transfer</h5>
          <form class="form-card" action="index.php" method="POST">
            <div class="row justify-content-between text-left">
              <div class="form-group  flex-column d-flex"> <label class="form-control-label px-3">Sender Account
                  Number<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your acc number" onblur="validate(1)"> </div>
            </div>
            <div class="row justify-content-between text-left">
              <div class="form-group  flex-column d-flex"> <label class="form-control-label px-3">Receiver
                  Account Number<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="Enter Receiver acc number"> </div>

            </div>
            <div class="row justify-content-between text-left">
              <div class="form-group flex-column d-flex"> <label class="form-control-label px-3">Receiver Name<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="Enter Receiver name"> </div>
            </div>
            <div class="row justify-content-between text-left">
              <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Amount<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="Enter the amount"> </div>
            </div>
            <div class="row justify-content-center">
              <div class="form-group col-sm-6"> <button type="submit" name="submit" class="btn btn-primary">Send</button> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>