<!doctype html>
<head>
<title>ucombi librarian nav | The worlds best library navigator!</title>
<link rel="shortcut icon" href="../../images/old logo.png"/>
</head>
<body>
<center algin="center">
<h1>Librarian <span>N</span>av</h1>
ISPP Elementary Knowledge Center
<form action="convert.php" method="GET">
<div id="classes">
Choose the classification:
 <select required name="class">
<option value="ef" selected>early fiction</option>
<option value="jf">juvenille fiction</option>
<option value="jgn">juvenielle graphic novel</option>
<option value="pic">picture book</option>
</select>
</div>
<div id="author">
And enter the authors last name: <input name="name" autocomplete="off" placeholder="twain" required/>
</div>
</form>
</center>
</body>
</html>
<style type="text/css">
button {
background-color: #1171FF;
height: 26px;
border: none;
border-radius: 2px;
margin-left: 5px;
}
select {
-webkit-appearance: none;
-webkit-border-radius: 2px;
height: 26px;
border: 1px solid #1171FF;
background-color: #FCF7E7;
}
select:focus {
outline: none;
}
form {
padding: 5px;
}
div {
margin: 10px;
}
#author {
position: relative;
left: -24px;
margin-top: 20px;
}
center {
margin-top: 15%;
}
span {
color: red;
}
input {
height: 23px;
width: 106px;
border-radius: 2px;
border: 1px solid #1171FF;
background-color: #FCF7E7;
}
body {
background-color:#FCF7E7;
margin: 0;
font-family: sans-serif;
}
footer {
position: fixed;
bottom: 0px;
background-color: #BCBCBC;
width: 100%;
padding: 2px;
}
</style>
