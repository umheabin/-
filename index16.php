<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>그대에게 해주는 빵집</title>
  <link rel="icon" href="images/logo-favicon.png">
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Slick Slider -->
  <!-- TypeIt -->
  <!-- Custom CSS & JS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <script src="slick/slick.js"></script>
  <script src="js/main2.js"></script>
  <script>
   function check_input() {
      if (!document.join3.id.value) {
          alert("아이디를 입력하세요!");    
          document.join3.id.focus();
          return;
      }
      if (!document.join3.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.join3.pass.focus();
          return;
      }
      if (!document.join3.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.join3.pass_confirm.focus();
          return;
      }
      if (!document.join3.name.value) {
          alert("이름을 입력하세요!");    
          document.join3.name.focus();
          return;
      }
      if (!document.join3.email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.join3.email.focus();
          return;
      }
      if (document.join3.pass.value != document.join3.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.join3.pass.focus();
          document.join3.pass.select();
          return;
      }
      document.join3.submit();
   }
   function reset_form() {
      document.join3.id.value = "";  
      document.join3.pass.value = "";
      document.join3.pass_confirm.value = "";
      document.join3.name.value = "";
      document.join3.email.value = "";
      document.join3.id.focus();
      return;
   }
   function check_id() {
     window.open("check_id.php?id=" + document.join3.id.value,
         "IDcheck",
          "left=700,top=300,width=380,height=160,scrollbars=no,resizable=yes");
   }
</script>
  <style>
  

    #cakeintroduce{
        width:1300px;
        margin:auto;
    }
    .cake1,.cake2,.cake3{
        width:1000px;
        height:1000px;
        float:left;
    }

    #menu1{
        background:linear-gradient(#df8282,#fcc033);
        height:80px;
        width:auto;
    }
    
    #menu1 li{
        display:inline;
        list-style:none;
        margin:0 8px 5px 0;
        padding:20px 20px;
        font-size:20px;
        font-weight:bold;
        margin-top:-100px;
    }
    
    .bread{
    position:relative;
    }

    .bread a{
    font-size:28px;
    color:#983f3f;
    font-weight:bold;
    text-decoration:none;
    list-style:none;
    }

    .submenu1 li{
    list-style:none;
    font-size:28px;
    margin-top:5px;
    }


    .submenu1{       
    position:absolute;
    background:#ffffff;
    border:1px solid #cecece;
    padding:10px 10px;
    width:200px;
    height:150px;
    margin-top:10px;
    display:none;
    text-align:center;
    }

    .bread a:hover{
    color:#983f3f;
    font-size:30px;
    }

    .bread:hover .submenu1{
    display:block;
    }


    .cake a{
    font-size:28px;
    color:#983f3f;
    font-weight:bold;
    text-decoration:none;
    list-style:none;
    }

    .submenu2 li{
    list-style:none;
    font-size:28px;  
    margin-top:5px;
    }
    
    .submenu2{
    position:absolute;
    background:#ffffff;
    border:1px solid #cecece;
    padding:10px 10px;
    width:200px;
    height:150px;
    margin-top:10px;
    margin-left:40px;
    display:none;
    text-align:center;
    }

    .cake a:hover{
    color:#983f3f;
    font-size:30px;
    }

    .cake:hover .submenu2{
    display:block;
    }

    .dessert a{
    font-size:28px;
    color:#983f3f;
    font-weight:bold;
    text-decoration:none;
    list-style:none;
    }

    .dessert a:hover{
    font-size:30px;
    }
    
    .coffee a{
    font-size:28px;
    color:#983f3f;
    font-weight:bold;
    text-decoration:none;
    list-style:none;
    }

    .coffee a:hover{
    font-size:30px;
    }
    
    body {
      background-color: rgb(164, 112, 112);
      margin: 0;
      color:rgb(255, 255, 255);
      height:100%;
    }
    .myslider {
      width:800px;
      margin:auto;
      margin-top:100px;
    }

    .myslider img{
        width:800px;
        height:500px;
    }
    .myslider div {
      border: 1px solid rgb(212, 212, 212);
      width:800px;
      height:500px;
      background-color: #ddd;
      font-size: 30px;
    }
    
    
    .myslider .slick-dots {
      /* display: none !important; */
      bottom: 0;
    }

    .loginmenu{
      float:right;
      margin-top:12px;
    }

    .loginmenu a{
      color:rgb(176, 56, 56);
      text-decoration:none;
    }

    .loginmenu a:hover{
      color:#ce5353;
      transition:0.5s;
    }

    #main {
      margin-top:100px;
      width:1300px;
      margin:auto;
      margin-bottom:200px;
    }

    #main img{
      width:300px;
      height:300px;
    }

    #main > li{
      float:left;
      display:inline;
    }

   

    #footer{
      background:#e79191;
      width:100%;
      height:500px;
      margin-top:1200px;
     }

     .footer-inner{
      position:relative;
      top:0;
      left:0;
      background:#e79191;
      width:1300px;
      margin:auto;
      }

     .footer-inner .title1{
      position:absolute;
      top:0;
      left:0;
      color:#dee996;
      font-weight:bold;
     }

     .footer-inner .title2{
      position:absolute;
      top:0;
      left:0;
      margin-left:300px;
      margin-top:20px;
      color:#dee996;
      font-weight:bold;
     }

     .footer-inner .title3{
      position:absolute;
      top:0;
      left:0;
      margin-left:800px;
      margin-top:20px;
      color:#dee996;
      font-weight:bold;
     }

     .footer-inner .submenu3{
      position:absolute;
      top:0;
      left:0;
      margin-top:30px;
     }

     .footer-inner .submenu4{
      position:absolute;
      top:0;
      left:0;
      margin-top:30px;
      margin-left:300px;
     }

     .footer-inner .submenu5-1{
      position:absolute;
      top:0;
      left:0;
      margin-top:50px;
      margin-left:800px;
     }

     .footer-inner .submenu5-2{
      position:absolute;
      top:0;
      left:0;
      margin-top:50px;
      margin-left:850px;
      }

      .footer-inner .submenu5-3{
      position:absolute;
      top:0;
      left:0;
      margin-top:50px;
      margin-left:900px;
      }

      #join{
        margin:0 auto;
        width:800px;
        padding-top:300px;
        width:500px;
      }

      #join a{
        color:#ffc7c7;
      }

      .buttons li{
        display:inline;
        list-style:none;
        padding-left:-300px;
      }
      
      button{
        color:#f7cb84;
        background:#f53813;
        outline:none;
        border:none;
        padding:7px 7px;
        margin-top:12px;
        margin-left:30px;
      }

      .buttons button{
        color:#f7cb84;
        background:#a1500e;
        outline:none;
        border:none;
        padding:7px 7px;
        margin-top:12px;
      }



      #inputbox{
        border:none;
        width:300px;
        border-bottom:5px solid #ff9d0b;
        background-color:rgb(164, 112, 112);
        outline:none;
        color:#ff9d0b;
        font-size:18px;
      }
      
      @media(max-width:768px) {
     

    #footer{
      background:#e79191;
      width:100%;
      height:500px;
      margin-top:4500px;
     }

     .footer-inner{
      position:relative;
      top:0;
      left:0;
      background:#e79191;
      width:100%;
      margin:auto;
     }

     .footer-inner .title2{
      position:absolute;
      top:0;
      left:0;
      margin-left:250px;
      margin-top:20px;
      color:#dee996;
      font-weight:bold;
     }

     .footer-inner .submenu4{
      position:absolute;
      top:0;
      left:0;
      margin-top:30px;
      margin-left:250px;
     }

     .footer-inner .title3{
      position:absolute;
      top:0;
      left:0;
      margin-left:0px;
      margin-top:260px;
      color:#dee996;
      font-weight:bold;
     }

     .footer-inner .submenu5-1{
      position:absolute;
      top:0;
      left:0;
      margin-top:300px;
      margin-left:0px;
     }

     .footer-inner .submenu5-2{
      position:absolute;
      top:0;
      left:0;
      margin-top:300px;
      margin-left:30px;
      }

      .footer-inner .submenu5-3{
      position:absolute;
      top:0;
      left:0;
      margin-top:300px;
      margin-left:60px;
      }
}
</style>
</head>

<body>

<div id="menu1">
    <li class="bread"><a href="#">Bread</a>
    <ul class="submenu1">
    <li class="strawberry"><a href="#">Strawberry</a></li>
    <li class="chocolate"><a href="#">Chocolate</a></li>
    <li class="red bean"><a href="#">Red bean</a></li>
    </ul>
    </li>
    
    <li class="cake"><a href="#">Cake</a>
    <ul class="submenu2">
    <li class="strawberry"><a href="#">Strawberry</a></li>
    <li class="chocolate"><a href="#">Chocolate</a></li>
    <li class="ice cream"><a href="#">Ice cream</a></li>
    </ul>
    </li>
    
    <li class="dessert"><a href="#">Dessert</a></li>
    <li class="coffee"><a href="#">Coffee</a></li>

    <div class="loginmenu">
    <li class="notification"><a href="list.php">공지 게시판</li>
    <li class="join"><a href="index16.php">Sing up</a></li>
    <li class="login"><a href="index17.php">login</a></li>
    <li class="shopping"><a href="#">basket</a></li>
    </div>
</div>

<div id="join">
<form name="join3" action="insert2.php" method="post">
    <div class="id"><a>아이디 :</a>
    <p><input type="text" name="id" id="inputbox"><button type="button" onclick="check_id()">중복체크</button></p></span>                    
    </div>
    <div class="password"><a>비밀번호 :</a>
    <p><input type="password" name="pass" id="inputbox"></p>
    </div>
    <div class="password check"><a>비밀번호 확인 :</a>
    <p><input type="password" name="pass_confirm" id="inputbox"></p>
    </div>
    <div class="name"><a>이름 :</a>
    <p><input type="text" name="name" id="inputbox"></p>
    </div>
    <div class="email"><a>이메일 :</a>
    <p><input type="text" name="email" id="inputbox"></p>
    
    <ul class="buttons">
        <li><button type="button" onclick="check_input()"><a>저장하기</a></button></li>
        <li><button type="button" onclick="reset_form()"><a>취소하기</a></button></li>
    </ul>
    </form>
    </div>
</div>
<div id="footer">
<div class="footer-inner">
  <p class="title1">Info</p>
  <div class="submenu3">
  <p>브랜드소개</p>
  <p>창업안내</p>
  <p>안전보건경영방침</p>
  <p>윤리신고센터</p>
  <p>채용</p>
  </div>

  <p class="title2">Contact Us</p>
  <div class="submenu4">
  <p>고객센터</p>
  <p>080-731-2027</p>
  <p>평일 09:00 ~ 17:00(점심:12:00 ~ 13:00)</p>
  <p>고객칭찬</p>
  </div>
  
  
  <p class="title3">Follow Us</p>
  <div class="submenu5">
  <p class="submenu5-1"><img src="image/free-icon-facebook-1077041.png"></p>
  <p class="submenu5-2"><img src="image/free-icon-instagram-174855.png"></p>
  <p class="submenu5-3"><img src="image/free-icon-youtube-174883.png"></p>
  </div>
</div>
</div>

</body>
</html>
