<!DOCTYPE html>
<html lang = "en" dir= "ltr">
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel = "stylesheet" href = "css/styles_sh.css">
    <link rel="icon" href="images/plant.ico">
    <link href="https://fonts.googleapis.com/css2?family=Six+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Ephemera Studios.</title>
  </head>
  <body>
    <div class = "wrapper">
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
      				<span><a href = "index.html">ephemera</a></span>
      			</div>
      			<div class = "studios">
      				<span><a href = "index.html">STUDIO</a></span>
      			</div>
      		</div>
          <div class = "flex_icons" id = "flexIcons">
            <!--
            <div class = "icon search">
              <a href = ""><img src = "images/search.svg"></a>
              <div>
                <span>search</span>
              </div>
            </div>
            -->
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
              <a href = "faq.php"><img src = "images/faq.svg"></a>
              <div>
                <span>faq</span>
              </div>
            </div>
            <div class = "icon cart">
              <a href = "cart1.php"><img src = "images/cart.svg"></a>
              <div>
                <span>cart</span>
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
      <img class = "back_top" src = "images/back-top-1.svg">
      <div class = "body_content">
        <div class = "shop_content">
          <p class = "heading" id = "paper_goods">PAPER GOODS</p>
          <div class = "category_1">
            <div class = "prod_1">
              <img src = "images/ccv1.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_1').style.display = 'block'">CALENDAR CARD VER.1</p>
            </div>
            <div class = "quick_view_1 " id = "quick_view_1">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/ccv1.png">
                    <a href = "" class = "subheading">CALENDAR CARD VER.1</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_1').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality handmade Calendar card made on a 300gsm coldpressed white carstock.</p>
                    <p>Choose your month, year and we will create one using the design sample in the image.</p>
                    <p>The month heading is handwritten calligraphy, decorated with a circle sticker of random pastel color.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_2">
              <img src = "images/ccv2.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_2').style.display = 'block'">CALENDAR CARD VER.2</p>
            </div>
            <div class = "quick_view_2 " id = "quick_view_2">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/ccv2.png">
                    <a href = "" class = "subheading">CALENDAR CARD VER.2</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_2').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality handmade Calendar card made on a 300gsm coldpressed white carstock.</p>
                    <p>Choose your month, year and we will create one using the design sample in the image.</p>
                    <p>The month heading is handwritten, decorated with a two circle sticker of random pastel color and one old style paper scrap.</p>
                    <p>Package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_3">
              <img src = "images/ccv3.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_3').style.display = 'block'">CALENDAR CARD VER.3</p>
            </div>
            <div class = "quick_view_3 " id = "quick_view_3">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/ccv3.png">
                    <a href = "" class = "subheading">CALENDAR CARD VER.3</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_3').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality handmade Calendar card made on a 300gsm coldpressed white carstock.</p>
                    <p>Choose your month, year and we will create one using the design sample in the image.</p>
                    <p>The month heading is handwritten, decorated with a circle sticker of random pastel color, a grid washi tape and a sentiment stamp.</p>
                    <p>Package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_4">
              <img src = "images/ccv4.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_4').style.display = 'block'">CALENDAR CARD VER.4</p>
            </div>
            <div class = "quick_view_4 " id = "quick_view_4">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/ccv4.png">
                    <a href = "" class = "subheading">CALENDAR CARD VER.4</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_4').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality handmade Calendar card made on a 300gsm coldpressed white carstock.</p>
                    <p>Choose your month, year and we will create one using the design sample in the image.</p>
                    <p>The month heading is handwritten calligraphy, decorated with a circle sticker of random pastel color and a hand-drawing.</p>
                    <p>Package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCTT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_5">
              <img src = "images/pss.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_5').style.display = 'block'">PAPER SCRAP SET</p>
            </div>
            <div class = "quick_view_5 " id = "quick_view_5">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/pss.png">
                    <a href = "" class = "subheading">PAPER SCRAP SET</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_5').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>You will receive 1 red 7cm X 15cm and 2 black 4cm X 3cm 150gsm paper scraps, a stamp and a random antique paper sentiment</p>
                    <p>Package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class = "heading" id = "journals">JOURNALS</p>
          <div class = "category_2">
            <div class = "prod_1">
              <img src = "images/journal-1.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_6').style.display = 'block'">MINI PLAIN JOURNAL - STITCHED</p>
            </div>
            <div class = "quick_view_6 " id = "quick_view_6">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/journal-1.png">
                    <a href = "" class = "subheading">MINI PLAIN JOURNAL - STITCHED</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_6').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality hand-stiched journal with 20 plain 90 gsm paper leaves.</p>
                    <p>The cover of the Journal is either pastel green or maroon 100gsm paper.</p>
                    <p>Size of the Journal is 10cm X 10cm</p>
                    <p>package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_2">
              <img src = "images/journal-3.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_7').style.display = 'block'">MEDIUM PLAIN JOURNAL - STITCHED</p>
            </div>
            <div class = "quick_view_7 " id = "quick_view_7">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/journal-3.png">
                    <a href = "" class = "subheading">MEDIUM PLAIN JOURNAL - STITCHED</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_7').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality hand-stiched journal with 20 plain 90 gsm paper leaves.</p>
                    <p>The cover of the Journal is 300gm white coldpressed paper.</p>
                    <p>Size of the Journal is 10cm X 15cm</p>
                    <p>package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_3">
              <img src = "images/journal-2.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_8').style.display = 'block'">PLAIN JOURNALS SET - STITCHED</p>
            </div>
            <div class = "quick_view_8 " id = "quick_view_8">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/journal-2.png">
                    <a href = "" class = "subheading">PLAIN JOURNALS SET - STITCHED</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_8').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality hand-stiched journal with 20 plain 90 gsm paper leaves.</p>
                    <p>The cover of the Journal is 100gsm either pastel green or maroon paper.</p>
                    <p>Set of 3 Journals - One 10cm X 15cm and Two 10cm X 10cm as shown in the image.</p>
                    <p>package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_4">
              <img src = "images/journal-4.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_9').style.display = 'block'">GRID JOURNAL - RING BOUND</p>
            </div>
            <div class = "quick_view_9 " id = "quick_view_9">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/journal-4.png">
                    <a href = "" class = "subheading">GRID JOURNAL - RING BOUND</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_9').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality ring-bound blue gridded journal with 200 80gsm leaves. The size of the Journal is B5</p>
                    <p>The cover of the Journal is plastic black in color.</p>
                    <p>Ideal for Notetaking and Journaling.</p>
                    <p>package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_5">
              <img src = "images/journal-5.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_10').style.display = 'block'">GRID JOURNAL - STITCHED</p>
            </div>
            <div class = "quick_view_10 " id = "quick_view_10">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/journal-5.png">
                    <a href = "" class = "subheading">GRID JOURNAL - STITCHED</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_10').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality hand-stiched journal with 150 gridded 70 gsm paper leaves. Size of the Journal is B5</p>
                    <p>The cover of the Journal is 300gsm brown carstock.</p>
                    <p>package is wrapped carefully with love.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class = "heading" id = "digital_goods_and_printables">DIGITAL GOODS & PRINTABLES</p>
          <div class = "category_3">
            <div class = "prod_1">
              <img src = "images/digital-7.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_11').style.display = 'block'">CARAMEL SET - PRINTABLE/DIGITAL STICKER</p>
            </div>
            <div class = "quick_view_11 " id = "quick_view_11">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-7.png">
                    <a href = "" class = "subheading">CARAMEL SET - PRINTABLE/DIGITAL STICKER</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_11').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality png/vector digital file exactly as shown in the image.</p>
                    <p>You can print the file or use it digitally in apps like Goodnotes</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_1">
              <img src = "images/digital-5.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_12').style.display = 'block'">MATCHA SET - PRINTABLE/DIGITAL STICKER</p>
            </div>
            <div class = "quick_view_12 " id = "quick_view_12">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-5.png">
                    <a href = "" class = "subheading">MATCHA SET - PRINTABLE/DIGITAL STICKER</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_12').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality png/vector digital file exactly as shown in the image.</p>
                    <p>You can print the file or use it digitally in apps like Goodnotes</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_1">
              <img src = "images/digital-6.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_13').style.display = 'block'">COFFEE SET - PRINTABLE/DIGITAL STICKER</p>
            </div>
            <div class = "quick_view_13 " id = "quick_view_13">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-6.png">
                    <a href = "" class = "subheading">COFFEE SET - PRINTABLE/DIGITAL STICKER</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_13').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality png/vector digital file exactly as shown in the image.</p>
                    <p>You can print the file or use it digitally in apps like Goodnotes</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_2">
              <img src = "images/digital-4.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_14').style.display = 'block'">DOTS VER.1 - PRINTABLE/DIGITAL STICKER</p>
            </div>
            <div class = "quick_view_14" id = "quick_view_14">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-4.png">
                    <a href = "" class = "subheading">DOTS VER.1 - PRINTABLE/DIGITAL STICKER</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_14').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality png/vector and png digital file exactly as shown in the image.</p>
                    <p>You can print the file or use it digitally in apps like Goodnotes</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_3">
              <img src = "images/digital-8.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_15').style.display = 'block'">TICKETS - PRINTABLE/DIGITAL STICKER</p>
            </div>
            <div class = "quick_view_15" id = "quick_view_15">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-8.png">
                    <a href = "" class = "subheading">TICKETS - PRINTABLE/DIGITAL STICKER</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_15').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality png/vector digital file exactly as shown in the image.</p>
                    <p>You can print the file or use it digitally in apps like Goodnotes</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_3">
              <img src = "images/digital-3.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_16').style.display = 'block'">DOTS VER.2 - PRINTABLE/DIGITAL STICKER</p>
            </div>
            <div class = "quick_view_16" id = "quick_view_16">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-3.png">
                    <a href = "" class = "subheading">DOTS VER.2 - PRINTABLE/DIGITAL STICKER</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_16').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality png/vector digital file exactly as shown in the image.</p>
                    <p>You can print the file or use it digitally in apps like Goodnotes</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_4">
              <img src = "images/digital-1.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_17').style.display = 'block'">WALLPAPER - RAINBOW</p>
            </div>
            <div class = "quick_view_17" id = "quick_view_17">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-1.png">
                    <a href = "" class = "subheading">WALLPAPER - RAINBOW</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_17').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality jpeg and png digital wallpaper exactly as shown in the image.</p>
                    <p>Wallpaper for both mobile and laptop/tablet</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_5">
              <img src = "images/digital-2.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_18').style.display = 'block'">WALLPAPER - LOW BATTERY</p>
            </div>
            <div class = "quick_view_18" id = "quick_view_18">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-2.png">
                    <a href = "" class = "subheading">WALLPAPER - LOW BATTERY</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_18').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality jpeg and png digital wallpaper exactly as shown in the image.</p>
                    <p>Wallpaper for both mobile and laptop/tablet</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <a class = "add_to_cart" href = "shop.php">VIEW PRODUCT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "prod_5">
              <img src = "images/digital-9.png">
              <p class = "subheading" onclick = "document.getElementById('quick_view_19').style.display = 'block'">DIGITAL JOURNAL</p>
            </div>
            <div class = "quick_view_19" id = "quick_view_19">
              <div class = "quick animate">
                <div class = "box">
                  <div class = "image">
                    <img src = "images/digital-9.png">
                    <a href = "" class = "subheading">DIGITAL JOURNAL</a>
                  </div>
                </div>
                <div class = "product">
                  <span onclick = "document.getElementById('quick_view_19').style.display='none'" class = "close" title = "Close Pop-Up">CLOSE</span>
                  <br><br>
                  <div class = "product_description">
                    <p>High quality digital journal in pdf format.</p>
                    <p>Contents include montly calendat log and weekly log. Each month has different muted colors.</p>
                    <p>Zip file download will start immediately after your purchase.</p>
                  </div>
                  <div class = "add_cart">
                    
                    <h2>OUT OF STOCK!!</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class = "footer">
        <div class = "footer-links">
          <ul>
            <li><a class = "foot" href = "index.html">&copy; 2020 EPHEMERA STUDIOS.</a></li>
            <li><a class = "foot" href = "about.html">ABOUT</a></li>
            <li><a class = "foot" href = "contact.html">CONTACT</a></li>
            <li><a class = "foot" href = "shipping.html">SHIPPING AND RETURNS</a></li>
            <li><a class = "foot" href = "policy.html">PRIVACY POLICY</a></li>
            <li><a class = "foot" href = "terms.html">TERMS AND CONDITIONS</a></li>
          </ul>
        </div>
        <div class = "footer-payment">
          <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g></svg>
          <title id="pi-american_express">American Express</title>
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg>
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path></svg>
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg>
        </div>
      </div>
      <img class = "back_bottom" src = "images/back-bottom.svg">
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
  </body>
</html>