var database = [
{
	username : "andy",
	password : "secreat"
}];

var newsfeed = [{

	username:"paresh",
	timeline:"javasript is too cool"

},
{
	username:"andy",
	timeline:"Lets have chill tonight"

}];

var userpromt = prompt("put your username here");
var passprompt = prompt("put your password here");


function authentication(user,password){
	if(user == database[0].username && password == database[0].password){
		console.log(newsfeed);
	}else{
		alert("Put your credentials properly");
	}
};

authentication(userpromt,passprompt);

var todos = [
"washteth",
"breakfast",
"havebath",
"Lunch"
];


	for (var i =0 ; i < todos.length;i++){
		console.log(todos[i] + "!");
	}
