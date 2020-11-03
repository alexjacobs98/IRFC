
<div class="burger-menu" onclick="MenuToggle()">
    <div id="burger-menu-top" class="burger-bar burger-menu-top"></div>
    <div id="burger-menu-middle" class="burger-bar burger-menu-middle"></div>
    <div id="burger-menu-bottom" class="burger-bar burger-menu-bottom"></div>
</div>
<div id="Nav-Menu" class="nav-menu-outer">
    <ul>
        <?php
         session_start();
         $_SESSION['User-Role'] = "player-coach";
         $role = $_SESSION['User-Role'];
        
         if ($role == "coach"){
             echo'
                <li><a href="">VERIFY COACHES</a></li>
                <li><a href="">PLAYER REPORTING</a></li>
                <li><a href="">MY ACCOUNT</a></li>
                <li><a href="">VIEW PLAYERS</a></li>
             ';
         }elseif($role == "player"){
            echo'
                <li><a href="">MY STATS</a></li>
                <li><a href="">MY REVIEWS</a></li>
                <li><a href="">MY ACCOUNT</a></li>
            ';
         }elseif($role == "player-coach") {
             echo'
                <li><a href="">VERIFY COACHES</a></li>
                <li><a href="">PLAYER REPORTING</a></li>
                <li><a href="">MY ACCOUNT</a></li>
                <li><a href="">VIEW PLAYERS</a></li>
                <li><a href="">MY STATS</a></li>
                <li><a href="">MY REVIEWS</a></li>
             ';
         }

         ?>
       
    </ul>
    <div class="menu-indicator">
        <i class="fas fa-arrow-circle-right"></i>
    </div>
</div>
    



