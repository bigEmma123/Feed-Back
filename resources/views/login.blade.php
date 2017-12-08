<!DOCTYPE html>
<html lang="en-Us">
<head>
  <meta charset=utf-8>
  <link href="2017-11-22-PHOTO-00000003.jpg" rel="icon" type="image/jpg">
  <title>Loign</title>
  <link href="login.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width,initial scale=1">
<style media="screen">
body{
margin: 0;
padding: 0;
font-size: 100%;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
text-align: justify;
}

.container{
margin-left: auto;
margin-right: auto;
background: #ccc;
width: 90%;
}


.main{
padding: 20px 40px;
}


.nav ul{
text-align: none;
text-decoration: none;
list-style: none;
background: #cccccc;
border-bottom: 2px solid #000;
margin: 0;
padding: 0;
}

.nav ul li{
text-align: none;
text-decoration: none;
position: relative;
padding: 10px;
margin: 10px;
display: inline-block;
list-style: none;
}

.nav ul li a{
list-style: none;
text-align: none;
text-decoration: none;
position: relative;
padding: 10px;
margin: 10px;
display: inline-block;
}

.main form input[type="text"],
input[type="password"]{
display: block;
padding: 10px;
margin: 10px;
width: 50%;
font-weight: bold;
}

@media only screen
and (max-width: 700px){
.main form input[type="text"],
input[type="password"]{
  width: 100%;
}
}

.main form button{
padding: 10px;
width: 30%;
margin: 10px;
}

@media only screen
and (max-width: 700px){
.main form button{
  width: 100%;
  padding: 8px;
}
}

</style>
</head>
<body>
  <div class="nav">
    <ul>
      <li>
        <a href="#">Home</a>
      </li>

      <li>
        <a href="#">Sign Up</a>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="main">
      <h2>Login</h2>
      <form method="post" action='{{ url('logger') }}'>
            {{ csrf_field() }}
        <input type="text" name="text" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type='submit'>Login</button>
      </form>
    </div>
  </div>
</body>
</html>
