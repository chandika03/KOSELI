
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'koseli');

    
    
	if (isset($_POST['submit'])) {
		$username = $_POST['uname'];
        $email = $_POST['email'];
        $address= $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		$result = mysqli_query($db, "select * from student where email='$email'") or die("Failed to get data");	
		if(mysqli_num_rows($result)){
			echo "<script>
			alert('Email is already used');
			window.location.href='registration.php';
			</script>";
		}
	mysqli_query($db, "INSERT INTO student (name, email, address, phonenumber, password) VALUES 
		('$username', '$email','$address','$phonenumber','$password')"); 
	// 	$sqlcheck= "SELECT * from student where email='$email' OR phonenumber='$phonenumber'";
	// 	$checkresult= $db->query($sqlcheck);
	// if(!$checkresult->num_rows==0){
	// die("Email/number already exist.");
	// }
		echo " Data inserted successfully.";	
		echo "<script>
			window.location.href='index.php';
			</script>";
        //header('location:home.php');
	}
 ?>