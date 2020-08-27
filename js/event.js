function onload(){
    var btn=document.getElementsByClassName('btn');
    btn[0].focus();
    var ev=document.getElementById('iframe');
    ev.style.transition="opacity 1s";
    ev.style.opacity="1.0";
    ev.src="./nowEvent.html";
}
function nowEvent(){
    var ev=document.getElementById('iframe');
    ev.src="./nowEvent.html";
}
function shopEvent(){
    var ev=document.getElementById('iframe');
    ev.src="./shopEvent.html";
}
function endEvent(){
    var ev=document.getElementById('iframe');
    ev.src="./endEvent.html";
}
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
