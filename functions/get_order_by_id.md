## get_order_by_id

get_order_by_id — get single order placed in the online shop

### Summary

    get_order_by_id($id);

### Usage

    //get an order  
    $order_id = 3;
    $order = get_order_by_id($order_id);

    if($order != false){
    	print $order['id'];  
    	print $order['amount'];
    	print $order['total_items'];
    	print $order['email'];
    	print $order['created_at']; 
    	// and more... print_r($order);
    }

 