.<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>clothes and woman</title>
  <link rel="stylesheet" href="../../common/css/style.css"/>
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<script src="main1.js" defer></script>
<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	

<style>
@import url('https://fonts.googleapis.com/css2?family=Jomhuria&family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap');

#header{
    position:relative;
    background:#f3eded;
    height:250px;
}

*{
    margin:0;
    padding:0;
}

body{
    text-align:center;
}

#menu1{
    background-position:fixed;
    background:#eedcdc;
}

#menu1 a{
    color:#8a52d8af;
    text-decoration:none;
    letter-spacing:2px;
    font-weight:normal;
    font-family: 'Noto Sans KR', sans-serif;
}

#menu1 ul{
    float:right;
    letter-spacing:5px;
}

#menu1 li{
    display:inline;
}

#search1 input[type="text"]{
    padding: 5px 20px 20px 50px;
	width: 100px;
	height: 5px;
	border: 2px solid #b7ecf3;
    font-size:20px;
    border-radius:20px 0 0 20px;
    border-right:none;
    background-color:#d1f9fc8e;
    outline:none;
}

#search1 input[type="submit"]{
    position:relative;
    margin:0;
	border: none;
	padding:0 30px 20px 20px;
	height: 34px;
	border-radius:0 10px 10px 0;
	font-size: 12px;
	background: #b6f4f5dc;
	color: #fff;
	vertical-align: bottom;
    font-size:25px;
    text-align:center;
    background:#B2CCFF url(image/heart1.png)center no-repeat;
}

#searcg1 input[type="text"]:hover{
    margin-top:30px;
    background:#91dcff;
}

img1{
    display:inline;

}

#menu2{
    border-top:1px solid #fff;
    margin-top:-70px;
    background:#18c2ab;
    border-bottom:1px solid #ffffff;
    padding:30px 30px;
    height:30px;
    position:relative;
}

#menu2 a{
    text-decoration:none;
    color:#fff;
    margin-top:20px;
    font-family: 'Noto Sans KR', sans-serif;
}

#menu2 li{
    border-left:#000000;
    display:inline;
    padding:20px 20px;
}


#Overall{
    padding:20px 20px;
    background:#6464FF;
}

#search1{
    position:absolute;
    top:255px;
    right:40px;
}

.galleryWrap img{
    position:relative;
    margin:0 auto;
}

.galleryWrap .tap1-1{
    position:absolute; 
    top:30px;
    left:38%;
    z-index:1;
}

.tap1-1{
    transform:translateX(1150px);
}

#menu2 .tap1-1{
    display:none;
    opacity:0.9;
}

#menu2 .tap1 > li:hover >.tap1-1{
    display:block;
    padding:5px 5px;
    width:820px;
    height:250px;
    background:#41dddd;
    font-size:25px;
    color:#f7e5e5;
    margin-top:10px;
    border:1px solid #B2CCFF;
    font-weight:bold;
}

.font-letter1{
    margin-left:5px;
    letter-spacing:12px;
    font-size:25px;
    color:#cdcdf3;
}

.font-letter2{
    margin-left:11px;
    letter-spacing:25px;
    font-size:20px;
    justify-content:space-between;
    color:#6464FF;
}

#menu2 .tap1-2{
    display:none;
}

.tap1-2{
    transform:translateX(30px);
}

#mainpage{
    position:relative;
    margin-top:30px;
}

.img-letter img{
    border:5px solid #ebebf5;
    margin-left:40px;
    position:relative;
}

#mainpage a:hover img{
    transition:opacity 0.5s linear;
    opacity:0.5;
}

#mainpage{
    position:relative;
    background:#e2f6ff;
    margin-top:30px;
}

#main p{
    font-size:30px;
    color:#75b1ff;
}

#slide{
        height:1000px;
        position:relative;
        overflow:hidden;
        margin-top:200px;
}
#slide ul{
        width:400%;
        height:300px;
        transition:1s;
}
    
#slide ul:after{
        content:"";
        display:block;
        clear:both;
}
    
#slide li{
        list-style:none;
        float:left;
        width:25%;
        height:100%;
}
    
#slide li:nth-child(1){
        background:rgb(243, 200, 200);
        height:1000px;
}
    
#slide li:nth-child(2){
        background:rgb(253, 253, 201);
        height:1000px;
}

#slide li:nth-child(3){
        background:rgb(202, 255, 224);
        height:1000px;
}

#slide li:nth-child(4){
        background:rgb(226, 226, 255);
        height:1000px;
}

#slide input{
       display:none;
}

#slide{
    margin-top:200px;
}

#slide label{
        display:inline-block;
        vertical-align:middle;
        width:30px;
        height:30px;
        background:rgb(109, 255, 223);
        transition:0.3;
        border-radius:50%;
        cursor:pointer;
        margin-right:30px;
}

#slide .sli{
        text-align:center;
        position:absolute;
        bottom:10px;
        left:0;
        width:100%;
        text-align:center;
        justify-content:center;
        margin-right:100px;
}

#sli1:cheked~ul{
        margin-left:0%;
}

#sli2:checked~ul{
        margin-left:-100%;
}

#sli3:checked~ul{
        margin-left:-200%;
}

#sli4:checked~ul{
        margin-left:-300%;
}

#mainpage{
    text-align:center;
}

#img1{
    width:100px;
}

#footer{
    background:rgb(247, 231, 231);
    float:center;
    padding:30px 30px;
}

#footer p{
    margin-top:5px;
    color:#814646;
}



#slide2-1 .slidelist{
    position:relative;
    white-space:nowrap;
    font-size:0;
    overflow:hidden;
}

#slide2-1 .slidelist .slideitem {
    position:relative;
    display:inline-block;
    vertical-align:middle;
    background-color:#fff;
    width:100%;
    transition:all 1s;
}

#slide2-1 .slidelist .slideitem > a {
    display:block;
    width:auto;
    position:relative;
}
#slide2-1 .slidelist .slideitem > a img {
    max-width:100%;
    border-radius:10px 10px;
}

#slide2-1 .slide-control [class*="control"] label {
    position:absolute;
    top:50%;
    transform:translateY(-100%);
    padding:20px;
    border-radius:50%;
    cursor:pointer;
}

#slide2-1 .slide-control [class*="control"] label.prev {
    left:300px; width:100px; height:100px; border-radius:50%; background:rgb(204, 241, 241) url("image/left-arrow.png") center center / 50% no-repeat; margin-top:2500px;
}
#slide2-1 .slide-control [class*="control"] label.next {
    right:300px; width:100px; height:100px; border-radius:50%; background:rgb(204,241,241) url("image/right-arrow.png") center center / 50% no-repeat; margin-top:2500px;
}

[name="slide"]{display:none;}
#slide01:checked ~ .slidelist .slideitem {left:0;}
#slide02:checked ~ .slidelist .slideitem {left:-100%;}
#slide03:checked ~ .slidelist .slideitem {left:-200%;}
#slide04:checked ~ .slidelist .slideitem {left:-300%;}
#slide05:checked ~ .slidelist .slideitem {left:-400%;}
#slide06:checked ~ .slidelist .slideitem {left:-500%;}
#slide07:checked ~ .slidelist .slideitem {left:-600%;}


.slide-control [class*="control"] {display:none;}
#slide01:checked ~ .slide-control .control01 {display:block;}
#slide02:checked ~ .slide-control .control02 {display:block;}
#slide03:checked ~ .slide-control .control03 {display:block;}
#slide04:checked ~ .slide-control .control04 {display:block;}
#slide05:checked ~ .slide-control .control05 {display:block;}
#slide06:checked ~ .slide-control .control06 {display:block;}
#slide07:checked ~ .slide-control .control07 {display:block;}

#banner{
   height:60px;
   background:black;
   text-align:center;
   margin-top:-30px;
}

#banner div{
   position:relative;
   display:inline;
   color:#fff;
   font-weight:bold;
}

#banner p{
    color:#fff;
    font-size:20px;
}

#banner i{
    position:absolute;
    top:5px;
    right:10px;
    margin-bottom:100px;
    background:rgb(0, 0, 0);
    color:yellow;
}

#banner button {
    color:rgb(209, 199, 199);
    float:right;
    width:50px;
    margin-top:-10px;
}


#solid1{
    margin:0 auto;
    width:50%;
}

.tabmenu {
    display:none;
}

input[id="tab01"]:checked ~.box1{display:block;}

.tab1 input[type="radio"]{
    margin:0 auto;
    display:none;
}

.tab1 input[type="radio"] + label{
    margin-top:30px;
    padding-top:20px;
    padding:20px 50px 20px 50px;
    display:inline-block;
    background:#ffffff;
    font-size:15px;
    border:1px solid #afafaf;
    color:rgba(15, 15, 15, 0.924)
}

.tab1 input[type="radio"]:checked + label {
    background:#f8e0e0;
}

#slide2-1 .slide-control [class*= "control"] label.prev { 
    width:100px; height:100px; border-radius:50%; background:rgb(223, 223, 223)  url("image/left-arrow.png") center center / 50% no-repeat; margin-right:-50px; box-shadow:4px 2px 5px 2px rgb(97, 95, 95);
}

#slide2-1 .slide-control [class*= "control"] label.next { 
    width:100px; height:100px; border-radius:50%; background:rgb(223, 223, 223)  url("image/right-arrow.png") center center / 50% no-repeat; margin-right:-50px; box-shadow:4px 2px 5px 2px rgb(97, 95, 95);
}

.slideitem{
    background:#ccc;
}

.background{
    background:#ccc;
}




</style>
</head>
<html>
<body>


<div id="header">
<div id="menu1">
<ul>
<?php
    if(!$userid)   {
?>
    
<li><a href="index7.php">로그인</a></li>
<li><a href="index5.php">회원가입</a></li>

<?php
   } else { 

    $logged = $username."(".$userid.")";
?>
                <span><?=$logged?> </span>
                <span> | </span>
                <span><a href="logout.php">로그아웃</a> </span>
                <span> | </span>
                <span><a href="modify_form.php">정보수정</a></span>

<?php
    }
?>
      
<li><a href="#">공지사항</a></li>
<li><a href="#">마이페이지</a></li>
<li><a href="#">장바구니</a></li>
</ul>
</div>
<div class="logo">
<a href="index.html"><img src="image/logo.png"></a>
</div>
<div id="menu2">
<ul class="tap1">
    <li><a href="#">원피스</a></li>
    <li><a href="#">아우터</a></li>
    <li><a href="#">스커트</a></li>
    <li><a href="#">팬츠</a></li>
    <li><a href="#">언더웨어</a></li>
    <li>
    <a href="#">전체화면</a>
    <ul class="tap1-1">
    <li class="font-letter1">원피스</li>
    <li class="font-letter1">아우터</li>
    <li class="font-letter1">스커트</li>
    <li class="font-letter1">팬츠</li>
    <li class="font-letter1">언더웨어</li>
    <br/>
    <li class="font-letter2"><a href="#">미니</a></li>
    <li class="font-letter2"><a href="#">자켓</a></li>
    <li class="font-letter2"><a href="#">니트</a></li>
    <li class="font-letter2"><a href="#">반바지</a></li>
    <li class="font-letter2"><a href="#">세트</a></li>
    <br/>
    <li class="font-letter2"><a href="#">미니</a></li>
    <li class="font-letter2"><a href="#">자켓</a></li>
    <li class="font-letter2"><a href="#">니트</a></li>
    <li class="font-letter2"><a href="#">반바지</a></li>
    <li class="font-letter2"><a href="#">세트</a></li>
    <br/>
    <li class="font-letter2"><a href="#">미니</a></li>
    <li class="font-letter2"><a href="#">자켓</a></li>
    <li class="font-letter2"><a href="#">니트</a></li>
    <li class="font-letter2"><a href="#">반바지</a></li>
    <li class="font-letter2"><a href="#">세트</a></li>
    <br/>
    <li class="font-letter2"><a href="#">미니</a></li>
    <li class="font-letter2"><a href="#">자켓</a></li>
    <li class="font-letter2"><a href="#">니트</a></li>
    <li class="font-letter2"><a href="#">반바지</a></li>
    <li class="font-letter2"><a href="#">세트</a></li>
    </ul>
    </li>
</ul>
</div>
<div id="search1">
<form action="#">
<p><input type="text" name="search"><input type="submit" value="">
</div>
</form>
</div>
<div id="main">
<div id="galleryWrap">
<div id="slide">
    <input type="radio" name="slide1" id="sli1" checked>
    <input type="radio" name="slide1" id="sli2">
    <input type="radio" name="slide1" id="sli3">
    <input type="radio" name="slide1" id="sli4">
    <ul class="image slide1">
      <li><img src="image/img1.jpg"></li>
      <li><img src="image/img2.jpg"></li>
      <li><img src="image/img3.jpg"></li>
      <li><img src="image/img4.jpg"></li>
    </ul>
    <p class="sli">
    <label for="sli1"></label>
    <label for="sli2"></label>
    <label for="sli3"></label>
    <label for="sli4"></label>
    </p>
</div>
<div id="main">
<p>BEST SALE</p>
<div id="mainpage">
     <div id="sort1">
     <a class="img-letter" href="index6.html"><img src="image/skirt1.jpg"></a>
     <a class="img-letter" href="#"><img src="image/skirt2.jpg"></a>
     <a class="img-letter" href="#"><img src="image/skirt3.jpg"></a>
     <a class="img-letter"href="#"><img src="image/skirt4.jpg"></a>
     </div>
     <br/>
     <a class="img-letter"href="#"><img src="image/skirt1.jpg"></a>
     <a class="img-letter"href="#"><img src="image/skirt2.jpg"></a>
     <a class="img-letter"href="#"><img src="image/skirt3.jpg"></a>
     <a class="img-letter"href="#"><img src="image/skirt4.jpg"></a>
</div>
</div>
</div>
</div>

<div class="tab1">
    <input type="radio" name="tabmenu1" id="tab01" checked>
    <label for="tab01">전체</label>
    <input type="radio" name="tabment1" id="tab02">
    <label for="tab02">치마</label>
    <input type="radio" name="tabmenu1" id="tab03" checked>
    <label for="tab03">바지</label>
    <input type="radio" name="tabment1" id="tab04">
    <label for="tab04">티셔츠</label>
    <input type="radio" name="tabmenu1" id="tab05" checked>
    <label for="tab05">정장</label>
    <input type="radio" name="tabment1" id="tab06">
    <label for="tab06">구두</label>
    <input type="radio" name="tabmenu1" id="tab07" checked>
    <label for="tab07">신발</label>
    <input type="radio" name="tabment1" id="tab08">
    <label for="tab08">악세사리</label>

    <div class="tabmenu box1">
        <div id="slide2-1">
            <input type="radio" name="slide" id="slide01" checked>
            <input type="radio" name="slide" id="slide02">
            <input type="radio" name="slide" id="slide03">
            <ul class="slidelist">
            <li class="slideitem">
                <div class="background">
               
                
           
        
        <div class="slide-control">
            <div class="control01">
                <label for="slide03" class="prev"></label>
                <label for="slide02" class="next"></label>
            </div>
            <div class="control02">
                <label for="slide01" class="prev"></label>
                <label for="slide03" class="next"></label>
            </div>
            <div class="control03">
                <label for="slide02" class="prev"></label>
                <label for="slide01" class="next"></label>
            </div>
        </div>
        </div>
</div>
</div>
<div id="footer">
<p>(주)옷과 여자
<p>대표:엄혜빈 주소:서울시 관악구 신림동</p>
<p>쇼핑몰/브랜드 제휴 문의:shop@clothes and woman</p>
<p>고객문의:shop@clothes and woman/(09:00~18:00) 전화번호:010-0000-0000</p>
<p>사업자 등록번호:000-00-0000 통신판매업 신고번호:0000-0000-00000</p>
</div>
</div>
</div>
</body>
</html>