
<!--

Design  : Azozz ALFiras

Porgrammer JavaScript : https://github.com/node-modules/urlencode



 -->
<html>
<head>
    <link href="logo.png" rel="apple-touch-icon">
    <link href="logo.png" rel="apple-touch-icon" sizes="76x76">
    <link href="logo.png" rel="apple-touch-icon" sizes="120x120">
    <link href="logo.png" rel="apple-touch-icon" sizes="152x152">
    <link href="logo.png" rel="apple-touch-icon" sizes="180x180">
    <link href="logo.png" rel="icon" sizes="192x192">
    <link href="logo.png" rel="icon" sizes="128x128">
    <meta charset="utf-8">
    <meta name="description" content="  موقع لفك تشفير روابط المشفرة وبعض الاكواد  ">
    <meta name="keywords" content="ios,apps,snapchat,dublicate,Azozz ALFiras,links">
        <meta name="author" content="Azozz ALFiras">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Links | Azozz ALFiras</title>

        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
      <style>



   #linkscode {
    width: 80%;
    height: 250px;
    font-family: 'Cairo', sans-serif;
    font-size: 20px;
}
.done{
    font-family: 'Cairo', sans-serif;
    font-size: 20px;

}

.codes {
    width: 100%;
    color: #333;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}



.azozz {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}
a {
    text-decoration: none;
    color: #169e00;
}
      </style>

<div class="azozz">

    <p class="done">Welcome To Back</p>

<textarea class="codes" cols="70" id="linkscode"></textarea>

<br>


<button onclick="linkcode()" type="button" class="done">  Encryption </button>
<button onclick="outlink()" type="button" class="done"> Decryption  </button>

<p class="done"> Development : <a href="https://twitter.com/AzozzALFiras">Azozz ALFiras</a> </p>
</div>


<script type="text/javascript" >
function linkcode() {
            var obj = document.getElementById('linkscode');
            var unencoded = obj.value;
            obj.value = encodeURIComponent(unencoded);
}
function outlink() {
            var obj = document.getElementById('linkscode');
            var encoded = obj.value;
            obj.value = decodeURIComponent(encoded.replace(/\+/g,  " "));
}
</script>



    <script language="JavaScript">

var message="hi";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// -->
</script>



</body>
</html>
