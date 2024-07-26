<?php 
include "cafe_db.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="core-style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" >First Name <span>*</span></label>
                                    <input type="text" name ="first" class="form-control" id="first_name" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" >Last Name <span>*</span></label>
                                    <input type="text" name ="last" class="form-control" id="last_name" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="company" >Company Name</label>
                                    <input type="text" name ="company" class="form-control" id="company" value="">
                                </div>
                                <?php
                                $country = ['','United States', 'United Kingdom', 'Germany', 'France', 'India', 'Australia', 'Brazil', 'Canada']
                                ?>

                                <div class="col-12 mb-3">
                                    <label for="country" >Country <span>*</span></label>
                                    <select name ="country" class="w-100" id="country">
                                        <?php
                                        foreach ($country as $countries) {
                                            echo "<option value='$countries'>$countries</option>";
                                        }
                                        ?>
                                        <!-- <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option> -->
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address" >Address <span>*</span></label>
                                    <input type="text" name ="add_res" class="form-control mb-3" id="street_address" value="">
                                    <input type="text"  class="form-control" id="street_address2" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode" >Postcode <span>*</span></label>
                                    <input type="text" name ="post_cd" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city" >Town/City <span>*</span></label>
                                    <input type="text" name ="city" class="form-control" id="city" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="state" >Province <span>*</span></label>
                                    <input type="text" name ="state" class="form-control" id="state" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address" >Email Address <span>*</span></label>
                                    <input type="email" name ="Email" class="form-control" id="email_address" value="">
                                </div> 
                                <div class="col-12 mb-3">
                                    <label for="phone_number" >Phone No <span>*</span></label>
                                    <input type="number" name ="ph_num" class="form-control" id="phone_number" min="0" value="">
                                </div>
                               

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" name ="term" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" name ="acct" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" name ="sub" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label><br>
                                        <input type="submit" name ="add" value="order">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


<?php
@$id = $_GET['id'];
@$first_name = $_POST['first'];
@$last_name = $_POST['last'];
@$company_name = $_POST['company'];
@$country_name = $_POST['country'];
@$address = $_POST['add_res'];
@$postcode = $_POST['post_cd'];
@$city = $_POST['city'];
@$state = $_POST['state'];
@$Email = $_POST['Email'];
@$phone = $_POST['ph_num'];
@$add = $_POST['add'];



if($add) {
     $sql = "update orders set  first='$first_name', last='$last_name', company='$company_name', country='$country_name', add_res='$address', post_cd='$postcode', city='$city', state='$state', Email='$Email', ph_num='$phone' where id='$id'";
    // $sql = "insert into orders (first, last,company,country,add_res,post_cd,city,state,Email,ph_num) values ('$first_name','$last_name','$company_name','$country_name','$address','$postcode','$city','$state','$Email','$phone')";
     $result = mysqli_query($conn, $sql);

         if($result){
           echo "<script>alert('orders updated successfully')</script>";
           echo "<script>window.location.href='cart.php'</script>";
         }else{
           echo "<script>alert('Failed to update product')</script>";
         }
  }



?>
     

</body>
</html>