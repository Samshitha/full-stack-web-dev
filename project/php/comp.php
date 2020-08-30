<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\" style=\"height:290px\">
                            <h5 class=\"card-title\">$productname</h5>
                            
                            
                            <h5>
                                
                                <span class=\"price\">Rs. $productprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-info my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                             <div class=\"trans\" style=\"opacity:0.2\">
                                <br>
                                <br>
                                <button type=\"button\" class=\"btn btn-light btn-block\">---------------</button> 
                             </div>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"test.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            
                           
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}