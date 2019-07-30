window.onload = function(){
    buttons = document.getElementsByClassName('navbutton');
    title = document.getElementById('title').innerHTML;

    for(i=0; i<buttons.length; i++){
        if(title.includes(buttons[i].innerHTML)){
            buttons[i].setAttribute('id','navbuttonselected');
            break;
        }
    }
}