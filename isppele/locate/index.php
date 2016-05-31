<!doctype html>
<head>
<title>Secondary library navigator</title>
<link rel="shortcut icon" href="../../../images/old\ logo.png"/>
</head>
<body>
<div id="back">
<a href="..">&lt;&lt; back</a>
</div>
<center>
<h2>1st Floor of ISPP Knowledge Center</h2>
<div id="display">
<?php
if (substr($_GET["q"],0,strpos($_GET["q"], " ")) == "agn"){
echo "<h3>".$_GET["title"]."</h3><br/><img src='../images/6.png'/>";
}else if (substr($_GET["q"],0,strpos($_GET["q"], " ")) == "f"){
if (strcmp("aaa",substr($_GET["q"],strlen($_GET["q"]-3))) <= 0 && strcmp("har",substr($_GET["q"],strlen($_GET["q"]-3))) >= 0){
echo "<img src='../images/9.png'/>";
}else if(strcmp("har",substr($_GET["q"],strlen($_GET["q"]-3))) < 0 && strcmp("ree",substr($_GET["q"],strlen($_GET["q"]-3))) >= 0){
echo "<img src='../images/8.png'/>";
}else{
echo "<img src='../images/7.png'/>";
}
}else if (substr($_GET["q"],0,strpos($_GET["q"], " ")) == "gn"){
echo "<img src='../images/10.png'/>";
}else if (substr($_GET["q"],0,strpos($_GET["q"], " ")) == "af"){
echo "<img src='../images/11.png'/>";
}else if (substr($_GET["q"],0,strpos($_GET["q"], " ")) == "b" || substr($_GET["q"],0,strpos($_GET["q"], " ")) == "r" || substr($_GET["q"],0,strpos($_GET["q"], " ")) == "tok"){
echo "<img src='../images/5.png'/>";
}else if (substr($_GET["q"],1,strpos($_GET["q"], " ")) >= 950 && substr($_GET["q"],1,strpos($_GET["q"], " ")) <= 998 || substr($_GET["q"],1,strpos($_GET["q"], " ")) >= 793 && substr($_GET["q"],1,strpos($_GET["q"], " ")) <= 813.3){
echo "<img src='../images/2.png'/>";
}else if (substr($_GET["q"],1,strpos($_GET["q"], " ")) >= 813.5 && substr($_GET["q"],1,strpos($_GET["q"], " ")) <= 950){
echo "<img src='../images/1.png'/>";
}else if (substr($_GET["q"],1,strpos($_GET["q"], " ")) >= 001 && substr($_GET["q"],1,strpos($_GET["q"], " ")) <= 33.6 || substr($_GET["q"],1,strpos($_GET["q"], " ")) >= 701 && substr($_GET["q"],1,strpos($_GET["q"], " ")) <= 792.02){
echo "<img src='../images/3.png'/>";
}else if (substr($_GET["q"],1,strpos($_GET["q"], " ")) >= 33.7 && substr($_GET["q"],1,strpos($_GET["q"], " ")) <= 700.95){
echo "<img src='../images/4.png'/>";
}
?>
<h3>call number</h3>
<?php echo $_GET["q"]; ?>
</div>
</center>
</body>
</html>
<style type="text/css">
a {
-webkit-appearance: button;
-moz-appearance: button;
appearance: button;
text-decoration: none;
color: initial;
width: 60px;
height: 20px;
margin: 5px;
padding: 2px;
background-color: #212830;
}
img {
width: 500px;
height: 500px;
}
body {
margin: 0;
background-color:#FCF7E7;
font-family:sans-serif;
}
#display {
padding: 10px;
}
h2 {
margin: 0;
}
</div>
</style>
