<?php include "header.php"; ?>
<style>
  /*FONT*/
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

/*ICON*/
@import url(https://fonts.googleapis.com/icon?family=Material+Icons);

/*ANIMATE*/
@import url(//daneden.github.io/animate.css/animate.min.css);
@import url(https://jaruwat.pohong.me/theme/default/css/bubbles.css);

body {
  margin: 0;  
  line-height: 1.5;
  font-family: 'Source Sans Pro', sans-serif;
  text-align: left;
  font-weight: 300;
  color: white;
  background-color: #0c0a1e;
   -webkit-animation: op 3s; /* Safari and Chrome */
  -moz-animation: op 3s; /* Firefox */
  -ms-animation: op 3s; /* Internet Explorer */
  -o-animation: op 3s; /* Opera */
  animation: op 3s;
}

.bg {  
  -webkit-animation: bg-fadein 20s; /* Safari and Chrome */
  -moz-animation: bg-fadein 20s; /* Firefox */
  -ms-animation: bg-fadein 20s; /* Internet Explorer */
  -o-animation: bg-fadein 20s; /* Opera */
  animation: bg-fadein 20s;
  opacity: 0.5;
  content: "";
  background: url(godam.jpg);  
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  filter: blur(10px);
}

.container {
  -webkit-animation: fadein 2s; /* Safari and Chrome */
  -moz-animation: fadein 2s; /* Firefox */
  -ms-animation: fadein 2s; /* Internet Explorer */
  -o-animation: fadein 2s; /* Opera */
  animation: fadein 2s;
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50% ,-50%);
  background-color: rgba(255, 255, 255, 0.3);
  padding: 5px;
  border-radius: 5px;
  width: 300px;
  border: 1px solid rgba(255, 255, 255, 0.);
  z-index: 2000;
}

.container a {
  color: #fff;
  text-decoration: none;
  font-size: 50px;
  transition-duration: 0.5s;
  transition-timing-function: ease-in-put;
  font-weight: 500;
  margin-top: 0;
  margin-bottom: 0;
  
}

.container a:hover {
  text-shadow: 2px 2px 4px #10707f;
}

.container hr{
  margin-top: 1rem;
  margin-bottom: 1rem;
  margin-left: 0;
  margin-right: 0;
  border: 0;
  border-top: 1px solid rgba(0,0,0, 0.2);
}

.container input {
  background-color: rgba(255, 255, 255, 0);
width: 80%;
border-radius: 5px;
padding: 10px 15px;
margin: 0 auto 10px auto;
font-size: 18px;
color: white;
-webkit-transition-duration: 0.25s;
transition-duration: 0.25s;
font-weight: 300;
text-indent: 0px;

  }

.fa-ic { 
  position: absolute;
  top: 8px;
  left: 20px;
  font-size: 25px;
}

.container input:hover{
  text-indent: 10px;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.3);
}

.container input:focus{
  text-indent: 0px;
  width: 85%;
  color: black;
  border: 1px solid rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.7);
}

.container input::placeholder {
		color: #f8f8f8;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
	}

.container input:focus::placeholder {
		color: rgba(255, 255, 255, 0);
	}

.a-link a {
  color: #fff;
  font-size: 17px;
  line-height: 1.5;
  font-weight: 300;
  -webkit-transition-duration: 0.20s;
}

.a-link a:hover {
  line-height: 1.5;
  font-weight: 300;
  color: #57F5FF;
  text-shadow: 1px 1px 4px black;
}

.container button {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: 0;
  border: 0;
  padding: 10px 15px;
  color: #fff;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  background-color: #005ce6;
  border-color: #10707f;
  border-radius: 3px;
  width: 90%;
  height: 40px;
}

.container button:hover {
  background-color: #0066ff;
  border-color: #10707f;
  box-shadow: 0 0 0 2px rgba(0,92,230,.5);
}

.container button:focus {
  width: 85%;
  background-color: #0052cc;
  border-color: #10707f;
}

.footer{
  text-decoration: none;
  position: absolute; 
  display: block;
  color: white;
  right: 0;
  bottom: 0;
  font-size: 11px;
  float: right;
}

.footer a{
  color: white;
}

.l3lackMegas{
  text-decoration: none;
  position: absolute; 
  display: block;
  color: white;
  left: 0;
  bottom: 0;
  font-size: 13px;
  float: left;
  transition-duration: 0.5s;
}

.l3lackMegas a{
  color: white;
}

.l3lackMegas, .footer{
  color: white;
  transition-duration: 0.5s;
}
.l3lackMegas:hover,  .footer:hover{
  color: yellow;
  font-size: 15px;
  text-shadow: 2px 2px 10px white;
}

@keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Firefox */
        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Safari and Chrome */
        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Internet Explorer */
        @-ms-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }​

        /* Opera */
        @-o-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }​

@keyframes bg-fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Firefox */
        @-moz-keyframes bg-fadein {
            from { opacity: 0; }
            to   { opacity: 0.5; }
        }

        /* Safari and Chrome */
        @-webkit-keyframes bg-fadein {
            from { opacity: 0; }
            to   { opacity: 0.5; }
        }

        /* Internet Explorer */
        @-ms-keyframes bg-fadein {
            from { opacity: 0; }
            to   { opacity: 0.5; }
        }​

        /* Opera */
        @-o-keyframes bg-fadein {
            from { opacity: 0; }
            to   { opacity: 0.5; }
        }​

@keyframes op {
            from { background-color: #fff; }
            to   { background-color: #0c0a1e; }
        }

        /* Firefox */
        @-moz-keyframes op {
            from { background-color: #fff; }
            to   { background-color: #0c0a1e; }
        }

        /* Safari and Chrome */
        @-webkit-keyframes op {
            from { background-color: #fff; }
            to   { background-color: #0c0a1e; }
        }

        /* Internet Explorer */
        @-ms-keyframes op {
            from { background-color: #fff; }
            to   { background-color: #0c0a1e; }
        }​

        /* Opera */
        @-o-keyframes op {
            from { background-color: #fff; }
            to   { background-color: #0c0a1e; }
        }​
</style>

<head>
  <title>Bharatgodam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="bg"></div><br><center>


  <ul class="bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
<div class="container animated fadeIn">
  <center>
    
    <h2>
      <a>LOGIN</a>
    </h2>
  </center>
  <hr>
  <form id="login"  method="post" action="logindb.php">

		<center>
      <div> 
        <input type="text" name="Uid1" placeholder="Username" value="">
        <input type="password" name="Pass1" placeholder="Password">
       </div>
		
		  <button type="submit">Login</button>
		</center>
		<br>
	</form>
</div>

  
  <div class="footer">    

</body>


