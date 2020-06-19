<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>

label{	
  padding:20px;
 font-size:18px;
}

.modal-header {
  padding: 1px 16px;
  background-color: #212531;
  color: white;
}

/* Modal Content/Box */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  left: 0;
  top: 0;
  background-color: #fefefe;
  margin: 150px 650px; /* 15% from the top and centered */
  border: 3px solid #888;
  width: 300px; /* Could be more or less, depending on screen size */
  height: 230px; 
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}




/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
    <!-- Trigger/Open The Modal
    
     -->
    
    <button id="myBtn">Open Modal</button>
    
    <!-- The Modal -->
  
    
      <!-- Modal content -->
      <div id="myModal" class="modal">
      	<div class="modal-header">
      		<span class="close">&times;</span>
      		<h2>Select Action</h2>
       	</div>
        
        <form action = "sample_model.php" method = "post" style = "margin: 30px; 120px;">
            <input type = "radio" name = "on" value = "On" checked/><label>Turn On</label><br /><br />
            <input type = "radio" name = "on" value = "Off" /><label>Turn Off</label>
            <br /><br />
            <input type = "submit" name = "actionSubmit" value = "Take Action" style="padding:8px; margin-left:70px; font-size:15px; background-color: #212531; color:white;"/> 
        </form> 
      </div>
      
      <?php
	  		if(isset($_POST['actionSubmit'])){
				
				if($_POST['on'] == "On"){
					
					?><script>alert('LED turn on')</script><?php
				}else if($_POST['on'] == "Off"){
					?><script>alert('LED turn off')</script><?php
				}
			}
	  ?>
    
    

</body>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>