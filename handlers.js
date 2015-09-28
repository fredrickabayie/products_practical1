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
//    var prod, result;

    var prod = $.ajax ( { url:u, async: false } );
    var result = $.parseJSON ( prod.responseText );
    return result;
}


/**
 * Function to handle the click of the submit button
 *  
 * @returns {undefined}
 */
$(function()
  {
   $ ( "#submit_btn" ).click ( function ( )
   {
       var prod, prod_name, prod_price, prod_description, prod_barcode, url;

       prod_name = encodeURI ( document.getElementById ( "prod_name" ).value );
       prod_price = encodeURI ( document.getElementById ( "prod_price" ).value );
       prod_description = encodeURI ( document.getElementById ( "prod_description" ).value );
       prod_barcode = encodeURI ( document.getElementById ( "prod_barcode" ).value );
       
//       url = "http://cs.ashesi.edu.gh/~csashesi/class2016/fredrick-abayie/mobileweb/products_practical1/product_controller.php?cmd=1&prod_name="+prod_name+
//                     "&prod_price="+prod_price+"&prod_description="+prod_description+
//                     "&prod_barcode="+prod_barcode;

             url = "product_controller.php?cmd=1&prod_name="+prod_name+
                     "&prod_price="+prod_price+"&prod_description="+prod_description+
                     "&prod_barcode="+prod_barcode;
       prod = sendRequest ( url );
       
       if ( prod.result === 1 )
       {
           $ ( "#message" ).text ( prod.status );
       }
       else
       {
           $ ( "#message" ).text ( prod.status );
       }   
       
//       alert ( "Submit button clicked" );
   });
});



$ ( document ).ready ( function ( )
{
    var url, prod, div = "", timer, index;

//    url = "http://cs.ashesi.edu.gh/~csashesi/class2016/fredrick-abayie/mobileweb/products_practical1/product_controller.php?cmd=2";
    url = "product_controller.php?cmd=2";
    prod = sendRequest ( url );
    
    if ( prod.result === 1 )
    {
        div = "";
        timer;
        
        for ( index in prod.products )
        {
            div += "<li data-role='list-divider'>Friday, October 8, 2010 <span class='ui-li-count'>ID "+prod.products [index].prod_id+"</span></li>";
            div += "<li><a href='index.html'>";
            div += "<h2>"+prod.products [index].prod_name+"</h2>";
            div += "<p><strong>BARCODE "+prod.products [index].prod_barcode+"</strong></p>";
            div += "<p>DESCRIPTION "+prod.products [index].prod_description+"</p>";
            div += "<p class='ui-li-aside'><strong>GHC "+prod.products [index].prod_price+"</strong></p>";
            div += "</a></li>";
        }
        $ ( "#prod_display" ).html ( div );
    }
});
