function ham(){
    document.getElementById('myNav').style.display='flex';
    document.getElementById('wrap').style.display='none';
    document.getElementById('wrap2').style.display='flex';
}
function ham2(){
    document.getElementById('myNav').style.display='none';
    document.getElementById('wrap2').style.display='none';
    document.getElementById('wrap').style.display='flex';
}

function doc(){
    var pro;
    var pw='2222';
    pro=prompt("회원창입니다.\n비밀번호를 입력하세요",'');
    if(pro==pw){
        open('about:self').location.href="./document.html";
    }else{
        alert('비밀번호가 맞지 않습니다.');
    }
}
