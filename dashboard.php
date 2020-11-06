<?php include("includes/header.inc.php"); ?>
<?php include("includes/menu.inc.php"); ?>    
    <div class="dashboard-container">
        <div class="logo-container">
            <img src="dist\images\logo.jpg" alt="">
        </div>
        <?php 
         if ($role == "coach"){
             echo'
            <div class="p-5 dashboard-options-container">
                <div class="option">
                    <i class="fas fa-pencil-alt"></i>
                    PLAYER REPORTING
                </div>
                <div class="option">
                    <i class="far fa-check-circle"></i>
                    VERIFY COACHES
                </div>
                <div id="option-3" class="option">
                    <i class="fas fa-cog"></i>
                    MY ACCOUNT
                </div>
            </div>
             ';
         }elseif($role == "player"){
            echo'
            <div class="p-5 dashboard-options-container">
                <div class="option">
                    <i class="fas fa-chart-bar"></i>
                    MY STATS
                </div>
                <div class="option">
                    <i class="fas fa-book-open"></i>
                    MY REVIEWS
                </div>
                <div id="option-3" class="option">
                    <i class="fas fa-cog"></i>
                    MY ACCOUNT
                </div>
            </div>
            ';
         }elseif($role == "player-coach") {
             echo'
             <div class="p-5 dashboard-options-container">
                <div class="option">
                    <i class="fas fa-pencil-alt"></i>
                    PLAYER REPORTING
                </div>
                <div class="option">
                    <i class="far fa-check-circle"></i>
                    VERIFY COACHES
                </div>
                <div id="option-3" class="option">
                    <i class="fas fa-cog"></i>
                    MY ACCOUNT
                </div>
            </div>
             ';
         }
         ?>
   
    </div>
<?php include("includes/footer.inc.php"); ?>