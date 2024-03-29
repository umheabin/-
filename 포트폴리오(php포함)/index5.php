<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>clothes and woman</title>
  <link rel="stylesheet" href="../../common/css/style.css"/>
  <link rel="stylesheet" href="style.css"/>
<script src="js/main.js" defer></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jomhuria&family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap');

body{
    float:center;
}

#header{
    background:#f3eded;
    height:250px;
    text-align:center;
}

*{
    margin:0;
    padding:0;
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

.tap1 {
    position:relative;
}

#menu2{
    border-top:1px solid #fff;
    margin-top:-70px;
    background:#18c2ab;
    border-bottom:1px solid #ffffff;
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

.join1{
    position:absolute;
    margin:0 auto;
    top:500px;
    margin-left:800px;
    background:#fff;
    border:3px solid #0be076;
    padding:30px;
    margin-left:800px;
}

.join1 p {
    margin:5px 5px;
}

.join club{
    margin:0 auto;
    position:absolute;
}


.inputbox1{
    margin:0 auto;
    width:500px;
    position:absolute;
    top:-500px;
    left:-200px;
}

.join club label{
    margin-left:100px;
    font-size:20px;
    color:#18c2ab;
    padding-left:6px;
    padding:5px 5px;
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

#img1{
    width:100px;
}

#footer{
    background:rgb(247, 231, 231);
    float:center;
    padding:30px 30px;
    text-align:center;
}

#footer p{
    margin-top:5px;
    color:#814646;
}

#inputbox{
    border:none;
    border-bottom:3px solid #41dddd;
    outline:none;
    color:#41dddd;
    font-size:18px;
}


#footer { 
    margin-top:1300px;
}

.join_form li{
    list-style:none;
}

label{
    color:#18c2ab;
    font-size:22px;
}

.buttons button{
   color:#cfe3da;
   background:#43d7c3;
   outline:none;
   border:none;
   padding:7px 7px;
   margin-top:12px;
}

.buttons li{
    list-style:none;
    display:inline;
}

.col3 button{
    color:#dcecea;
    background:#df2a12;
    outline:none;
    border:none;
    padding:7px 7px;
    margin-top:12px;
}



</style>
<script>
     function check_input() {
      if (!document.join1.id.value) {
          alert("아이디를 입력하세요!");    
          document.join1.id.focus();
          return;
      }
      if (!document.join1.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.join1.pass.focus();
          return;
      }
      if (!document.join1.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.join1.pass_confirm.focus();
          return;
      }
      if (!document.join1.name.value) {
          alert("이름을 입력하세요!");    
          document.join1.name.focus();
          return;
      }
      if (!document.join1.email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.join1.email.focus();
          return;
      }
      if (document.join1.pass.value != document.join1.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.join1.pass.focus();
          document.join1.pass.select();
          return;
      }
      document.join1.submit();
   }
   function reset_form() {
      document.join1.id.value = "";  
      document.join1.pass.value = "";
      document.join1.pass_confirm.value = "";
      document.join1.name.value = "";
      document.join1.email.value = "";
      document.join1.id.focus();
      return;
   }
   function check_id() {
     window.open("check_id.php?id=" + document.join1.id.value,
         "IDcheck",
          "left=700,top=300,width=380,height=160,scrollbars=no,resizable=yes");
   }


</script>
</head>
<html>
<body>
    
<div id="header">
<div id="menu1">
<ul>
<li><a href="index7.php">로그인</a></li>
<li><a href="index5.php">회원가입</a></li>
<li><a href="#">공지사항</a></li>
<li><a href="#">마이페이지</a></li>
<li><a href="#">장바구니</a></li>
</ul>
</div>
<div class="logo">
<a href="index.php"><img src="image/logo.png"></a>
</div>
<div id="menu2">
<ul class="tap1">
    <li class="onepice"><a href="#">원피스</a></li>
    <li><a href="#">아우터</a></li>
    <li><a href="#">스커트</a></li>
    <li><a href="#">팬츠</a></li>
    <li><a href="#">언더웨어</a></li>
    <li><a href="#">전체화면</a></li>
</ul>
</div>
</div>

<div class="join1">
    <div class="join club">
    <body> 
    <form name="join1" action="insert1.php" method="post">
    	<ul class="join_form">
            <li>
                <label class="label">아이디</span>
                <span class="col2"><input type="text" name="id" id="inputbox"></span>
                <span class="col3"><button type="button" onclick="check_id()">중복체크</button></span>                    
            </li>
            <li>
                <label class="label">비밀번호</span>
                <span class="col2"><input type="password" name="pass" id="inputbox"></span>               
            </li>
            <li>
                <label class="label">비밀번호 확인</span>
                <span class="col2"><input type="password" name="pass_confirm" id="inputbox"></span>               
            </li>            
            <li>
                <label class="label">이름</span>
                <span class="col2"><input type="text" name="name" id="inputbox"></span>               
            </li>
            <li>
                <label class="label">이메일</span>
                <span class="col2"><input type="text" name="email" id="inputbox"></span>               
            </li>                        
        </ul>                       
		<ul class="buttons">
	        <li><button type="button" onclick="check_input()"><a>저장하기</a></button></li>
            <li><button type="button" onclick="reset_form()"><a>취소하기</a></button></li>
        </ul>
    </form>
</body>
</html>
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