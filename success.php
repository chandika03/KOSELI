<?php
        session_start();
        include('connect.php');
        $cart = $_SESSION['cart'];
        foreach($cart as $value){
        //        echo  $item = $value['Item_Name'];
        //       echo  $price =$value['Price'];
        //        echo $quantity = $value['Quantity'];
               // Prepare an insert statement
                $query2 = "INSERT INTO customer_order(item_name, price, quantity) VALUES (?, ?, ?)";

                if($stmt = $conn->prepare($query2)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("sss", $item, $price, $quantity);
                
                // Set parameters
                $item = $value['Item_Name'];
                $price = $value['Price'];
                $quantity = $value['Quantity'];
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                        // echo "Records inserted successfully.";
                        unset($_SESSION['cart']);
                } else{
                        echo "ERROR: Could not execute query: $query2. " . $conn->error;
                }
                        }
                }


?>

<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Successful</title>
        
        </head>
        <body>
                <style>
                        body {
                                font-family: Arial, sans-serif;
                                background-color: #f0f0f0;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 100vh;
                                margin: 0;
                        }

                        .success-container {
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        text-align: center;
                        }

                        h1 {
                        color: #4CAF50;
                        margin-bottom: 20px;
                        }
                </style>
                <?php
                $transaction_id = $_GET['transaction_id'];
                $total_amount = $_GET['total_amount'];
                $transaction_date = $_GET['transaction_date'];
                $payment_method = $_GET['payment_method'];

                ?>
                        <div class="success-container">
                                <h1>Payment Successful!</h1>
                                <p>Transaction ID : <b><?php echo $transaction_id; ?></b></p></br>
                                <p>Amount: <b><?php echo $total_amount ?> </b></p>  </br>
                                <a href="index.php">Okay</a>
                        </div>
        </body>
</html> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />

    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh;
      }
      .container {
        width: 600px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border: 1px solid #cccccc;
      }
      .logo {
        text-align: center;
      }
      .message {
        font-size: 24px;
        color: green;
        text-align: center;
        display: flex;
        justify-content: center;
      }
      .details {
        margin-top: 20px;
        font-size: 18px;
      }
      .detail {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
      }
      .label {
        font-weight: bold;
      }
      .value {
        color: #666666;
      }
      .btn {
        display: block;
        text-align: center;
        background-color: transparent;
      }
      button {
        border: none;
        outline: none;
        cursor: pointer;
      }
      .btn a {
        text-decoration: none;
        border: none;
        padding: 10px;
        margin: 10px;
        font-size: 20px;
        background-color: green;
        color: white;
        border-radius: 10px;
        outline: none;
      }
    </style>
  </head>
  <body>
  <?php
                $transaction_id = $_GET['transaction_id'];
                $total_amount = $_GET['total_amount'];
                // $transaction_date = $_GET['transaction_date'];
                // $payment_method = $_GET['payment_method'];

                ?>
    <div class="container">
      <div class="logo">
        <img src="images/success.png" alt="Logo" />
      </div>
      <div class="message">Your transaction has been completed.</div>
      <div class="details">
        <div class="detail">
          <div class="label">Transaction ID:</div>
          <div class="value"><?php echo $_GET['transaction_id']?></div>
        </div>
        <div class="detail">
          <div class="label">Amount:</div>
          <div class="value"><?php echo $value['Price']; ?></div>
        </div>
        <div class="detail">
          <div class="label">Product:</div>
          <div class="value"><?php echo $value['Item_Name'] ?></div>
        </div>
        <div class="detail">
          <div class="label">Quantity:</div>
          <div class="value"><?php echo $value['Quantity']; ?></div>
        </div>

        <div class="btn">
          <button><a href="index.php">Return to home</a></button>
        </div>
      </div>
    </div>
    <script src="" async defer></script>
  </body>
</html>
