<!DOCTYPE html>
<html>
  <head>
    <?php
      if(isset($_GET['lang']))
        $lang = $_GET['lang'];
      else 
        $lang = '';

      if($lang == 'en')
        include('lang/en_lang.php');
      else
        include('lang/fr_lang.php');

    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"/>
    <title>Les Adrets</title>

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/>
    <link rel="icon" href="images/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" media="all and (min-width: 1080px)" href="classic_big.css" />
    <link rel="stylesheet" media="all and (max-width: 1080px)" href="small_medium.css" />
  </head>

  <body>
    <div id="main_content">
      <header class="horizontal_layout small_vertical">

        <div class="title horizontal_layout">
          <img src="images/logo.png" alt="Logo restaurant"/>
          <h1><?php echo RESTAURANT_ADRETS ?></h1>
        </div>
        <div class="horizontal_layout small_vertical navigation">
          <nav class="language">
            <ul class="horizontal_layout">
              <li><a href="index.php?lang=fr"><img src="images/french.png" alt="Logo francais" /></li></a>
              <li><a href="index.php?lang=en"><img src="images/english.png" alt="Logo anglais" /></li></a>
            </ul>
          </nav>
          
          <nav class="main_navigation text_navigation horizontal_layout">
            <a href="#scrollHistory"      class="middleScroll"  ><?php echo ACCUEIL ?></a>
            <a href="#scrollMenu"         class="middleScroll"  ><?php echo LE_CHEF ?></a>
            <a href="#scrollContact"      class="middleScroll"  ><?php echo RESERVATION_MAJ ?></a>
          </nav>
        </div>
        
      </header>
      
      <section id="restaurant_history" class="history horizontal_layout medium_vertical_reverse">
    		
        <div class="slideshow">
          <img src="images/white.jpg" alt="photo plat" class="photos fade" />
        </div>
        <div class="history_text">
          <h2><?php echo LE_RESTAURANT ?></h2>
          <p>
            Lorem ipsum dolor sit amet, te scripta nostrum ius, est alii magna cu. Invidunt consulatu ne cum. Te qui prima adolescens, inermis nonumes no vel. Sea et enim probatus, cum et veri quas iusto, offendit delectus vulputate no mel. Phaedrum efficiantur definitionem ea eum, te mea mundi quodsi.
            Eu etiam verear fuisset duo, accusam scriptorem nec an. Mel cibo liber euripidis cu, nostrud minimum ut eam, mei timeam tibique interpretaris in. Qui nullam libris quaeque ne. Pri saepe prompta aliquam in.
          </p>
        </div>  
      </section>

      <div id="scrollHistory" class="horizontal_separator"></div>

      <section id="chief_history" class="history waypoint_container honrizontal_reverse_layout medium_vertical_reverse">
        <div id="scrollChief" class="_waypoint"></div>

        <div class="slideshow">
          <img src="images/white.jpg" alt="photo plat" class="photos fade"/>
        </div>
        <div class="history_text">
          <h2><?php echo LE_CHEF ?></h2>
          <p>
            Lorem ipsum dolor sit amet, te scripta nostrum ius, est alii magna cu. Invidunt consulatu ne cum. Te qui prima adolescens, inermis nonumes no vel. Sea et enim probatus, cum et veri quas iusto, offendit delectus vulputate no mel. Phaedrum efficiantur definitionem ea eum, te mea mundi quodsi.
            Eu etiam verear fuisset duo, accusam scriptorem nec an. Mel cibo liber euripidis cu, nostrud minimum ut eam, mei timeam tibique interpretaris in. Qui nullam libris quaeque ne. Pri saepe prompta aliquam in.
          </p>
        </div>
      </section>

      <div id="menuScrollPoint" class="horizontal_separator scrollPoint"></div>
      
      <section id="menu" class="menu waypoint_container vertical_layout">
        <div id="scrollMenu" class="_waypoint"></div>

        <nav class="text_navigation horizontal_layout">
          <a class ="menuLink1"><?php echo MENU ?></a>
          <a class ="menuLink2"><?php echo AUJOURDHUI ?></a>
          <a class ="menuLink3"><?php echo CARTE ?></a>
        </nav>
        <div class="menu_text vertical_layout">
          <h2><?php echo ENTREE ?></h2>
          <ul class="vertical_layout menuDisplayer">
            <li>Salade lyonnaise</li>
            <li>Saumon tiède, salade de Roquette au Wasabi</li>
            <li>Foie gras, mélange du jardin</li>
          </ul>
          <h2><?php echo PLAT ?></h2>
          <ul class="vertical_layout menuDisplayer">
            <li>Soufflé de brochet, crème d'écrevisse</li>
            <li>Andouillette de Bobosse à la ficelle</li>
            <li>Magret de canard "France" poelé</li>
          </ul>
          <h2><?php echo DESSERT ?></h2>
          <ul class="vertical_layout menuDisplayer">
            <li>Cervelle de canut ou fromage blanc</li>
            <li>Plateau de fromage</li>
            <li>Carte des desserts</li>
          </ul>
          <p class="price">(<?php echo PRIX ?> : 35€)</P>
        </div>

        <script charset="UTF-8" src="js/menuReader.js" type="text/javascript"></script>

      </section>

      <div id="contactScrollPoint" class="horizontal_separator"></div>
    
      <section id="contact" class="contact waypoint_container horizontal_layout medium_vertical_reverse">
        <div id="scrollContact" class="_waypoint"></div>

        <div class="booking">
          <form method="post" action="scriptPhpOuJavaACreer">       
            <fieldset class="horizontal_layout medium_vertical espaced reservation">
              <legend><?php echo RESERVATION ?></legend>
              
              <label><?php echo DATE_HEURE ?> </label><input placeholder="dd/mm" type="date" id="date" name="date"/>
              <select name="pays" id="pays">
                <optgroup label="Déjeuner :">
                  <option>12h00</option>
                  <option>12h30</option>
                  <option>13h00</option>
                  <option>13h30</option>
                </optgroup>
                <optgroup label="Diner :">
                  <option>19h00</option>
                  <option>19h30</option>
                  <option>20h00</option>
                  <option>20h30</option>
                  <option>21h00</option>
                  <option>21h30</option>
                  <option>22h00</option>
                  <option>22h30</option>
                 </optgroup>
              </select>
              
              <label><?php echo NOMBRE_CONVIVE ?> </label><input placeholder="1" type="number" id="number" name="number"/>
            </fieldset>
            
            <fieldset>
              <legend><?php echo COMMENTAIRES ?></legend>
              <textarea name="text" id="commentary" rows="5" placeholder="<?php echo SPECIFICATIONS ?>"></textarea>       
            </fieldset>
            
            <div class="horizontal_layout very_small_vertical">
              <fieldset class="details">
                <legend><?php echo COORDONNEE ?></legend>
                <input name="Lastname" id="lastname_input" placeholder="<?php echo NOM ?>" type="text">
                <br>
                <input name="firstname" id="firstname_input" placeholder="<?php echo PRENOM ?>" type="text">
                <br>
                <input name="email" id="email_input" placeholder="<?php echo MAIL ?>" type="email">
                <br>
                <input name="tel" id="tel_input" placeholder="<?php echo TELEPHONE ?>" type="tel">
                <br>
              </fieldset>
              
              <div class="validation">
                <p><?php echo RESERVATION_PLUS_5PERSONNES ?></p>
                <input type="submit" value="<?php echo ENVOYER_RESERVATION ?>" />
              </div>
            </div>
          </form>
        </div>
        
        <div class="informations">
          <p>
            <strong><?php echo ADRESSE ?></strong>
            <br>30, RUE DU BOEUF - 69005 LYON 
          </p>
          <p>
            <strong><?php echo HORAIRE ?></strong>
            <br><?php echo OUVERT_LUNDI_VENDREDI ?>
            <br><?php echo MIDI ?> : 12h00-13h30 
            <br><?php echo SOIR ?> : 19h00-22h30
            <br><?php echo FERMETURE ?>
            <br><?php echo ENTRE_NOEL_JOUR_AN ?>
          </p>
          <p>
            <strong><?php echo COMMENT_ALLER ?></strong>
            <br><?php echo TRANSPORT_COMMUN ?> Vieux Lyon
            <br>Métro D, Funiculaire ou Bus 27, 31 et C20
            <br><?php echo EN_VOITURE ?> : Parking St George
          </p>
          <p>
            <strong><?php echo TELEPHONE ?></strong>
            <br>- 04 78 38 24 30 -
          </p>
        </div>     
      </section>
      
      <div id="mapScrollPoint" class="horizontal_separator"></div>
      
      <section id = "scrollMap">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5566.770698626524!2d4.8269833!3d45.763467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb87e5b44b9c7fbff!2sLes+Adrets!5e0!3m2!1sfr!2sfr!4v1495204259931" 
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>      
      </section>   
    
    <!-- NEED JS -->
    <nav id="link_aside" class="main_navigation">
      <ul>
        <li>
          <img src="images/side_button_full.png" href="#scrollHistory" class="asideButton middleScroll" alt="button"/>
        </li>
        <li>
          <img src="images/side_button.png" href="#scrollMenu" class="asideButton middleScroll" alt="button"/>
        </li>
        <li>
          <img src="images/side_button.png" href="#scrollContact" class="asideButton middleScroll" alt="button"/>
        </li>
      </ul>
    </nav> 
    
    <!-- Java Script -->
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <script src="js/smoothScrolling.js"></script>
    <script src="js/slideshow.js"></script>
    <script src="js/asideNavigation.js"></script>

  </body>
</html>