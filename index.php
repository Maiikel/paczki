<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sweetalert2.css">
    <script src="js/sweetalert2.min.js"></script>
</head>

<body>
    <header class="navbar navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">
            AptekaGemini.pl
         </a>
        <form class="form-inline" action="pages/action.php" method="post">
            <input class="form-control mr-sm-2" type="text" placeholder="Podaj Login..." aria-label="login">
            <input class="form-control mr-sm-2" type="password" placeholder="Podaj Hasło..." aria-label="password">
            <button class="btn  my-2 my-sm-0 bg-primary" type="submit">Zaloguj</button>
        </form>
    </header>
	
    <div class="container-fluid">
        
        
        <div class="row">
            
            <div class="col-sm-2 bg-dark px-0 mx-0" >
                <ul class="nav flex-column ">
                    <div id="label" class="px-1">Dodaj / Usuń</div>
                    
                    <li class="nav-item mx-2">
                        <a class="navbar-brand " href="pages/paczki.php">
                            <img src="img/paczki.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Paczki <span class="text-white">+</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/pojemnik.jpg" width="20" height="20" class="d-inline-block align-top" alt="">
                            Foliopaki <span class="text-white">+</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/kartony.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Kartony <span>+</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/paleta1.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Palety <span class="text-danger">DPD</span> <span>+</span>
                        </a>
                    </li>
                     <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/pojemnik.jpg" width="20" height="20" class="d-inline-block align-top" alt="">
                            Kosze <span class="text-danger">DPD</span> <span>+</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/bable.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Bąble <span>+</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/bable.png" width="20" height="20" class="d-inline-block align-top" alt="">
                          Palety <span class="text-danger">KARTONY</span> <span>+</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/zamowienia.png" width="20" height="20" class="d-inline-block align-top" alt="">
                          Zamówienia <span>+</span>
                        </a>
                    </li>
                    
                    <div id="label" class="px-1">Stan</div>
                    
                    <li class="nav-item mx-2">
                        <a class="navbar-brand " href="pages/kurier.php">
                            <img src="img/kurier.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Kurier
                        </a>
                    </li>
                     
                    <li class="nav-item mx-2">
                        <a class="navbar-brand " href="pages/kurier_CMR.php">
                            <img src="img/kurier.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Kurier - CMR
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/kartony.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Kartony
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/paleta1.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Palety
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/bable.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Bąble / Taśmy
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/zamowienia.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Zamówienia
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="navbar-brand " href="#">
                            <img src="img/checklista.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            Check lista
                        </a>
                    </li>
                </ul>
            </div>
            
            
            <div class="col  mx-1 my-1 text-center">
                <h5> Zapasy na dystrybucji </h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kartony</th>
                            <th>Ilość</th>
                            <th>&nbsp;</th>
                            <th scope="col">Palety <span class="text-danger"> DPD</span></th>
                            <th scope="col">Palety <span class="text-danger">DPD</span> Uszkodzone</th>
                            <th scope="col">Palety Kartony</th>
                            <th scope="col">Palety Kartony Uszkodzone</th>
                            <th scope="col">Bąble</th>
                        </tr>
                    </thead>
                    
                    <tbody >
                        <tr > 
                            <th scope="row" class="text-dark">Małe</th>
                            <td>75</td>
                            <td>&nbsp;</td>
                            <td>12</td>
                            <td>3</td>
                            <td>80</td>
                            <td>19</td>
                            <td>2</td>
                        </tr>
                        <tr > 
                            <th scope="row" class="text-dark">Średnie</th>
                            <td >19</td>
                        </tr>
                        <tr > 
                            <th scope="row" class="text-dark">Duże</th>
                            <td>19</td>
                        </tr>
                        <tr > 
                            <th scope="row" class="text-dark">Bardzo Duże</th>
                            <td>19</td>
                        </tr>
                        <tr > 
                            <th scope="row" class="text-dark">Bardzo Duże +</th>
                            <td>19</td>
                        </tr>
                        <tr > 
                            <th scope="row" class="text-dark">Prostokąt</th>
                            <td>19</td>
                        </tr>
                        <tr > 
                            <th scope="row" class="text-dark">Prostokąt +</th>
                            <td>19</td>
                        </tr>
                    </tbody>
                </table>
                
                
            </div>
        </div>
        
        
    </div>
    <div id="footer" class="panel-footer text-center">
        <a class="navbar-brand" href="https://www.aptekagemini.pl">
            <img src="img/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Internetowa Apteka Gemini
         </a>
    </div>
    
    
    <?php
        if ($_GET){
            @$message=$_GET['message'];
            @$message1=$_GET['message1'];
            @$message2=$_GET['message2'];
        }
        if(isset($message)){
            echo("<script type='text/javascript'>");
                echo("Swal(");
                echo("'$message',");
                echo("'Kliknij Ok, aby zamknąć!',");
                echo ("'success'");
                echo (")");
            echo ("</script>");
        }
    if(isset($message1)){
            echo("<script type='text/javascript'>");
                echo("Swal(");
                echo("'$message1',");
                echo("'Kliknij Ok, aby zamknąć!',");
                echo ("'success'");
                echo (")");
            echo ("</script>");
        }
    if(isset($message2)){
            echo("<script type='text/javascript'>");
                echo("Swal(");
                echo("'$message2',");
                echo("'Kliknij Ok, aby zamknąć!',");
                echo ("'success'");
                echo (")");
            echo ("</script>");
        }

    ?>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/scirpt.js"></script>
</body>
</html>
