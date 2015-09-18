<!DOCTYPE HTML>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" manifest="mwc.appcache">
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sale=1">
        <link rel="stylesheet" href="../packages/jquery.mobile-1.4.5.min.css">
        <script src="../packages/jquery-2.1.4.min.js"></script>
        <script src="../packages/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" href="../packages/custom.css"/>
        <link rel="stylesheet" href="../packages/custom.min.css"/>
        <script type="text/javascript" src="../controllers/handlers.js"></script>
    </head>
    
    <body>
        
        <div data-role="page" data-theme="a" id="pageone">
            <div data-role="header" data-position="fixed">
                <h1>Product Guru</h1>
                <a href="#dialog_page" style="width: 70px" data-icon="plus" data-iconpos="notext" data-rel="dialog" data-transition="pop"></a>
                <input type="button" value="About"/>
                <div data-role="navbar">
                    <ul> 
                        <!--<li><a href="#anylink" class="ui-btn-active ui-icon-home ui-state-persist">Home</a></li>--> 
                        <li><a href="#anylink" class="ui-btn-active ui-state-persist">Page Two</a></li>
                        <li><a href="#anylink" class="ui-btn-active ui-state-persist">Search</a></li>
                    </ul>
                </div>
            </div>
            
            <div role="main" class="ui-content">
                                
                <!--The list displaying the list of products in the database-->
                <ul data-role="listview" id="prod_display" data-inset="true">
                    
                </ul>
                
            </div>
            
        <div data-role="footer" data-position="fixed" style="">
            <h1>Designed by Okokroko</h1>
        </div>
            
        </div>  
        
        <!--The modal for adding a new product-->
                <div data-role="dialog" id="dialog_page">
                    
                    <div data-role="header">
                        <h1>New Product</h1>
                    </div>
                    
                    <div data-role="content">
                        
                        <div data-role="fieldcontain" class="ui-field-contain" >
                          <label for="prod_name">Name:</label>
                          <input type="text" name="prod_name" id="prod_name">
                          <label for="prod_price">Price:</label>
                          <input type="text" name="prod_price" id="prod_price">
                          <label for="prod_description">Description:</label>
                          <input type="text" name="prod_description" id="prod_description">
                          <label for="prod_barcode">Barcode:</label>
                          <input type="text" name="prod_barcode" id="prod_barcode">      
                        </div>
                        
                    </div>
                    
                    <div data-role="footer">
                        <input type="button" id="submit_btn" value="Save">
                    </div>
                    
                </div>
        
        
        
        
    </body>
</html>
