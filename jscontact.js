function Submit() {
  firstname = document.getElementById("name1").value;
  lastname = document.getElementById("lastname2").value;
  email = document.getElementById("umail3").value;
  message = document.getElementById("msg").value;
  pattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/gm;
  emailpattern =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var le = email.lastIndexOf("@gmail.com");
  var ce = email.lastIndexOf("@yahoo.com");
  console.log(firstname);

  if (firstname === "") {
    document.getElementById("uspan").innerHTML = "Username is blank";
    return false;
  } else if (firstname.length <= 2) {
    document.getElementById("uspan").innerHTML =
      "Username should be more than 3 word";
    return false;
  } else {
    document.getElementById("uspan").innerHTML = "";
  }

  if (lastname === "") {
    document.getElementById("lspan").innerHTML = "Lastname is blank";
    return false;
  } else if (lastname.length <= 2) {
    document.getElementById("lspan").innerHTML =
      "Lastname should be more than 3 word";
    return false;
  } else {
    document.getElementById("lspan").innerHTML = "";
  }
  if (email === "") {
    document.getElementById("espan").innerHTML = "Email cannot be empty.";
    return false;
  } else if (!email.match(emailpattern)) {
    document.getElementById("espan").innerHTML = "Invalid Email";
    return false;
  } else if (le == -1 && ce == -1) {
    document.getElementById("espan").innerHTML = "must contain @gmail.com";
    return false;
  } else {
    document.getElementById("espan").innerHTML = "";
  }

  if (message === "") {
    document.getElementById("mspan").innerHTML = "Message is blank";
    return false;
  } else {
    document.getElementById("mspan").innerHTML = "";
  }

  return true;
}
