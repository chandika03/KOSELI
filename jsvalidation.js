function submitForm() {
  username = document.getElementById("username").value;
  email = document.getElementById("uemail").value;
  number = document.getElementById("unumber").value;
  address = document.getElementById("uaddress").value;
  password = document.getElementById("upassword").value;
  password2 = document.getElementById("upassword2").value;
  pattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/gm;
  emailpattern =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var le = email.lastIndexOf("@gmail.com");
  var ce = email.lastIndexOf("@yahoo.com");
  first = number.substring(0, 2);
  console.log(first);

  if (username === "") {
    document.getElementById("uspan").innerHTML = "Username is blank";
    return false;
  } else if (username.length <= 2) {
    document.getElementById("uspan").innerHTML =
      "Username should be more than 3 word";
    return false;
  } else {
    document.getElementById("uspan").innerHTML = "";
  }

  if (!email.match(emailpattern)) {
    document.getElementById("espan").innerHTML = "Email cannot be empty.";
    return false;
  } else if (le == -1 && ce == -1) {
    document.getElementById("espan").innerHTML = "must contain @gmail.com";
    return false;
  } else {
    document.getElementById("espan").innerHTML = "";
  }

  if (address === "") {
    document.getElementById("aspan").innerHTML = "Address is empty.";
    return false;
  } else if (address.length <= 2) {
    document.getElementById("aspan").innerHTML =
      "It should be more than 3 word";
    return false;
  } else if (isNaN(address) == false) {
    document.getElementById("aspan").innerHTML = "It should be text.";
    return false;
  } else {
    document.getElementById("aspan").innerHTML = "";
  }

  if (number == "") {
    document.getElementById("cspan").innerHTML = "It must not be empty";
    return false;
  } else if (first != "98" && first != "97") {
    document.getElementById("cspan").innerHTML = "Must start with 98or 97";
    return false;
  } else if (number.length == 9) {
    document.getElementById("cspan").innerHTML = "It should contain 10 digit.";
    return false;
  } else if (isNaN(number)) {
    document.getElementById("cspan").innerHTML = "It should be number.";
    return false;
  } else {
    document.getElementById("cspan").innerHTML = "";
  }

  if (!password.match(pattern)) {
    document.getElementById("pspan").innerHTML =
      "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
    return false;
  } else {
    document.getElementById("pspan").innerHTML = "";
  }

  if (password2 === "") {
    document.getElementById("rspan").innerHTML = "It must not be empty";
    return false;
  } else if (password2 !== password) {
    document.getElementById("rspan").innerHTML = "Password does not match.";
    return false;
  } else {
    document.getElementById("rspan").innerHTML = "";
  }
  return true;
}
