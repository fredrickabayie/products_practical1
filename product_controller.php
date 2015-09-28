<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ( isset ( $_REQUEST [ 'cmd' ] ) )
{
    $cmd = $_REQUEST [ 'cmd' ];
    
    switch ( $cmd )
    {
        case 1:
            add_product ( );
            break;
        
        case 2:
            get_products ( );
            break;
        
        default :
            echo '{"result":0, "message":"Please send a valid command"}';
            break;
    }
    
}
    
    
    /**
     * Function to request the data passed by the URL and add product to
     * the database
     */
    function add_product ( )
    {
        if ( isset ( $_REQUEST [ 'prod_name' ] ) && isset ( $_REQUEST [ 'prod_price' ] ) 
        && isset ( $_REQUEST [ 'prod_description' ] ) && isset ( $_REQUEST [ 'prod_barcode' ] ) )
        {
            include_once 'product.php';
            
            $prod_name = $_REQUEST [ 'prod_name' ];
            $prod_price = $_REQUEST [ 'prod_price' ];
            $prod_description = $_REQUEST [ 'prod_description' ];
            $prod_barcode = $_REQUEST [ 'prod_barcode' ];
            
            $prod = new product ( );
            
            if ( $prod->add_product ( $prod_name, $prod_price, $prod_description, $prod_barcode ) )
            {
                echo ' { "result":1, "status": "Product Added" } ';
            }
            else
            {
                echo ' { "result":0, "status": "Failed to Add Product" } ';
            }
            
        }
    }
    
    /**
     * Function to fetch data from the URL and display data from
     * the database
     */
    function get_products ( )
    {
        include_once 'product.php';
        $prod = new product ( );
        
        if ( $prod->get_products ( ) )
        {
            $row = $prod->fetch ( );
            echo ' { "result":1, "products": [';
            while ( $row )
            {
                echo '{"prod_id": "'.$row["prod_id"].'", "prod_name": "'.$row["prod_name"].'", "prod_price": "'.$row["prod_price"].'",'
                        . '"prod_description": "'.$row["prod_description"].'", "prod_barcode": "'.$row["prod_barcode"].'"}';
                
                if ( $row = $prod->fetch ( ) )
                {
                    echo ',';
                }
                
            }
            echo ']}';
        }
        else
        {
            echo ' { "result":0, "message": "Failed to fetch data from database"} ';
        }
        
    }
