if (sessionStorage.length == 0) {
	sessionStorage.setItem("pstored1", "0");
	sessionStorage.setItem("pstored2", "0");
	sessionStorage.setItem("pstored3", "0");
	sessionStorage.setItem("pstored4", "0");
	sessionStorage.setItem("pstored5", "0");
	sessionStorage.setItem("pstored6", "0");
	sessionStorage.setItem("pstored7", "0");
	sessionStorage.setItem("pstored8", "0");
}

function addtocart(stored) {
	var x = parseInt(sessionStorage.getItem(stored));
	sessionStorage.setItem(stored, ++x);
//	console.log("Value for ",stored," is :",x);
}