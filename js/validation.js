
var myInput = document.getElementById("pswd");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

var color = "red";


        myInput.style.backgroundColor = "red"; 

var count = 0;

myInput.onkeyup = function() {


  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
  	count++;
  } 
  
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
  count++;
  } 
  
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
  	count++;
  } 

  if(myInput.value.length >= 8) {
  	count++;
  } 

}




function matchpass(str1,str2)
{

}
