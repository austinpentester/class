
<?php
include "../function.php"

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="table.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
        <a class="navbar-brand" href="#">Laksha Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto mr-md-3">
        <li class="nav-item active"><a href="../index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>

        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </ul>
        </div>
        </div>
        </nav>
        
        </div>



        <div class="container">
            <h2>User</h2>
            <p class="justify-contend">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Rem aspernatur ea magni? Provident ratione facilis placeat? Beatae eaque ab maxime.</p>
            <ul class="responsive-table">
              <li class="table-header">
                <div class="">User Name</div>
                <div class="">Acc Number</div>
                <div class="">Email</div>
                <div class="col col-1">Current Balance</div>
                <div class="">Gender</div>
                <div class="">IFSC Code</div>
                <div class="">Option</div>
              </li>

              <?php


$user = show_all_user();
foreach ($user as $users) {



?>
              <li class="table-row">
                <div><?php echo $users['user_name'] ?></div>
                <div><?php echo $users['account_number'] ?></div>
                <div class="col col-1"><?php echo $users['email'] ?></div>
                <div class="">$<?php echo $users['current_balance'] ?></div>
                <div><?php echo $users['gender'] ?></div>
                <div><?php echo $users['ifsc_code'] ?></div>
                <div class="btn btn-danger">Open</div>
              </li>
<?php
}
?>
            </ul>
          </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>