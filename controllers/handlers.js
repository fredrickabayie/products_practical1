/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Function to send an ajax request
 * 
 * @param {type} u The url to be parsed
 * @returns {Object} Returning the results for the request sent
 */
function sendRequest ( u )
{
    var prod = $.ajax ( { url:u, async: false } );
    var result = $.parseJSON ( prod.responseText );
    return result;
}


/**
 * Function to handle the click of the submit button
 * 
 * @returns {undefined}
 */
$ ( function ( )
{
   $ ( "#submit_btn").click ( function ( )
   {
       var prod_name = encodeURI ( document.getElementById ( "prod_name" ).value );
       var prod_price = encodeURI ( document.getElementById ( "prod_price" ).value );
       var prod_description = encodeURI ( document.getElementById ( "prod_description" ).value );
       var prod_barcode = encodeURI ( document.getElementById ( "prod_barcode" ).value );
       
       var url = "../controllers/product.php?cmd=1&prod_name="+prod_name+
                     "&prod_price="+prod_price+"&prod_description="+prod_description+
                     "&prod_barcode="+prod_barcode;
             
       var prod = sendRequest ( url );
       
       if ( prod.result === 1 )
       {
           $ ( "#message" ).text ( prod.status );
       }
       else
       {
           $ ( "#message" ).text ( prod.status );
       }   
       
       alert ( "Submit button clicked" );
   }); 
});


$ ( document ).ready ( function ( ) 
{
//   alert ("Oh yh"); 
});
