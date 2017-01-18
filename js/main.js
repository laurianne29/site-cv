window.onload = function(){

	var tr = document.getElementsByTagName('tr');

	for(i =  0; i <= tr.length; i++){

		if(i%2){

			console.log(tr[i].style.backgroundColor="#A599B4");
			console.log(tr[i].style.color="white");
		}else{

			console.log(tr[i].style.backgroundColor="#4D3968");
			console.log(tr[i].style.color="white");

		}
	}
}