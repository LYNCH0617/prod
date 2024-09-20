<?php
require_once 'function.php';
require_once '/xampp/htdocs/prod/classes/product.class.php';  
require_once 'Product.php';        


if (isset($_GET['id'])) {
  
    $id = intval($_GET['id']);
    
    
    $product = new Product();

    
    if ($product->delete($id)) { 
        echo "Double click delete to delete";
        
    } else { 
        echo "Error deleting product.";
    }
} else {
   
    echo "No product ID provided.";
}

