<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cart</title>
  <script src="buyproduct.js"></script>
  <style>
    span {
      color: red;
      font-style: italic;
    }
    
  </style>
</head>

<body>
  <?php
  include('header.php')
  ?>

<?php
// session_start();
include('connect.php');
if(isset($_POST['submit'])){
	$cash="Pay with Khalti";
	$name=$_POST['fullname'];
	$number=$_POST['phone_no'];
	$email=$_POST['email'];
	$address=$_POST['address'];
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST['submit'])){
	$query1 = "INSERT into customer(Fullname,Email,Phone,address,Delivery) values('$name','$email','$number','$address','$cash')";
	if(mysqli_query($conn,$query1)){
		$Order_Id=mysqli_insert_id($conn);
		$_SESSION['order'] = $Order_Id;
		$query2="INSERT INTO customer_order(`
    order_id`,`item_name`,`price`,`quantity`) VALUES (?,?,?,?)";
		$stmt=mysqli_prepare($conn, $query2) or die("Failed to prepare");
		if($stmt){
			mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity) or die("Failed to bind param");
			foreach($_SESSION['cart'] as $key => $values)
			{
				$Item_Name = $values['Item_Name'];
				$Price = $values['Price'];
				$Quantity = $values['Quantity'];
				mysqli_stmt_execute($stmt);
			}
			// unset($_SESSION['cart']);
			echo "<script>
		window.location.href='buy.php';
		</script>";
		}
	}
	else{
		echo "<script>
		alert('SQL Error');
		window.location.href='cart.php';
		</script>";
	}
}
}
// header("location:buy.php");

?>




  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <br>
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $sr = $key + 1;
                echo "
                <tr>
                  <td>$sr</td>
                  <td>$value[Item_Name]</td>
                  <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                  <td>
                    <form action='manage_cart.php' method='POST'> 
                      <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='100'>
                      <input type='hidden' name ='Item_Name' value='$value[Item_Name]'>
                    </form>
                  </td>
                  <td class='itotal'></td>
                  <td>
                    <form action='manage_cart.php' method='POST'> 
                      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
                  </td>
                </tr>                                
                ";
              }
            }            
            ?>
            <tr>
            <a href="products.php"> <input type="submit" value="Add more Product" style="background-color:#76453B;"></a>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-3">
        <!-- <form method="post" onsubmit="return BuyProductValidate()"> -->
        <form method="post" action="validate.php">
          <div class="border bg-light rounded p-4">
            <h4>Grand Total: </h4>
            <input type="text" name="total" id="gtotal" readonly>
            <h5 class="text-right"></h5>
            <br>
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="fullname" id="fname" class="form-control" onkeyup="return BuyProductValidate() " required><span id="fspan"></span>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" name="phone_no" id="pnumber" class="form-control" onkeyup="return BuyProductValidate()"required><span id="pspan"></span>
            </div>
            <div class="form-group">
              <label>Shipping Address</label>
              <input type="text" name="address" id="addre" class="form-control" onkeyup="return BuyProductValidate()" required><span id="aspan"></span>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" id="mail" class="form-control" onkeyup="return BuyProductValidate()" required><span id="espan"></span>
            </div>
            <?php
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) { ?>
                <table>

                  <tr>
                    <td> <input type="hidden" name="item" value=" <?php echo $value['Item_Name'] ?>" multiple></td>
                    <td> <input type="hidden" name="quantity" value="<?php echo $_SESSION['cart'][$key]['Quantity'] ?>" multiple></td>
                  </tr>
                </table>
            <?php
              }
            }
             ?>
            <!-- <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="quality">
             </div> -->
             <!-- <input type="checkbox" name="cash" value="Cash On Delivery">
             <label> Cash on delievery</label> -->
            <br>
            <input type="submit" id="payment-buttonn" name="cash" value="Pay with Khalti">
            <br>
            <!-- <input type="submit" name="submit" style="visibility:hidden;" id="submitBtn" onsubmit="return BuyProductValidate()"> -->
        </form>
      </div>
    </div>
  </div>
  </div>
  <br>


  <script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');

    function subTotal() {
      gt = 0;
      for (i = 0; i < iprice.length; i++) {
        Number(itotal[i].innerText = (iprice[i].value) * (iquantity[i].value));
        gt = gt + (iprice[i].value) * (iquantity[i].value);
      }
      document.getElementById('gtotal').value = gt
    }
    subTotal();
  </script>

<html>
<head>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>
<body>
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_453a4fb5d4b340939c51b61350b2162c",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                    var submitBtn = document.getElementById('submitBtn');
                    alert("thank you");
                    submitBtn.click();

                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    ...
</body>
</html>



</body>

</html>