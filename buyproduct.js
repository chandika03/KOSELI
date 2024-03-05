function BuyProductValidate() {
  username = document.getElementById("fname").value;
  email = document.getElementById("mail").value;
  number = document.getElementById("pnumber").value;
  address = document.getElementById("addre").value;
  gtotal = document.getElementById("gtotal").value;
  pattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/gm;
  emailpattern =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var le = email.lastIndexOf("@gmail.com");
  var ce = email.lastIndexOf("@yahoo.com");
  first = number.substring(0, 2);
  console.log(first);

  if (username === "") {
    document.getElementById("fspan").innerHTML = "Username is blank";
    return false;
  } else if (username.length <= 2) {
    document.getElementById("fspan").innerHTML =
      "Username should be more than 3 word";
    return false;
  } else {
    document.getElementById("fspan").innerHTML = "";
  }

  if (number == "") {
    document.getElementById("pspan").innerHTML = "It must not be empty";
    return false;
  } else if (first != "98" && first != "97") {
    document.getElementById("pspan").innerHTML = "Must start with 98 or 97";
    return false;
  } else if (number.length == 9) {
    document.getElementById("pspan").innerHTML = "It should contain 10 digit.";
    return false;
  } else if (isNaN(number)) {
    document.getElementById("pspan").innerHTML = "It should be number.";
    return false;
  } else {
    document.getElementById("pspan").innerHTML = "";
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

  if (!email.match(emailpattern)) {
    document.getElementById("espan").innerHTML = "Email cannot be empty.";
    return false;
  } else if (le == -1 && ce == -1) {
    document.getElementById("espan").innerHTML = "must contain @gmail.com";
    return false;
  } else {
    document.getElementById("espan").innerHTML = "";
  }
  if (gtotal == 0) {
    return false;
  }

  return true;
}
