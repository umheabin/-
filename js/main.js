const phoneNumberText = document.querySelector('#phoneNumberText');

const warningMessage = document.querySelector('#warningMessage');

phoneNumberText.addEventListener('keyup',() =>{
    const phoneNumber = phoneNumberText.value;

    const trimmedPhoneNumber = phoneNumber.replace(/-/g,'');

    if(/^[0][0-9]{9,10}$/.test(trimmedPhoneNumber) === false){
        warningMessage.innerText = '전화번호의 형식에 맞춰 입력해주세요.';
    } else {
        warningMessage.innerText = '';
    }
});


document.querySelector('.sale button').addEventListener('click',() =>{
    alert('로그인 후 발급받을 수 있습니다.');
});