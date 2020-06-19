<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nuSelectable jQuery Plugin Demo</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
    body { background-color:#ECE9F2;}
    .item {
        height: 100px;
        margin: 5px;
        background: #2ECC71;
        border: 1px solid transparent;
    }
    .item span {
        display: block;
        padding: 10px;
        font-size: 18px;
        color: #fff;
    }
    .nu-selection-box {
        border: 1px dotted #BBB;
        background: rgba(0, 0, 0, 0.04);
    }
    .nu-selected {
        border: 5px solid #fff;
        box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.1);
        background: #27AE60;
    }
    
    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="http://www.jqueryscript.net/other/jQuery-Plugin-To-Select-Multiple-Elements-with-Mouse-nuSelectable.html">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
    <h1 style="margin:150px auto 50px auto; text-align:center;">nuSelectable jQuery Plugin Demo</h1>
    <div id="item-container" class="container-fluid" style="min-height: 1000px;">
        <div class="row">
            <div class=" col-md-2">
                <div class="item"><span>Item 1</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 2</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 3</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 4</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 5</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 6</span></div>
            </div>
            
        </div>
        <div class="row">
            <div class=" col-md-2">
                <div class="item"><span>Item 7</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 8</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 9</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 10</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 11</span></div>
            </div>
            <div class=" col-md-2">
                <div class="item"><span>Item 12</span></div>
            </div>
            
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../src/jquery.nu-selectable.js"></script>
    <script>
    $(function() { 
        var selection = $('#item-container').nuSelectable({
            items: '.item',
            selectionClass: 'nu-selection-box',
            selectedClass: 'nu-selected'
        });
    });
    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
