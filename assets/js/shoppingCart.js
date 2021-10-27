$('.minus-btn').on('click', function(e) {
	e.preventDefault();
	var $this = $(this);
	var $input = $this.closest('div').find('input');
	var value = parseInt($input.val());

	if (value > 1) {
		value = value - 1;
	} else {
		value = 0;
	}

$input.val(value);

});

$('.plus-btn').on('click', function(e) {
	e.preventDefault();
	var $this = $(this);
	var $input = $this.closest('div').find('input');
	var value = parseInt($input.val());

	if (value < 100) {
	value = value + 1;
	} else {
		value =100;
	}

	$input.val(value);
});

$('.like-btn').on('click', function() {
$(this).toggleClass('is-active');
});

document.getElementById("item1").style.display = "none";
document.getElementById("item2").style.display = "none";
document.getElementById("item3").style.display = "none";
document.getElementById("item4").style.display = "none";
document.getElementById("item5").style.display = "none";
document.getElementById("item6").style.display = "none";
document.getElementById("item7").style.display = "none";
document.getElementById("item8").style.display = "none";

function hideMe(elementId) {
	var item = "item" + elementId;
	var pstored = "pstored" + elementId;
	document.getElementById(item).style.display = "none";
	sessionStorage.setItem(pstored, "0");
}

function clearAll() {
	for(i=1;i<9;i++){
		hideMe(i);
	}
}

function addItem(i) {
	var z = parseInt(i);
	var j = z+1;
	var x = 'item' + j;
	console.log(x);
	document.getElementById(x).style.display = "flex";
//	console.log("Value success for item ",i," the value stored is ",sessionStorage.getItem(arr1[i]));	
}

const arr1 = ['pstored1','pstored2','pstored3','pstored4','pstored5','pstored6','pstored7','pstored8'];

for (i in arr1) {
	if (sessionStorage.getItem(arr1[i]) != 0){
		var j = parseInt(i)+1;
		var x = 'item' + j;
		console.log(x);
		document.getElementById(x).style.display = "flex";
		console.log("Value success for item ",i," the value stored is ",sessionStorage.getItem(arr1[i]));
	}
}

//Audio script
function clearPlay() {
	var audio = document.getElementById("clearPlay");
	audio.play();
}
function buyPlay() {
	var audio = document.getElementById("buyPlay");
	audio.play();
}