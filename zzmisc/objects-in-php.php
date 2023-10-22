<?php
/*
 * @Author: AJ Javadi 
 * @Email: amirjavadi25@gmail.com
 * @Date: 2023-10-22 11:11:31 
 * @Last Modified by: Someone
 * @Last Modified time: 2023-10-22 11:30:00
 * @Description: Dummies example for objects in php
 */


//   create an invoice class
// class Invoice {
//     public $customer_id;
//     public $subtotal;
//     public $tax_rate;
//     public $total;



// And then create an instance of the class:
// need to use __construct() method for create an instance of the class

/* 

public function __construct($Arg1, $Arg2) {
    $this->prop1 = $Arg1;
    $this->prop2 = $Arg2;

    // etc.
}
}


*/

// class Invoice {
//     public $customer_id;
//     public $subtotal;
//     public $tax_rate;
//     public $total;

//     public function __construct($Customer_id, $Subtotal, $Tax_rate) {
//         $this->customer_id = $Customer_id;
//         $this->subtotal = $Subtotal;
//         $this->tax_rate = $Tax_rate;
//         $this->total = $Subtotal * (1 + $Tax_rate);
//     }
// }

// add methods to the class



class Invoice {
    public $customer_id;
    public $subtotal;
    public $tax_rate;
    public $total;

    public function __construct($Customer_id, $Subtotal, $Tax_rate) {
        $this->customer_id = $Customer_id;
        $this->subtotal = $Subtotal;
        $this->tax_rate = $Tax_rate;
        $this->total = $Subtotal * (1 + $Tax_rate);
    }

//   add method to the class 
    public function calculate_total() {
       $total =  $this->subtotal * (1 + $this->tax_rate);
        return round($total, 2);
        
    }

    
}

// create an instance of the class (an object)
// syntax: $object = new Class_Name(value1, value2, ...);
$invoice = new Invoice(1, 100, 0.1);



// access the object's properties
// syntax: $object->property_name;
// echo $invoice->customer_id;
echo $invoice->calculate_total();

// working with object methods
// syntax: $object->method_name();
echo $invoice->calculate_total();


?>