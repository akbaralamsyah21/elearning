<?php 
    session_start();
    $page = isset($_GET['page']) ? $_GET['page'] : false;
    $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
    
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/styles.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <!-- Navbar -->
    
        <nav class="light-blue">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo center">Logo</a>
                    
                    <a href="#" data-target="mobile-side" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <?php 
                            if($nama){
                                echo 
                                "<li><a href='index.php?page=materi'>MATERI</a></li>
                                <li><a href='index.php?page=quiz'>QUIZ</a></li>
                                <li><a class='dropdown-trigger' href='#!' data-target='dropdown1'>Profile<i class='material-icons right'>arrow_drop_down</i></a></li>"
                                ;
                            }else{
                                echo "<li><a href='index.php?page=login'>Masuk</a></li>";
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
    <!-- Sidebar -->
        <ul class="sidenav" id="mobile-side">
            <p>Hi, <?php echo $nama; ?></p>
            <?php 
                            if($nama){
                                echo 
                                "<li><a href='index.php?page=materi'>MATERI</a></li>
                                <li><a href='index.php?page=profil'>PROFIL</a></li>
                                <li><a href='index.php?page=quiz'>QUIZ</a></li>";
                            }else{
                                echo "<li><a href='index.php?page=login'>Masuk</a></li>";
                            }
            ?>
        </ul>

        <!-- Content Disini -->
        <div class="container">
        <?php 
            $filename = "$page.php";
            if(file_exists($filename)){
                include_once($filename);
            }else{
                echo "Maaf File Tidak Di Temukan";
            }

        ?>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        var sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

      
      </script>
      <script>
          $dropdown = document.querySelectorAll(".dropdown-trigger");
          M.Dropdown.init($dropdown);
      </script>
    </body>
  </html>