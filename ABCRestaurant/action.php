<?php  
 //action.php  
 session_start();  
  include 'config/mysqlicon.php';
 if(isset($_POST["product_id"]))  
 {  
      $order_table = '';  
      $message = '';  
    //  $order_id = $_POST["order_id"];  
      if($_POST["action"] == "add")  
      {  
           if(isset($_SESSION["shopping_cart"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["shopping_cart"] as $keys => $values)  
                {  
                     if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])  
                     {  
                          $is_available++;  
                          $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                          'product_id'               =>     $_POST["product_id"],  
                          'product_name'               =>     $_POST["product_name"],  
                          'product_price'               =>     $_POST["product_price"],  
                          'product_quantity'          =>     $_POST["product_quantity"]  
                     );  
                     $_SESSION["shopping_cart"][] = $item_array;  
                }  
           }  
           else  
           {  
                $item_array = array(  
                     'product_id'               =>     $_POST["product_id"],  
                          'product_name'               =>     $_POST["product_name"],  
                          'product_price'               =>     $_POST["product_price"],  
                          'product_quantity'          =>     $_POST["product_quantity"]  
                     );  
           
                $_SESSION["shopping_cart"][] = $item_array;  
           }  
		   

		
		
      }  
      if($_POST["action"] == "remove")  
      {
			
			
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["product_id"] == $_POST["product_id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     $message = '<label class="text-success">Product Removed</label>';  
                }  
           }  
		  
      }  
      
	  
 
      $order_table .= '  
           '.$message.'  
           <table class="table table-bordered">  
                <tr>  
                     <th width="30%">Name</th>  
                     <th width="20%">Quantity</th>  
                     <th width="20%">Price (Rs)</th>  
                     <th width="15%">Total (Rs)</th>  
                     <th width="5%">Action</th>  
                </tr>  
           ';  
      if(!empty($_SESSION["shopping_cart"]))  
      {  
           $total = 0;  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                $order_table .= '  
                     <tr>  
                          <td>'.$values["product_name"].'<input type="hidden" name="pro_id[]" data-product_id="'.$values["product_id"].'" id="named'. $values["product_id"].'" value="'.$values["product_id"].'" /> 
						  </td>  
                          <td>'.$values["product_quantity"].'<input type="hidden" name="quantity[]" data-product_id="'.$values["product_id"].'" id="quantity'.$values["product_id"].'" value="'.$values["product_quantity"].'" class="form-control quantity" data-product_id="'.$values["product_id"].'" /></td>  
						  <td>'.$values["product_price"].'<input type="hidden" name="price[]" data-product_id="'.$values["product_id"].'" id="pric'.$values["product_id"].'" value="'.$values["product_price"].'" class="form-control pric" /></td>  
                         
                          <td align="right">'.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>  
                          <td><button name="delete" type="button"class="btn btn-danger btn-xs delete" id="'.$values["product_id"].'">Remove</button></td>  
                     </tr>  
                ';  
                $total = $total + ($values["product_quantity"] * $values["product_price"]);  
           }  
           $order_table .= '  
                <tr>  
                     <td colspan="3" align="right">Total</td>  
                     <td align="right">Rs '.number_format($total, 2).'<input type="hidden" class="myclass"  value="'.$total.'" id="tot_cost"></td>  
                     <td></td>  
                </tr>  
               
           ';  
      }  
      $order_table .= '</table>';  
      $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["shopping_cart"])  
      );  
      echo json_encode($output);  
 }  
 ?>