<!--/* @var $_SERVER type */
//$msie = strpos ( $_SERVER ["HTTP_USER_AGENT"], 'MSIE' ) > 0;
//IF ( !$msie ) {
  header ( "Content-Type: application/xhtml+xml" );
  echo '<?xml version="1.0" encoding="utf-8"?>';
//} else {
//  header ( "Content-Type: text/html; charset=UTF-8");
//}-->

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Products</title>
        <!--<meta name="viewport" content="width=device-width, initial-sale=1">-->
        <link rel="stylesheet" href="packages/jquery.mobile-1.4.5.min.css">
        <script type="text/javascript" src="packages/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="packages/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" href="packages/custom.css"/>
        <!--<link rel="stylesheet" href="../packages/custom.min.css"/>-->
        <script type="text/javascript" src="controllers/handlers.js"></script>
    </head>

    <body>

        <div data-role="page" data-theme="b" id="pageone">
            <div data-role="header" data-position="fixed">
                <a href="#pageone" data-role="button" data-transition="slidefade" data-icon="home">Home</a>
                <h1>Product Guru</h1>
                <a href="#pagethree" data-role="button" data-transition="pop" data-icon="back">Back</a>
                <div data-role="navbar">
                    <ul>
                        <li><a accesskey="1" href="#dialog_page" data-role="button" data-transition="turn" data-icon="plus" class="ui-btn-active ui-state-persist">Add Product</a></li>
                        <li><a accesskey="2" href="#pagetwo" data-transition="flip" data-icon="bullets" class="ui-btn">View Products</a></li>
                        <li><a accesskey="3" href="#pagethree" data-transition="flow" data-icon="gear" class="ui-btn">About</a></li>
                    </ul>
                </div>
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

                 <div data-role="footer">
                        <input type="button" data-icon="cloud " id="submit_btn" value="Save">
                    </div>

              </div>

        <div data-role="footer" data-position="fixed" style="">
            <h1>Designed by Okokroko</h1>
        </div>

        </div>

        <!--The modal for adding a new product-->
                <div data-role="page" data-theme="c" id="pagetwo">

                    <div data-role="header" data-position="fixed">
                        <a href="#pageone" data-role="button" data-transition="slidefade" data-icon="home">Home</a>
                <h1>Product Guru</h1>
                <a href="#pagethree" data-role="button" data-transition="pop" data-icon="back">Back</a>
                <div data-role="navbar">
                    <ul>
                        <li><a accesskey="1" href="#pageone" data-role="button" data-transition="turn" data-icon="plus" class="ui-btn">Add Product</a></li>
                        <li><a accesskey="2" href="#pagetwo" data-transition="flip" data-icon="bullets" class="ui-btn-active ui-state-persist">View Products</a></li>
                        <li><a accesskey="3" href="#pagethree" data-transition="flow" data-icon="gear" class="ui-btn">About</a></li>
                    </ul>
                </div>
            </div>

                     <div role="main" class="ui-content">
                    <!--The list displaying the list of products in the database-->
                    <ul data-role="listview" id="prod_display" data-inset="true">

                    </ul>
                 </div>

                    <div data-role="footer" data-position="fixed">
            <h1>Designed by Okokroko</h1>
        </div>

                </div>

            <div data-role="page" id="pagethree" style="background-color: green">

                <div data-role="header" data-position="fixed" style="background-color: violet">
                    <a href="#pageone" data-role="button" data-transition="slidefade" style="background-color: sandybrown" data-icon="home">Home</a>
                    <h1 style="font-size: 23px">Product Guru</h1>
                    <a href="#pagetwo" data-role="button" data-transition="pop" style="background-color: sandybrown" data-icon="back">Back</a>
                <div data-role="navbar" style="background-color: indigo">
                    <ul>
                        <li><a accesskey="1" style="background-color: red; font-size: 19px" href="#pageone" data-role="button" data-transition="turn" data-icon="plus" class="ui-btn">Add Product</a></li>
                        <li><a accesskey="2" style="background-color: red; font-size: 19px" href="#pagetwo" data-transition="flip" data-icon="bullets" class="ui-btn">View Products</a></li>
                        <li><a accesskey="3" style="background-color: purple; font-size: 19px" href="#pagethree" data-transition="flow" data-icon="gear" class="ui-btn-active ui-state-persist">About</a></li>
                    </ul>
                </div>
            </div>

                     <div data-role="content">
                         <div data-role="collapsible">
                             <h1 style="font-style: italic">About Software</h1>
                             <p>This is a software to help SAFE personnel enter products into the system.</p>
                         </div>
                    </div>

                    <div data-role="footer" data-position="fixed" style="">
            <h1>Designed by Okokroko</h1>
        </div>


                </div>


    </body>
</html>
