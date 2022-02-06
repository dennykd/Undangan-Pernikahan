<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
  </head>
  <body class="first">
    <div class="card mx-auto border-2 bg-dark text-white border-warning" style="width: 30rem; height: 30rem;">
        <div class="card-body text-center">
            <h5 class="card-title">SELAMAT DATANG DI UNDANGAN DIGITAL</h5>
            <p class="card-text">Silahkan isi nama anda terlebih dahulu.</p>
            <form action="" method="post">
                <input type="text" name="nama" autocomplete="off" autocapitalize="characters">
                <input type="submit" class="btn btn-outline-light mt-3" name="tambah" value="masuk">
            </form>
            <?php
              if(isset($_POST["tambah"])){
                $nama = $_POST["nama"];

                $_SESSION["nama"] = $nama;
                $_SESSION["masuk"] = true;
                header("location:home.php");
              }

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
