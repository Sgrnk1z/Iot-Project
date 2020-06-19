<!DOCTYPE html>
<html>
    <head>
        <title>Javascript: get selected li from ul</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <input type="text" id="txt">
        
        <ul id="list">
            <li><h1 id="v">JS</h1> Hello</li>
            <li><h1 id="v1">PS</h1> Hello PHP</li>
            <li>Java</li>
            <li>C#</li>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        
        <script>
            
            var items = document.querySelectorAll("#list li");
            
            for(var i = 0; i < items.length; i++)
            {
                items[i].onclick = function(){
                    
                    document.getElementById("txt").value = v.innerHTML;
                    
                };
            }
            
        </script>
        
    </body>
</html>
