
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    <style>
        input {
            display: block;
            margin:20px;
            height:30px;
            
        }
    </style>
</head>

<body>
    <main id="mainSec"></main>
    <script>
    $(function () {
            class Login {
                constructor() {
                
                }
                loginForm(sendMethod, inId, inPw, inMessage) {
                    let loginFormString= `
                    <form action="./tel.php" method="${sendMethod}">
                    <input type="text" class="inId" name="inId" placeholder="${inId}">
                    <input type="text" class="inPw" name="inPw" placeholder="${inPw}">
                    <input type="submit" class="submit" name="loginOK" value="${inMessage}">
                        </form>`
                    return loginFormString;
                }
                loginProcess(){
                    $("#mainSec").html(this.loginForm("get","ID 입력", "PW 입력", "로그인"));
                }
            }


  
        const login = new Login();
        login.loginForm();
        login.loginProcess();











      });//End



    </script>

</body>

</html>
<?php
  require './inc/db.inc';
  if(isset($_GET['loginOK'])){
    $inId= $_GET['inId'];
  } 
?>