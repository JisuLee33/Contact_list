Login 객체
	==class Login 
	출력 내용이 영문/한글로 자유롭게 변경이 
	가능 할 수 있도록 객체로 구성
	
	==loginForm()
	1 Para(sendMethod) - GET / POST 기술
	2 Para(inId) - en/ko 중 선택하여 inputID 입력할 값
	3 Para(inMessage) - en/ko 중 선택하여 submit value 입력할 값 

	==loginProcess()
	loginForm의 파라미터 값을 정하여 화면에 출력
	캡차의 값을 확인 하기 전까지 loginOK를 할 수 없도록 클래스를 이용해서 처리시킴

	==class Captcha
	1 Para(captchaArea) - 캡차가 들어올 공간의 아이디값을 변수로 지정함
	2 Para(loginCapt) - 캡차의 아이디값을 변수로 지정함

	==displayCaptcha()
	1 Para(disabledId) - (displayCaptcha의 인자인 loginOK의 상태를 
			 변경해 줄 수 있게 지정한 아이디값)->처음생각
			 이용할 수 없는 상태로 변경해주는 변수
=============================================================	
	변수 valCapt - 랜덤으로 출력 된 캡차(cRandom)를 보고 입력한 캡차(#valCapt)의 값
	
	if 문 - 랜덤으로 출력 된 캡차와 입력한 캡차가 같으면 => true
		실행되는 구문으로 
		캡차를 중복하여 입력하는 경우를 막고
		로그인을 실행할 수 있도록 버튼을 활성화 시킴
	
	