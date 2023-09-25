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
  <script type="text/javascript" src="js/snow-it.js"></script>
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
        width:1300px;
        padding-top:300px;  
      }

      #join a{
        color:#ffc7c7;
      }

      .buttons li{
        display:inline;
        list-style:none;
        padding-left:-300px;
      }

      .buttons button{
       color:#f7cb84;
       background:#a1500e;
       outline:none;
       border:none;
       padding:7px 7px;
       margin-top:12px;
      }

      .board{
        width:400px;
        height:50px;
        color:black;
        size:30px;
      }

      .board input[type="text"]{
        color:black;
        size:50px;
      }


      textarea{
        width:1000px;
        height:800px;
        color:black;
        size:50px;
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

.board_list li { padding: 10px 0; border-bottom: solid 1px #dddddd; list-style:none;}
.board_list span { display: inline-block; text-align: center; }
.board_list .col1 { width: 10%; }
.board_list .col2 { width: 50%; text-align: left; }
.board_list .col3 { width: 15%; }

</style>
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
	<h2>자유 게시판 > 목록보기</h2>
	<ul class="board_list">
		<li>
			<span class="col1">번호</span>
			<span class="col2">제목</span>
			<span class="col3">글쓴이</span>
			<span class="col4">등록일</span>
		</li>
<?php
	$con = mysqli_connect("localhost", "user", "12345", "sample");		// DB 연결
	$sql = "select * from freeboard order by num desc";		// 일련번호 내림차순 전체 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$number = $total_record;				// 글 번호 매김
   	for ($i=0; $i<$total_record; $i++) {
      	mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
      	$row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

	  	$num         = $row["num"];			// 일련번호
	  	$name        = $row["name"];		// 이름
	  	$subject     = $row["subject"];		// 제목
      	$regist_day  = $row["regist_day"]; 	// 작성일
?>
		<li>
			<span class="col1"><?=$number?></span>		
			<span class="col2"><a href="view.php?num=<?=$num?>"><?=$subject?></a></span>
			<span class="col3"><?=$name?></span>
			<span class="col4"><?=$regist_day?></span>
		</li>	
<?php
   	   $number--;
   	}
   	mysqli_close($con);
?>
	    </ul>
		<ul class="buttons">
			<li><button onclick="location.href='list.php'">목록</button></li>
			<li><button onclick="location.href='index18.php'">글쓰기</button></li>
		</ul>	
		
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
