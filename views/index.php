<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script type="text/javascript" src="../controllers/handlers.js"></script>
    </head>
    
    <body>
        
        <div data-role="page" id="pageone">
            <div data-role="header">
                <h1>Product Guru</h1>
            </div>
            
            <div role="main" class="ui-content">
                
                <p>Oh! YEAH! SHOP</p>
                <div>
                  <!--<form method="post" action="demoform.asp">-->
                      <div data-role="fieldcontain" class="ui-field-contain" style="">
                          <label for="prod_name">Name:</label>
                          <input type="text" name="prod_name" id="prod_name">
                          <label for="prod_price">Price:</label>
                          <input type="text" name="prod_price" id="prod_price">
                          <label for="prod_description">Description:</label>
                          <input type="text" name="prod_description" id="prod_description">
                          <label for="prod_barcode">Barcode:</label>
                          <input type="text" name="prod_barcode" id="prod_barcode">
                          <input type="button" id="submit_btn" value="Save">
                     </div>
                  <!--</form>-->
                </div>
                
            </div>
            
        <div data-role="footer" style="">
            <h1>Aya Yaaaaya</h1>
            <p id="message"></p>
        </div>
            
        </div>  
        
        
        
    </body>
</html>
