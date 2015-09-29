<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *Including packages of other files to this document
 */
include_once "adb.php";


/**
 * 
 */
class product extends adb
{

  /**
   *The constructor of the class
   */
//  function __construct ( )
//  {
//    $this->connect ( );
//  }


  /**
   *Function to add a new product to the database
   *
   *@param String $prod_name The name of the product to be created
   *@param int $prod_price The price of the product to be added
   *@param String $prod_description The description of the product to be added
   *@param String $prod_barcode The barcode of the product
   *@return Boolean Returns true if product is added and false otherwise
   */
  function add_product ( $prod_name, $prod_price, $prod_description, $prod_barcode )
  {     
      $add_query = "INSERT INTO `miniproject`"
                            . " (`prod_id`, `prod_name`, `prod_price`, `prod_description`, `prod_barcode`) "
                            . "VALUES (NULL, '$prod_name', '$prod_price', '$prod_description', '$prod_barcode')";

     return  $this->query ( $add_query );
  }
  
  
  /**
   * Function to get all products from the database
   * 
   * @return Object Returns an object when data is obtained
   */
  function get_products ( )
  {
//      $get_query = "SELECT * FROM `mobileweb_miniproject`";
      $get_query = "SELECT * FROM `miniproject`";
      
      return $this->query ( $get_query );
  }

}
