
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'koseli');

	//if (isset($_POST['submit'])) {
		$firstname = $_POST['fname'];
        $lastname = $_POST['lname'];

        $email = $_POST['email'];
        $msng= $_POST['message'];

        
			if(mysqli_query($db, "INSERT INTO contact_page (firstname, lastname, email, message) VALUES 
			('$firstname','$lastname', '$email','$msng')")) {
	// 	$sqlcheck= "SELECT * from student where email='$email' OR phonenumber='$phonenumber'";
	// 	$checkresult= $db->query($sqlcheck);
	// if(!$checkresult->num_rows==0){
	// die("Email/number already exist.");
	// }
		// echo " Data inserted successfully.";	

		$msg = "Saved successfully.";
        header('location:index.php?errmsg='.$msg);
	} else {
		$msg = "Failed to save contact.";
        header('location:contact.php?errmsg='.$msg);
	}
	//}
 ?>