<?php 
 require('controller/viewNoticeController.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/styles1.css">
</head>
<body>
    <!-- Header -->
    <header class="page-header">
        <nav>
            <a href="index.html"><img class="logo" src="view/images/logo-1.png" alt="logo"></a>
          <ul>
            <li class="item"><a href="index.php">Inicio</a></li>
            <li class="item"><a href="view/publicview/about.php">¿Quiénes somos?</a></li>
          </ul>
          <ul>
            <li class="login"><a href="view/privateview/login.php"><button  type="submit"class="cta-contact">Iniciar Sesión</button></a></li> 
          </ul>
        </nav>
      </header>
      
    
    <!-- Main Content -->
    <main class="main columns">
      <section class="column main-column">


      <a class='article first-article' href="view/publicview/report.php?id=<?php echo $row1['id_Article'];?>"> 
          
      <figure class="article-image is-4by3">
            <img src="./view/images/image1.png" alt="">
        </figure>

          <div class="article-body">
            <h2 class="article-title">
              
            <?php echo $row1['title']; ?>
            </h2>
           
            <footer class="article-info">
              <span> <?php echo $row1['name_user']; ?></span>
              <span> <?php echo $row1['date_register'];  ?></span>
            </footer>
          </div>
       </a>


    
        <div class="columns">
          <div class="column nested-column">

          <a class='article first-article' href="view/publicview/report.php?id=<?php echo $row2['id_Article'];?>"> 

              <figure class="article-image is-16by9">
                <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-02.png" alt="">
              </figure>

              <div class="article-body">
                <h2 class="article-title">
                <?php echo $row2['title']; ?>
                </h2>

                <p>
                <?php echo $row2['article_content']; ?>
                </p>
                <footer class="article-info">
                  <span><?php echo $row2['name_user'];?></span>
                  <span><?php echo $row2['date_register'];?></span>
                </footer>
              </div>
            </a>
          </div>
    
          <div class="column">



          <a class='article first-article' href="view/publicview/report.php?id=<?php echo $row3['id_Article'];?>"> 
              <figure class="article-image is-16by9">
                <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-03.png" alt="">
              </figure>
              <div class="article-body">
                <h2 class="article-title">
                <?php echo $row3['title']; ?>
                </h2>
                <p class="article-content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <footer class="article-info">
                  <span><?php echo $row2['name_user'];?></span>
                </footer>
              </div>
            </a>



            <a class='article first-article' href="view/publicview/report.php?id=<?php echo $row4['id_Article'];?>"> 
              <div class="article-body">
                <h2 class="article-title">
                <?php echo $row4['title'];?>
                </h2>
                <p class="article-content">
                  Lorem ipsum dolor sit amet.
                </p>
                <footer class="article-info">
                  <span><?php echo $row4['name_user'];?></span>

                </footer>
              </div>
            </a>




            <a class='article first-article' href="view/publicview/report.php?id=<?php echo $row5['id_Article'];?>"> 
              <div class="article-body">
                <h2 class="article-title">
                <?php echo $row5['title'];?>
                </h2>
                <p class="article-content">
                  Lorem ipsum dolor sit amet feugiat facilisis.
                </p>
                <footer class="article-info">
                  <span><?php echo $row2['name_user'];?></span>

                </footer>
              </div>
            </a>
          </div>
        </div>


      </section>
    
      <section class="column">



        <a class="article" href="#">
          <figure class="article-image is-3by2">
            <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/1366/posts/26611/attachment/image-04.png" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <footer class="article-info">
              <span>By Joe Smith</span>
            </footer>
          </div>



        </a>
        <a class="article" href="#">
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <footer class="article-info">
              <span>By Joe Smith</span>
            </footer>
          </div>



        </a>
        <a class="article" href="#">
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <footer class="article-info">
              <span>By Joe Smith</span>
            </footer>
          </div>



        </a>
        <a class="article" href="#">
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <footer class="article-info">
              <span>By Joe Smith</span>
            </footer>
          </div>
        </a>
      </section>
    </main>




</body>
<footer>

    <!-- Footer main -->
    <section class="ft-main">
      <div class="row s-footer__bottom">
        <div>
          <h2 class="ft-title">Contacto</h2>
            <ul class="s-footer__social">
              
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                        <span class="u-screen-reader-text"></span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform: -ms-filter"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                        <span class="u-screen-reader-text"></span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform: ms-filter"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                        <span class="u-screen-reader-text"></span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
  
  
  </footer>
  </html>
</html>