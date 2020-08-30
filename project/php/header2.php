<html>
<head>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel = "stylesheet" href = "css/styles_shop.css">
    <link rel="icon" href="images/plant.ico">
    <link href="https://fonts.googleapis.com/css2?family=Six+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Ephemera Studios.</title>
    <link rel="stylesheet" href="style.css">
  </head>
</head>

<header id="header">

<div class = "navbar_cover" id = "navbar_cover">
    <div class = "navbar">
        <div id = "mySidenav" class = "sidenav">
            <img class = "nav_back" src = "images/nav-back.svg">
            <a href = "javascript:void(0)" class = "close" onclick = "closeNav()"><img src = "images/close.svg"></a>
            <a href = "index1.php" class = "tab">Home</a>
            <a href = "shop.php" class = "tab active">Shop</a>
            <a href = "account.php" class = "tab">Account</a>
            <a href = "faq.php" class = "tab">FAQ</a>
            <a href = "cart1.php" class = "tab">Cart</a>
        </div>
        <div class = "logo">
            <div class = "ephemera">
                <span><a href = "index1.php">ephemera</a></span>
            </div>
            <div class = "studios">
                <span><a href = "index1.php">STUDIO</a></span>
            </div>
        </div>
        <div>
            <br>
        </div>
        <div class = "flex_icons" id = "flexIcons">
            <div class = "icon home">
                <a href = "index1.php"><img src = "images/home.svg"></a>
                <div>
                    <span>home</span>
                </div>
            </div>
            <div class = "icon shop current">
              <a href = "shop.php"><img src = "images/shop.svg"></a>
              <div>
                <span>shop</span>
              </div>
            </div>
            <div class = "icon person">
                <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

                <?php else: ?>

                <?php endif ?>
                <a href="logout.php"><img src = "images/person.svg"></a>
              <div>
                <span>Logout</span>
              </div>
            </div>
            <div class = "icon faq">
              <a href = "faq.html"><img src = "images/faq.svg"></a>
              <div>
                <span>faq</span>
              </div>
            </div>
            <div class = "icon cart">
              <a href = "cart1.php"><img src = "images/cart.svg"></a>
              <div>
                <span>cart</span>
                <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
              </div>
            </div>
            <div class = "icon menu option">
              <span onclick = "openNav()"><img src = "images/menu.svg"></span>
              <div>
                <span>menu</span>
              </div>
            </div>


        </div>
        
    </div>
</div>
<script>
      function openNav()
      {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav()
      {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
    <script type="text/javascript">
      var header = document.getElementById("mySidenav");
      var tabs = header.getElementsByClassName("tab");
      for(var i = 0; i < tabs.length; i++)
      {
        btns[i].addEventListener("click", function()
        {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
    <script type="text/javascript">
      var header = document.getElementById("flexIcons");
      var tabs = header.getElementsByClassName("icon");
      for(var i = 0; i < tabs.length; i++)
      {
        btns[i].addEventListener("click", function()
        {
          var current = document.getElementsByClassName("current");
          current[0].className = current[0].className.replace(" current", "");
          this.className += " current";
        });
      }
    </script>
    <script type="text/javascript">
      var header = document.getElementById("footer-links");
      var tabs = header.getElementsByClassName("foot");
      for(var i = 0; i < tabs.length; i++)
      {
        btns[i].addEventListener("click", function()
        {
          var current = document.getElementsByClassName("now");
          current[0].className = current[0].className.replace(" now", "");
          this.className += " now";
        });
      }
    </script>
    <script>
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("navbar_cover").style.top = "0";
        } else {
          document.getElementById("navbar_cover").style.top = "-150px";
        }
        prevScrollpos = currentScrollPos;
      }
    </script>
    
                        
                    
</header>

</html>
