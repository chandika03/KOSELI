//taking value to increment decrement input value
var newValue = 0;
var price = document.getElementById("price").innerText;

function priceTotal(value, div) {
  // var price = div.parentElement.parentElement.children[1].innerText;
  var total = value * price;
  console.log(div.parentElement);
  console.log(div.parentElement.parentElement);
  console.log(div.parentElement.parentElement.children[2]);
  console.log(div.parentElement.parentElement.children[2].children[0]);
  div.parentElement.parentElement.children[2].children[0].innerText = total;
}

var incrementButton = document.getElementsByClassName("plus-btn");
var decrementButton = document.getElementsByClassName("minus-btn");
console.log(incrementButton);
//plus button
for (var i = 0; i < incrementButton.length; i++) {
  var button = incrementButton[i];
  button.addEventListener("click", function (event) {
    var buttonClicked = event.target;
    var input = buttonClicked.parentElement.children[1];
    var inputValue = input.value;
    console.log(inputValue);
    var newValue = parseInt(inputValue) + 1;
    console.log(newValue);
    input.value = newValue;
    // calling price function

    // console.log(buttonClicked)
    priceTotal(newValue, buttonClicked);
  });
}

//minus button
for (var i = 0; i < decrementButton.length; i++) {
  var button = decrementButton[i];
  button.addEventListener("click", function (event) {
    var buttonClicked = event.target;
    var input = buttonClicked.parentElement.children[1];
    var inputValue = input.value;
    var newValue = parseInt(inputValue) - 1;
    if (newValue >= 0) {
      input.value = newValue;
    } else {
      input.value = 0;
    }

    //calling price function
    priceTotal(newValue, buttonClicked);
  });
}
