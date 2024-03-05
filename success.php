<!DOCTYPE html>
<html lang="en">
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

                ?>
                        <div class="success-container">
                                <h1>Payment Successful!</h1>
                                <p>Transaction ID : <b><?php echo $transaction_id; ?></b></p></br>
                                <p>Amount: <b><?php echo $total_amount ?> </b></p>  </br>
                                <a href="index.php">Okay</a>
                        </div>
        </body>
</html>