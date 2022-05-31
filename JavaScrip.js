
function FinalSeats(){
// grabing the input from the checkbox on 'seats.php'.
var seats = document.getElementsByClassName('formCheckbox');
// innitialising variables to store the selected seats and their final price.
var finalSeats = ' Seats selected: ';
var finalPrice = 0.00;
// increases if a checkbox is ticked.
var d = 0;

//searching through all ticked boxs from input in seats variable.
for (var i = 0; i < seats.length; i++){
if(seats[i].checked == true){
// adds the selected seats to 'finalSeats' and outputs the information.
finalSeats += seats[i].name + ", ";
document.getElementById('chosenSeats').style.visablity = 'flex';
document.getElementById('chosenSeats').innerHTML = finalSeats;
// parse the and add the final price together and then display in the HTML.
finalPrice = parseFloat(finalPrice) + parseFloat(seats[i].value);
document.getElementById('endPrice').style.visablity = 'flex';
document.getElementById('endPrice').innerHTML ="final price: £" + finalPrice + ".00";
//increase variable 'd' by 1 once complete.
d += 1;
}
//if the finalPrice variable is not at 0.00 then the submit button is enabled.
else if (finalPrice != 0.00){
document.getElementById('finallity').disabled = false;
}
//if the d variable is at 0 then the submit button is disabled.
if (d == 0){
document.getElementById('finallity').disabled = true;
	
	
}

}
}
