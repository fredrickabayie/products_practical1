<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
*Defining constant for the database connection
*/
define("DB_HOST", 'localhost');
define("DB_NAME", 'mobile_web');
define("DB_PORT", 3306);
define("DB_USER","admin");
define("DB_PWORD","Ashesi@2016?");

/**
*A class to establish a connection to the database
*
*This class contains
*/
class adb
{

  /**
   *Declaration of instance variables
   */
   var $link;
   var $result;


   /**
    *The constructor of the adb class
    */
   function adb ( )
   {
     $this->link = false;
     $this->result = false;
   }


  /**
   *A function to establish a connection to the database
   *
   *@return boolean Returning true if a connection is established and false otherwise
   */
  function connect ( )
  {
  
    if ( $this->link )
    {
      return true;
    }

    $this->link = mysql_connect ( DB_HOST, DB_USER, DB_PWORD );
    
    if ( !$this->link )
    {
        echo "Not connected";
        return false;
    }

    if ( !mysql_select_db ( DB_NAME ) )
    {
        echo "Error selecting DB";
      return false;
    }
    
    return true;
  }


  /**
   *A function to fetch data from the database
   *
   *@return Object Return the data found as objects
   */
  function fetch ( )
  {
    return mysql_fetch_assoc ( $this->result );
  }


  /**
   *A function to run a query
   *
   *@param String The query to execute
   *@return Boolean Returning true if the query was executed and false otherwise
   */
  function query ( $str_sql )
  {
      
    if ( !$this->connect ( ) )
    {
        return false;
    }
    
    $this->result = mysql_query ( $str_sql, $this->link );
    
    if ( !$this->result )
    {
        echo "Query failed";
        return false;
    }
    
    return true;
  }

}