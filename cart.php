<?php
     ob_start();
    //include header.php file
    include("header.php");

?>
 
<?php

    //include _cart-template.php file and include cart items if it is not empty
    count($product->getData('cart')) ? include("./Template/_cart-template.php") : include("./Template/notFound/_cart_notFound.php");

?> 

<?php

    //include _wishilist_template.php file
    count($product->getData('wishlist')) ? include("./Template/_wishlist_template.php") : include("./Template/notFound/_wishlist_notFound.php");

?> 

<?php

    //include _new-phones.php file
    include("./Template/_new-phones.php");

?> 

<?php
    
    //include footer.php file
    include("footer.php");
    
    ?>