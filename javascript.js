//var button = document.getElementsByTagName("button")[0];
//button.addEventListener("click",function(){
//console.log("Click!!!!!!!");
//alert("working");
//});

var buttonn = document.getElementById("enter");
var input = document.getElementById("input");
var ul = document.querySelector("ul");
function inputlength(){
	return input.value.length;
}
buttonn.addEventListener("click",function(){
	console.log(input.value);
	if (input.value != 0) {
	
	var li = document.createElement("li");
	li.appendChild(document.createTextNode(input.value));
	ul.appendChild(li);
}
	
inputlength();
});