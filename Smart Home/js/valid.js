<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}


function checkpassword(){
	if(document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value)
{
	alert("password Mismatch!");
		return false;
	}else{
	
	alert("Success!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("checkbox").checked){
	document.getElementById("submitBtn").disabled=false;
	}
	else{
		document.getElementById("submitBtn").disabled=true;
	}
}


</script>