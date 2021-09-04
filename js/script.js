$(function(){


class Login{
	constructor(){
		this.en = {loginMent : "loginOK", inputID : "Input ID"};
		this.kr = {loginMent : "로긴", inputID : "ID 입력"};
	}
	
		 
	 loginForm(sendMethod, inId, inMessage){
		let loginFormString = `
			<form action="index.php" method="${sendMethod}">
			<input type="text" class="inId" name="inId" placeholder="${inId}">
			<input type="text" id="inPw"class="inPw" name="inPw" placeholder="pw입력">
			<div id="loginCapArea"></div>
			<input type="submit" id="loginOK" class="submit" name="loginOK" value="${inMessage}">
			</form>
		`;
		return loginFormString;
		}
		 loginProcess(){
			$('#secMain').html(this.loginForm('get', this.en.inputID, this.en.loginMent));
			const loginCap = new Captcha("loginCapArea", "loginCapt")
			loginCap.displayCaptcha("loginOK");
		}
}
class Captcha{
	constructor(captchaArea,loginCapt){
		// 1 -DOM ID, 2-Canvas Id
		this.captchaArea = captchaArea;
		this.loginCapt = loginCapt;
	}
	displayCaptcha(disabledId){ // 1 - DisabledId
		$('#'+disabledId).attr("disabled","disabled");
		$("#"+this.captchaArea).html('<canvas id="'+this.loginCapt+'" class="loginCap"></canvas><input id="valCapt" autocomplete="off" placeholder="Please enter captcha." type="text"><button id="checkCapt" class="checkCapt">캡차확인</button>');
	
		let canvas = document.getElementById(this.loginCapt); 
		let ctx = canvas.getContext("2d"); 
		//Random = 1000~9999
		let cRandom = Math.floor( Math.random()* (9999 - 1000 + 1 )) + 1000;
		ctx.font = "80px Comic Sans MS"; 
		ctx.fillStyle = "red"; ctx.textAlign = "center"; 
		ctx.fillText(cRandom, canvas.width/2, canvas.height/2);
		$('#checkCapt').on("click", function(e){
			let valCapt = $('#valCapt').val();
			if(cRandom == valCapt) {
				$('#'+disabledId).removeAttr("disabled"); 
				$('#valCapt').val("");
				$('#valCapt, #checkCapt').attr("disabled","disabled");
				return false; 
			} else { 
				alert("캡차 오류입니다."); location.href="./index.php";
			} 
			//버튼의 기본 요소인 submit 을 막기 위해 1. e.preventDefault() / 2. return false 중 선택하여 사용함 ()
		});
	}
}
		(function main(){
			const formLogin = new Login();
			formLogin.loginProcess();
		})();
	});


	