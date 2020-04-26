<!DOCTYPE HTML>
<html>
    <head>
        <title>Bőrland Kft.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="styles/bootstrap/bootstrap.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="scripts/bootstrap/bootstrap.min.js"></script>

        <!-- Semantic UI CSS -->
        <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">

        <!-- Semantic UI JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="semantic/semantic.min.js"></script>

        <link rel="stylesheet" href="styles/style.css">
        <script src="scripts/visualisation.js" type="javascript"></script>
        <script>
    
          /*
          $('#navid').css('opacity', '.0');
            window.onscroll = function() {
              
              if ((window.innerHeight + window.scrollY) >500) {

                $('#navid').removeClass('bg-transparent');
                //$('#navid').addClass('bg-dark');
                
                $('#navid').animate(
                  function() {
                    opacity = 1
                  }, 5000
                );

              }
              else if ((window.innerHeight + window.scrollY) === 0){
                $('#navid').animate(
                  function() {
                    opacity = 0
                  }, 5000
                );
              }
            };*/
           
            
        </script>
    </head>
    <body>
      <!-- SIDE MENU -->

  <div class="ui sidebar inverted vertical menu" id="sidebar_menu">
    <a class="item">
      Főoldal
    </a>
    <a class="item">
      Munkáink
    </a>
    <a class="item">
      Rólunk
    </a>
    <a class="item">
      Bejelentkezés
    </a>
  </div>

     <!-- HEADER -->
     
    <div class="header-container">
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

        <a class="navbar-brand" href="#">Bőrland Kft.</a>
        <!--<button id="openNavBar" class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Főoldal <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Munkáink</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rólunk</a>
          </li>
          <li class="nav-item signin-button">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signinModal" >
              Bejelentkezés
          </button>   
          </li>
        </ul>
        </div>
      </nav>
    
      <div class="container title">
          <div class="row">
            <div class="col-sm">
                <img src="images/logo1.jpg" class="ceglogo">
                <h1 class="title-text"><span>Üdvözöljük a Bőrland Kft. weboldalán!<span></h1>
                <button class="ui basic button btn-munkaink">
                    <i class="fa fa-chevron-right"></i>
                    <span>Tovább a munkáinkhoz</span>
                </button>
            </div>
          
          </div>
          
      </div>
      
    </div>
    
    <!-- TÖRZS -->
    <div class="header-footer">
             

          </div>
    <section>
      <article>
       <h1 class="ui horizontal divider header"><i class="fa fa-info-circle" style="margin-right:20px"></i>Rólunk</h1>
        
        <!--
        <div class="ui segment kepes-szovegresz">
          
  <img class="ui medium left floated image" src="images/header-wallpaper.jpeg">
  <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
  <img class="ui medium right floated image" src="images/leather-camera-bag-rain-exposed-1024x576.jpg">
  <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>

  <div class="ui grid" style="width:100%">
  <div class="five wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
  <div class="nine wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
  <div class="four wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
  <div class="four wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
  <div class="seven wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
  <div class="eight wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
  <div class="six wide column"><img class="ui medium left floated image" src="images/header-wallpaper.jpeg"></div>
</div>

</div>

          -->

          



        <p>
        Vállalkozásunk 2015-ben alakult. Kezdő létszámunk 5 fő volt, folyamatosan bővülünk. Jelenleg 30 fővel dolgozunk. Fő profilunk a cég indulásakor a táskafélék és szíjazatok gyártása. Azóta tevékenységi körünket folyamatosan kiterjesztjük, mint cipőfelsőrész és autóipari termékek gyártása. Alapelvünk a minőségi precíz munka. Külföldi partnerek és hazai designerek termékeit gyártjuk. Cégünk bőr és szintetikus anyagból készült termékek gyártására van felszerelve. 
            </p>
            
            <div class="image-container">

                  <div class="an-image" id="gyar-1"></div>
                  <div class="an-image" id="gyar-2"></div>
            </div>
  
            </div>
            
            
<!--
        <div class="ui grid">
           <div class="ten wide column">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec quam mauris. Curabitur volutpat lectus sit amet libero porttitor elementum. Mauris rhoncus mollis justo, in auctor lorem blandit molestie. Mauris felis lorem, iaculis id tristique ac, ultrices quis nulla. Phasellus scelerisque scelerisque massa, id consequat velit rutrum sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque sem nec vehicula lacinia. Curabitur eget laoreet risus. Donec vitae pretium ipsum. Sed porttitor in ex non laoreet. Vestibulum convallis eros dui, quis feugiat augue cursus nec. Suspendisse potenti. Cras feugiat leo convallis nibh viverra, in tristique odio rhoncus.
              </p>
          </div>
-->          
          </article>
          <article>
            <h1 class="ui horizontal divider header"><i class="fa fa-cog" style="margin-right:20px"></i>Gépeink</h1>
            <div class="content">
            <p>
              Az alapanyagok szabását megfelelő célgépekkel (szabász, egalizáló, sérfelő) végezzük. A táskagyártáshoz rendelkezünk lapos, karos, oszlopos Adler gépparkkal, behajtó géppel és szélfestő gépekkel. Cipőfelsőrész gyártásához rendelkezünk alsó késes PFAFF gépekkel, kéttűs géppel, közbélés vasalóval. Az autóiparhoz Jack gyorsvarró géppark áll rendelkezésre. A kézimunka elől sem zárkózunk el, például formázófás termékek, kapaszkodók készítése.
            </p>

     

        

          </article>
          

</div>
    </section>



<!-- MODALS -->
<div class="modal fade signin" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Bejelentkezés</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="ui transparent left icon input">
              <input type="text" placeholder="Felhasználónév">
                <i class="user icon"></i>
           </div>
           <br>
           <div class="ui transparent left icon input">
              <input type="password" placeholder="Jelszó">
                <i class="lock icon"></i>
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Bejelentkezés</button>
      </div>
    </div>
  </div>
</div>







                <div class="ui basic modal" id="menuModal">
                    <div class="signin">
                    <h2>Bejelentkezés<h2>

                        <div class="ui left icon input">
                            <input type="text" placeholder="Search...">
                                <i class="user icon"></i>
                         </div>
                         <br>
                         <div class="ui left icon input">
                            <input type="password" placeholder="Search...">
                                <i class="lock icon"></i>
                         </div>
                     </div>
                    
  
                </div>

          <script>
     // $('#openNavBar').click(function() {
     //       $('#menuModal').modal('show');
     //       });
     /*
     $('#openNavBar').click(function() {
        $('#sidebar_menu').sidebar('toggle');
     }); */
      </script>
        <footer>
        </footer>
    </body>
</html>