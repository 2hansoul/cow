<?php
include  $_SERVER['DOCUMENT_ROOT']. "/header/header.php";
include	 $_SERVER['DOCUMENT_ROOT']. "/DB/dbconnMS.php";
?>
aaaaaaaaaaaaaaaaaaaaaaaaaaaa
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script  src="/test/js/test.js"></script>
<script>
$(document).ready(function(){
$(".fadeInfirst").on("keyup",function(){
		var self=$(this);
		var id;
		var zero = 0;
		var one = 1;
		var two = 2;

	if(self.attr("id")==="id"){   //self.attr("id") id에 있는 속성값 가져오기
	   id=self.val();            //id 변수에 값 저장
	}
	console.log(id);
	$.ajax({
		url : "idcheck.php",
		type : "POST",
		data : { id : id} ,
		dataType : "text",
		success :function(data){
			console.log(data);  //data 값 찍어보면 숫자가 나옵니다
		     if(data==zero){
				$('#idcheck').text('');
	  			$('#idcheck').html("<font color='#0821F8'>사용가능한 아이디입니다</font>");
				 }else if(data==one){
						$('#idcheck').text('');
						$('#idcheck').html("<font color='#FF6600'>아이디가 중복입니다</font>");
				 }else if(data==two){
						$('#idcheck').text('');
						$('#idcheck').html("<font color='#FF6600'>아이디는 영문자or숫자로 6자리 이상 입력</font>");
				 }
			 }
   });
});
});
</script>

<!--비밀번호 정규식-->
<script>
$(document).ready(function(){
$('.fodeInsecond').on("keydown",function(){          //pass에 fodeInsecond 를 누르게 되면 이벤트 발생
var preg=/^(?=.*\d)(?=.*[a-zA-Z])[0-9a-zA-Z]{6,}$/;
	 if(preg.test($("input[id='pass']").val())){             //pass입력값 이 정규식에 일치하는지 판단
			$('#pwCheck').text('');
	  		$('#pwCheck').html("<font color='#0821F8'>비밀번호 설정이 적합합니다</font>");

	 }else{
			$('#pwCheck').text('');
		  	$('#pwCheck').html("<font color='#FF6600'>숫자+영문 조합으로 해주세요</font>");
			return true;

	 }

	});
});
/////////////////////////////////////////////////////////////////////////////////////////////////////


</script>

<!--비밀번호체크-->
<script>
$(document).ready(function(){
	$('#pass').keyup(function(){       //#pass 입력하면 pwCheck1에 text에 작성
		$('#pwCheck1').text('');
	});
	$('#passcheck').keyup(function(){    // 위쪽에서 작성후 passcheck 부분에서 입력을 하면 발생
		if($('#pass').val()!=$('#passcheck').val()){ //비번일치하는지 유무판단
			$('#pwCheck1').text('');
	  		$('#pwCheck1').html("<font color='#FF6600'>패스워드 불일치 합니다.</font>");
	 	}else{
		  	$('#pwCheck1').text('');
		  	$('#pwCheck1').html("<font color='#0821F8'>비밀번호 일치함 </font>");
	 	}
	});
 });
</script>
echo "Aaaa";

<!-- 빈칸체크-->
<script>
function check(){

     var f = document.myform;

         if (f.id.value == "") {
            alert("아이디를 입력해주십시오");
            f.id.focus();
            return false;   //다시 참/거짓 판단 flase 반환하여 조건을 다시 판단 하게
        }

		  if (f.pass.value == "") {
            alert("비밀번호를 입력해주세요");
            f.pass.focus();
            return false;
        }


		  if (f.passcheck.value == "") {
            alert("비밀번호를 입력해주세요");
            f.passcheck.focus();
            return false;
        }

		  if (f.name.value == "") {
            alert("이름을 입력해주세요");
            f.name.focus();
            return false;
        }

		  if (f.email.value == "") {
            alert("메일을 입력해주세요");
            f.email.focus();
            return false;
        }

           if (f.emailadress.value == "") {
            alert("이메일을 선택해주세요");
            return false;
        }
}//fucntion
</script>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>




.div_loginmain{
	border: 1px solid #212020;
    width: 444;
    height: 560;
    background-color: yellow;
    text-align: center;
    margin-left: 595px;
}

/*input 부분 */
.tempInput {
    border-top: 1px;
    border-left: 1px;
    border-right: 0px;
    width: 259px;
    height: 28px;
    margin-bottom: -7px;
	text-indent: 28px;
	background-color:yellow;
	border-color:black;
}



.tempInput1 {
    border-top: 1px;
    border-left: 1px;
    border-right: 0px;
    width: 259px;
    height: 28px;
    margin-bottom: 25px;
	text-indent: 28px; /*text입력시 공간 창출*/
	background-color:yellow;
	border-color:black;
	color: blue;

}


.imgmenu1{
	width: 23px;
    position: relative;
    top: 28px;
    right: 120px;
}



.imgmenu2{
   width: 26px;
    position: relative;
    top: 28px;
    right: 121px;
}

.id_rember{
margin-left: -132px;
margin-top: -10px;
}

.login_btn{
    width: 259px;
    height: 37px;
    border: solid;
    border-radius: 8px;
    background-color: #109b10;
    border-color: #109b10;
    font-family: 'Binggrae';
    font-size: 16px;
    color: white;
    font-weight: bolder;

}
input[type="checkbox"]{

    width: 28px;
    height: 15px;
    left: 2px;
    position: relative;
}
</style>


<div class="div_in">
  <div class="div_main">
    <div class="div_loginmain">
      <img  src="../images/menuicon/free-icon-unicorn-4584583.png" style="width: 100;padding-top: 42px;">
      <h2 style="margin-top: 14px;">JOIN</h2>
      <div class="div_login">
        <form method="POST" name="myform" action="loginact.php" onsubmit="return check()">

        <img  id="loginIMG" src="../images/menuicon/free-icon-user-shape-25634.png" class="imgmenu1">

        <div class="input_id">
          <input type="text"  class="tempInput" name="id" id="id" placeholder="userid">
        </div>

        <img id="passIMG"src="../images/menuicon/premium-icon-padlock-3934062.png" class="imgmenu2">
        <div class="input_pass">
          <input type="password"  class="tempInput1" name="password" id="password" placeholder="password">
        </div>

        <div class="id_rember">
          <input type="checkbox"  name="idsave" id="idsave" class="">아이디 저장하기</input>
        </div>
        <div style="padding-top: 38px;padding-bottom: 10px;">
          <input type="submit" class="login_btn" id="" value="로그인">
        </div>
		<div>
		 <a class="" href="Idsearch.php" style="font-family: 'Binggrae';font-size: 15;">아이디찾기</a>
			<a class="" href="Idsearch.php" style="font-family: 'Binggrae';font-size: 15;">비밀번호찾기</a>
		<a class="" href="join.php" style="font-family: 'Binggrae';font-size: 15;">회원가입</a>
		</div>

        </form>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<head>
</html>
















<!--

<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="inactive underlineHover"><a href="login.php"> 로그인 </h2></a>
    <a href="join.php"><h2 class="active">회원가입 </h2></a>



    <!-- Icon -->

     <!-- Login Form -->
	<!--submit버튼을 누르면 onsubmit이 실행되어
		check함수가 실행되고
		check함수의 return 값이 true일 경우에만 폼을 전송합니다.
		onsubmit 이벤트 속성에 들어가는 함수는 반드시
		전송해야 할 경우 true를 반환하고
		하지말아야 할 경우 false를 반환하는 형식이어야 합니다. -->

     <!-- ?php echo htmlspecialchars($_SERVER["PHP_SELF"]); 현재 스크립트의 파일 이름을 반환 한다? 그러면 이페이지에서 작업을 해야 먹히는건데 나는 act로 값을 넘기는데 못 쓰는건가?
    <form name="myform" id="myform" method="POST" onsubmit="return check()" action="joinact.php">
		<p id="idcheck"></p>
      <input type="text"  class="fadeInfirst"  name="id" id="id" maxlength="12" placeholder="아이디" required>
      <input type="password"  class="fodeInsecond" name="pass" id="pass"  maxlength="15" placeholder="비밀번호">
	  <p id="pwCheck"></p>
      <input type="password"  class="fodeInsecond" name="passcheck" id ="passcheck"  maxlength="15" placeholder="비밀번호확인">
	  <p id="pwCheck1"></p>
	  <input type="text" class="fadeIn third" name="name"  placeholder="이름" >
      <input type="text1" class="fadeIn fourth " name="email" placeholder="메일" > @ <select name ="emailadress">
	  <option value ="">메일을 선택해주세요</option>
	  <option value ="naver.com">naver.com</option>
	  <option value ="google.com">google.com</option>
	  <option value ="daum.net">daum.net</option>
	  </select>


      <input type="submit" id="submit" class="fadeIn fourth" value="회원가입">
	  <input type="buttion" value="faf" onclick="test()">
    </form>

    <!-- Remind Passowrd
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  </div>
</div>
</head>
</html>
-->
<!---------------------------footer-------------------->
<!---------------------------footer-------------------->
<!---------------------------footer-------------------->
<?php
include  $_SERVER['DOCUMENT_ROOT']. "/header/footer.php";
?>