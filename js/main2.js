
const text = document.querySelector('#text1');
const text1 = document.querySelector('.text2');

text.addEventListener('click',() => {
  text1.innerHTML = '아이디를 입력해주세요.';
});

text.addEventListener('keyup',() => {
  text1.innerHTML = '';
});

const text2 = document.querySelector('#text2');
const text3 = document.querySelector('.text3');


text2.addEventListener('click',() => {
  text3.innerHTML = '비밀번호를 입력해주세요.';
});

text2.addEventListener('keyup',() => {
  text3.innerHTML = '';
});

const text4 = document.querySelector('#text3');
const text5 = document.querySelector('.text4');


text4.addEventListener('click',() => {
  text5.innerHTML = '비밀번호 확인을 입력해주세요.';
});

text4.addEventListener('keyup',() => {
  text5.innerHTML = '';
});


const text6 = document.querySelector('#text4');
const text7 = document.querySelector('.text5');


text6.addEventListener('click',() => {
  text7.innerHTML = '이름을 확인해주세요.';
});

text6.addEventListener('keyup',() => {
  text7.innerHTML = '';
});

const text8 = document.querySelector('#text5');
const text9 = document.querySelector('.text6');


text8.addEventListener('click',() => {
  text9.innerHTML = '이메일을 확인해주세요.';
});

text8.addEventListener('keyup',() => {
  text9.innerHTML = '';
});

$(document).ready(function () {
    $('.font2').click(function () {
       $('.page').slideToggle('toggle');
       $('.font2').css('color','red');
       $('.font2').html('내용닫기');
    $('.font2').mouseleave(function () {
        $('.font2').css('color','blue');
        $('.font2').html('내용보기');
    });
    });
});


$(document).ready(function() {
  $('.check-all').click(function() {
    $('.check01').prop('checked', this.checked);
  });
});













