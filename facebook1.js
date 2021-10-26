var database = [{
	username:"raunak",
	password:"shakira123"
},
{
	username:"pratik",
	password:"pratik123"
},
{
	username:"sally",
	password:"sally123"
}
];

var newsfeed = [{
	username:"raunak",
	timeline:"love to travel"
},
{
	username:"pratik",
	timeline:"pratik is a good boy"
},
{
	username:"sally",
	timeline:"sally is a cool boy"
}];


function authentication(username,password) {
	for (var i = 0; i < database.length; i++) {
	 if (username === database[i].username && password === database[i].password) {
	 	console.log(newsfeed);
	 }else{
	 	alert("wrong credentials");
	 }
	}
};


	 var user = prompt("Please put your username");
	 var pass = prompt("Please put your password");

	 authentication(user,pass);