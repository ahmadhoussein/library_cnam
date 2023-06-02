<?php
  session_start();
  require ("./connect.php");
  require './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CNAM Library</title>

    <!-- import css -->
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/cart.css" />

    <!-- import JavaScript -->
    <script src="../js/main.js" defer></script>
    <script src="../js/for-cart.js" defer async></script>
     <!-- import css -->
 

<!-- import JavaScript -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="../../css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="../../css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../../css/custom.css">

  </head>
  <body>
    <header id="cart" class="level-2"></header>
    <nav id="navBar"></nav>
    <form id="searchLayer"></form>
    <aside id="menu"></aside>

    <main>
      <?php
        afficherCart();
      ?><main>
      <!-- Start Main Top -->
     
 
     <!-- Start Cart  -->
     <div class="cart-box-main">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="table-main table-responsive">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th>Images</th>
                                     <th>Product Name</th>
                                     <th>Price</th>
                                     <th>Quantity</th>
                                     <th>Total</th>
                                     <th>Remove</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td class="thumbnail-img">
                                         <a href="#">
                   
                 </a>
                                     </td>
                                     <td class="name-pr">
                                         <a href="#">
                   Lorem ipsum dolor sit amet
                 </a>
                                     </td>
                                     <td class="price-pr">
                                         <p>$ 80.0</p>
                                     </td>
                                     <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                     <td class="total-pr">
                                         <p>$ 80.0</p>
                                     </td>
                                     <td class="remove-pr">
                                         <a href="#">
                   <i class="fas fa-times"></i>
                 </a>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="thumbnail-img">
                                         <a href="#">
                 
                 </a>
                                     </td>
                                     <td class="name-pr">
                                         <a href="#">
                   Lorem ipsum dolor sit amet
                 </a>
                                     </td>
                                     <td class="price-pr">
                                         <p>$ 60.0</p>
                                     </td>
                                     <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                     <td class="total-pr">
                                         <p>$ 80.0</p>
                                     </td>
                                     <td class="remove-pr">
                                         <a href="#">
                   <i class="fas fa-times"></i>
                 </a>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="thumbnail-img">
                                         <a href="#">
                   <img class="img-fluid"  alt="" />
                 </a>
                                     </td>
                                     <td class="name-pr">
                                         <a href="#">
                   Lorem ipsum dolor sit amet
                 </a>
                                     </td>
                                     <td class="price-pr">
                                         <p>$ 30.0</p>
                                     </td>
                                     <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                     <td class="total-pr">
                                         <p>$ 80.0</p>
                                     </td>
                                     <td class="remove-pr">
                                         <a href="#">
                   <i class="fas fa-times"></i>
                 </a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
 
            
                 <div class="col-lg-6 col-sm-6">
                     <div class="update-box">
                         <input value="Update Cart" type="submit">
                     </div>
                 </div>
             </div>
 
             <div class="row my-5">
                 <div class="col-lg-8 col-sm-12"></div>
                 <div class="col-lg-4 col-sm-12">
                     <div class="order-box">
                         <h3>Order summary</h3>
                         <div class="d-flex">
                             <h4>Sub Total</h4>
                             <div class="ml-auto font-weight-bold"> $ 130 </div>
                         </div>
                         <div class="d-flex">
                             <h4>Discount</h4>
                             <div class="ml-auto font-weight-bold"> $ 40 </div>
                         </div>
                         <hr class="my-1">
                         <div class="d-flex">
                             <h4>Coupon Discount</h4>
                             <div class="ml-auto font-weight-bold"> $ 10 </div>
                         </div>
                         <div class="d-flex">
                             <h4>Tax</h4>
                             <div class="ml-auto font-weight-bold"> $ 2 </div>
                         </div>
                         <div class="d-flex">
                             <h4>Shipping Cost</h4>
                             <div class="ml-auto font-weight-bold"> Free </div>
                         </div>
                         <hr>
                         <div class="d-flex gr-total">
                             <h5>Grand Total</h5>
                             <div class="ml-auto h5"> $ 388 </div>
                         </div>
                         <hr> </div>
                 </div>
                 <div class="col-12 d-flex shopping-box"><a href="../other/checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
             </div>
 
         </div>
     </div>
     <!-- End Cart -->
   </main>

    </main>

    <footer></footer>

    <script>
      setTimeout( () => {
        // here username
        document.querySelector('#profile span').innerHTML = '{{User}}';
        
        // here the icon of the user
        // document.querySelector('#profile img').src; 
      }, 200);
    </script>
       <!-- ALL JS FILES -->
       <script src="../js/extras/jquery-3.2.1.min.js"></script>
    <script src="../js/extras/popper.min.js"></script>
    <script src="../js/extras/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/extras/jquery.superslides.min.js"></script>
    <script src="../js/extras/bootstrap-select.js"></script>
    <script src="../js/extras/inewsticker.js"></script>
   
    <script src="../js/extras/images-loded.min.js"></script>
    <script src="../js/extras/isotope.min.js"></script>
    <script src="../js/extras/owl.carousel.min.js"></script>
    <script src="../js/extras/baguetteBox.min.js"></script>
    <script src="../js/extras/form-validator.min.js"></script>
    <script src="../js/extras/contact-form-script.js"></script>
    <script src="../js/extras/custom.js"></script>
  </body>
</html>
