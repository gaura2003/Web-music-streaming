<?php 
echo '<html>
  <body>
    <header>
        <div class="logo-holder">
       <a><img src="../images\music app logo.jpg" alt=""></a>
        </div>
        <div class="header-div">
            <div class="main-title">
                Web Music App
            </div>
             <div class="footer-div">
            <form action="">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Search for Music " name="find" id="">
                    <button class="btn">Search</button>
                
                </div>
            </form>
        </div>
            
            <div class="main-nav">
                <div class="nav-item active"><a href="../pages/home.php">Home</a></div>
                <div class="nav-item"><a href="">Music</a></div>
                <div class="nav-item dropdown"><a id="sh" onclick="toggledhide()">Category</a>
                <div class="dropdown-list" id="show">
                    <div class="nav-item"><a href="">Pop Songs</a></div>
                    <div class="nav-item"><a href="">Party Songs</a></div>
                    <div class="nav-item"><a href="">Love Songs</a></div>
                    <div class="nav-item"><a href="">Old Songs</a></div>
                    <div class="nav-item"><a href="">19S Songs</a></div>
                    <div class="nav-item"><a href="">20S Songs</a></div>
                    <div class="nav-item"><a href="">New Songs</a></div>
                    
                </div>
                </div>
                <div class="nav-item"><a href="">Artist</a></div>
                <div class="nav-item"><a href="">About us</a></div>
                <div class="nav-item"><a href="">Contact us</a></div>
                 <div class="nav-item"><a href="../Trim Songs">Ringtone</a></div>
                <div class="nav-item dropdown"><a id="sh1" onclick="toggledhide1()">Hi ,User</a>
                    <div class="dropdown-list" id="show1">
                        <div class="nav-item"><a href="">Profile</a></div>
                        <div class="nav-item"><a href="">Playlists</a></div>
                        <div class="nav-item"><a href="">Settings</a></div>
                        <div class="nav-item"><a href="../pages/login.php">Logout</a></div>

                    </div>                   
                    </div>
                    </div>
                   

        
    </header>

  </body>
  
</html>
'


?>
