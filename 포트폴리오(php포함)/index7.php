<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width-scale=1.0"/>
   <title>clothes and woman</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jomhuria&family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap');


body{
    text-align:center;
}

*{
    margin:0;
    padding:0;
}

.title{
    position:relative;
    font-family: 'Nanum Pen Script', cursive;
    font-size:40px;
    margin-top:150px;
}

.login1{
    position:absolute;
    float:left;
    margin-left:200px;
}

.kakaotok1{
    width:540px;
    height:70px;
    background:#fff34d;
    border-radius:10px;
    border:none;
    margin-top:30px;
}

.kakaotok img{
    width:5px;
    height:5px;
    vertical-align:-4px;
    float:left;
    margin-left:100px;
}

button a{
    text-decoration:none;
    color:black;
    font-weight:bold;
}

.tab1 input[type="radio"] + label {
    margin-top:30px;
    padding:30px 80px;
    display:inline-block;
    background:#fff0f0;
    color:#050000;
    font-size:14px;
    cursor:pointer;
    border-radius:10px;
    border:1px solid #cecece;
}

.tab1 input[type="radio"]:checked + label{
    background:#ffd1d1;
    color:#ffffff;
    border:none;
}

.tabmenu{
    display:none;
}

input[id="tab01"]:checked ~.box1{
    display:block;
}

input[id="tab02"]:checked ~.box2{
    display:block;
}

.tab1 input[type="radio"]{
    display:none;
}

.tab1 input[type="radio"]:checked {
    display:none;
}

input[id="tab01"]{
    margin-left:30px;
}


.tabmenubox1 .label{
    color:#f5bbf5;
}

.login id{
    width:300px;
    height:300px;
}


#loginbox label{
   margin-left:50px;
   font-size:15px;
   color:#888383
}

#loginbox input[type="text"] {
    border:none;
    outline:none;
    width:200px;
    border-bottom:1px solid #cecece;
}

#loginbox input[type="password"] {
    border:none;
    outline:none;
    width:200px;
    border-bottom:1px solid #cecece;
}

#loginbox{
    margin-top:30px;
}

.checkbox1{
    margin-top:30px;
}

.loginbutton{
    margin-top:20px;
    width:530px;
    height:70px;
    background:#000000;
    border:none;
    border-radius:5px;
    color:#ffffff;
    font-weight:bold;
}

.Choose1{
    margin-top:50px;
}

.Choose1 label{
    position:relative;
    cursor:pointer;
    color:#cecece;
    font-size:12px;
    margin-left:24px;
}

#checkbox__box1{
    display:none;
}

#checkbox__box2{
    display:none;
}


.Choose1 label::before {
    content:'';
    border:3px solid #cecece;
    border-radius:20px;
    display:inline-block;
    width:25px;
    height:25px;
    vertical-align:middle;
    top:10px;
    margin-right:10px;
}

.Choose1 label::after{
    content:'';
    display:inline-block;
    position:absolute;
    width:30px;
    height:30px;
    vertical-align:middle;
    top:-5px;
    bottom:4px;
    margin-left:-41px;
}

.Choose1 input[type="checkbox"]:checked + label::after{
    content:'';
    background:url("image/checkbox2.png");
}

.Choose2 li{
    margin-top:30px;
    display:inline-block;
    color:#908b8b;
    font-size:15px;
    margin-left:10px;
}

.join{
    text-decoration:none;
    color:#908b8b;
}

.Choose3{
    margin-top:50px;
}

.naver{
    display:inline-block;
    width:530px;
    height:70px;
    border:1px solid #3fdd61;
    text-align:center;
    background:#3fdd61;
    border-radius:5px;
    color:#ffffff;
}

.google{
    margin-top:20px;
    display:inline-block;
    width:530px;
    height:70px;
    border:1px solid #bbb9b9;
    text-align:center;
    background:#ffffff;
    border-radius:5px;
    color:#000000;
    font-weight:bold;
}

.memo{
    display:inline-block;
    margin-top:30px;
    border:1px solid #eeeded;
    background:#eeeded;
    width:490px;
    height:50px;
    text-align:left;
    color:#5c5c5c;
    padding:10px 20px;
    border-radius:3px;
    font-size:18px;
    margin-bottom:100px;
}

.small{
    color:#050000;
    font-size:15px
}

.Bespeak{
    margin-top:30px;
}

.Bespeak label{
    font-size:14px;
    color:#999898;
}

.Bespeak input[type="text"]{
    border:none;
    outline:none;
    width:200px;
    border-bottom:1px solid #cecece;
}

.Bespeak input[type="password"]{
    border:none;
    outline:none;
    width:200px;
    border-bottom:1px solid #cecece;
}

.inquire{
    margin-top:10px;
}

.inquire p{
    display:block;
    margin-top:20px;
}

.orderinquire{
    background:#050000;
    color:#ffffff;
    border-radius:5px;
    width:530px;
    height:70px;
    padding:20px 20px;
    text-align:center;
    top:-3px;
    font-weight:bold;
}

.Non-membersjoin{
    background:#ffffff;
    color:#000000;
    border-radius:5px;
    width:530px;
    height:70px;
    padding:20px 20px;
    text-align:center;
    top:-3px;
    border:1px solid #e7e6e6;
    font-weight:bold;
}

.naver a{
    color:#ffffff;
}

#header{
    position:relative;
    background:#f3eded;
    height:250px;
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

#menu2{ 
    border-top:1px solid #fff;
    margin-top:-70px;
    background:#18c2ab;
    border-bottom:1px solid #fff;
    padding:30px 30px;
    height:30px;
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

#footer{
    background:rgb(247, 231, 231);
    float:center;
    padding:30px 30px;
}

#footer p{
    margin-top:5px;
    color:#814646;
}




</style>
<script>
function check_input()
	{
    	if (!document.login.id.value) {
        	alert("???????????? ???????????????");    
        	document.login_form.id.focus();
        	return;
    	}

    	if (!document.login.pass.value) {
        	alert("??????????????? ???????????????");    
        	document.login.pass.focus();
        	return;
    	}
    	document.login.submit();
	}
</script>
</head>
<body>
     <form name="login" method="post" action="login.php">
<div id="header">
    <div id="menu1">
    <ul>
    <li><a href="index7.php">?????????</a></li>
    <li><a href="index5.php">????????????</a></li>
    <li><a href="#">????????????</a></li>
    <li><a href="#">???????????????</a></li>
    <li><a href="#">????????????</a></li>
    </ul>
    </div>
    <div class="logo">
    <a href="index.php"><img src="image/logo.png"></a>
    </div>
    <div id="menu2">
    <ul class="tap1">
        <li><a href="#">?????????</a></li>
        <li><a href="#">?????????</a></li>
        <li><a href="#">?????????</a></li>
        <li><a href="#">??????</a></li>
        <li><a href="#">????????????</a></li>
        <li><a href="#">????????????</a>
    </ul>
    </div>
    </div>


<div class="center">
<p class="title">clothes and woman</p>
<button class="kakaotok1"><img src="image/kakaotalk.png" class="kakaotok img"><a href="https://accounts.kakao.com/">????????? 1??? ?????????/????????????</a></button>
<div class="tab1">
    <input type="radio" name="tabmenu" id="tab01" checked>
    <label for="tab01">?????? ????????????????</label>
    <input type="radio" name="tabmenu" id="tab02">
    <label for="tab02">????????? ????????????</label>

    <div class="tabmenu box1">
    <div id="loginbox">
    <label>?????????</label><input type="text" id="input box1" name="id"></br/>
    <label class="sort1">????????????</label><input type="password" id="input box2" name="pass"><br/>
    </div>
    <div class="Choose1">
    <input type="checkbox" name="checkbox1" id="checkbox__box1" value="" >????????? ??????</input>
    <label for="checkbox__box1"></label>
    <input type="checkbox" name="checkbox1" id="checkbox__box2" value="">????????? ?????? ??????</input>
    <label for="checkbox__box2"></label>
    </div>
    <br/>
    <button class="loginbutton" onclick="check_input()">?????????</button>
    <div class="Choose2">
        <li><a href="#" class="join">?????? ????????????&nbsp&nbsp |</a></li>
        <li>????????? ??????&nbsp&nbsp |</li>
        <li>???????????? ??????</li>
    </div>
    <div class="Choose3">
    <p><button class="naver"><img src="image/n.png"><a href="https://nid.naver.com/">????????? ?????????</a></button></p>
    <p><button class="google"><img src="image/google.png"><a href="https://accounts.google.com/">?????? ?????????</a></button></p>
    </div>
    <div class="memo">
     ????????? 1??? ?????????/???????????????????<br/>
     <p class="small">????????? ????????? ????????? ?????? ????????? / ?????? ???????????????.</p>
    </div>
    </div>
    
    <div class="tabmenu box2">
    <div class="Bespeak">
    <label>????????????</label><input type="text" id="input box1"></br/>
    <label class="sort1">????????????</label><input type="text" id="input box1"><br/>
    <label class="paddword1">????????????</label><input type="password" id="input box1"><br/>
    </div>
    <div class="inquire">
    <p><button class="orderinquire">????????? ????????????</button></p>
    <p><button class="Non-membersjoin">????????? ????????????</button></p>
    <p><button class="Non-membersjoin">?????? ????????????</button></p>
    </div>
    <div class="Choose3">
    <p><button class="naver"><img src="image/n.png"><a href="https://nid.naver.com/">????????? ?????????</a></button></p>
    <p><button class="google"><img src="image/google.png"><a href="https://accounts.google.com/">?????? ?????????</a></button></p>
    </div>
    <div class="memo">
    ????????? 1??? ?????????/???????????????????<br/>
    <p class="small">????????? ????????? ????????? ?????? ????????? / ?????? ???????????????.</p>
    </div>
    </div>
    </div>

</div>
    <div id="footer">
    <p>(???)?????? ??????
    <p>??????:????????? ??????:????????? ????????? ?????????</p>
    <p>?????????/????????? ?????? ??????:shop@clothes and woman</p>
    <p>????????????:shop@clothes and woman/(09:00~18:00) ????????????:010-0000-0000</p>
    <p>????????? ????????????:000-00-0000 ??????????????? ????????????:0000-0000-00000</p>
    </div>

    
</body>
</html>
