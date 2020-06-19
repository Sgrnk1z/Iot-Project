<!DOCTYPE html>
<html>
    <head>
        <title>Javascript: get selected li from ul</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<style>
li:focus {
  background: lightgreen;
}
</style>
</head>

<body>
	<input type = "text" id = "txt" />
  <ul id = "list">
    <li tabindex="1">Item1</li>
    <li tabindex="1">Item2</li>
    <li tabindex="1">Item3</li>
  </ul>
</body>
<script>

   var items = document.querySelectorAll("#list li");
            
            for(var i = 0; i < items.length; i++)
            {
                items[i].onclick = function(){
                    
                    window.location.href = "sample_model.php?st_id="+this.innerHTML;      
                };
            }
  
  /*var selected;
  
  if(e.target.tagName === 'LI') {                                      // 2.
    selected= document.querySelector('li');
	 alert(selected.value);                  // 2a.
    if(selected) selected.className= '';                               // "
    e.target.className= 'selected';
	                                    // 2b.
  }*/

</script>
</html>