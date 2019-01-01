<div class="header">
    <div class="left-side-header">
        <div class="title" id="homepage-logo">Computer Shop</div>
    </div>
    <div class="center-side-header">
        <form action="searchresult.php" method="GET">
            <input type="text" name="search" class="search-text-header" id="search">
        </form>
    </div>
    <div class="right-side-header">
        <div class="text">
            <?php
                session_start();
                if($_SESSION["login"] == 1){
                    echo 'Welcome, ' . $_SESSION["name"] . '! <button class="btn-header" id="btn-logout">Log Out</button>';
                }
                else{
                    echo '<button class="btn-header" id="btn-login">Login</button>
                    <button class="btn-header" id="btn-register">Register</button>';
                }
            ?>
        </div>
    </div>
</div>
<script src="template/header.js"></script>