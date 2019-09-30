window.onload = function(){
    var buttons = document.getElementsByClassName('navbutton');
    var title = document.getElementById('title').innerHTML;
    var residenceImageFocus = document.getElementById('residenceImageFocus');

    for(i=0; i<buttons.length; i++){
        if(title.includes(buttons[i].innerHTML)){
            buttons[i].setAttribute('id','navbuttonselected');
            break;
        }
    }

    var residenceImages = document.getElementsByClassName('residenceImage');
    var residenceImageSrc = [];
    for(i=0;i<residenceImages.length;i++) {
        residenceImageSrc[i] = residenceImages[i].getAttribute('src');
        residenceImages[i].setAttribute('imageId', i);
    }

    $(residenceImages).click(function(){
        residenceImageFocus.setAttribute('src',(this.getAttribute('src')));

        var resTextDiv = document.createElement('div');
        var resText = document.createTextNode(this.getAttribute('alt'));
        resTextDiv.setAttribute('id', 'resImageText');
        resTextDiv.appendChild(resText);
        document.getElementById('imageFocusDiv').appendChild(resTextDiv);

        $('#imageShade').fadeIn('100');
        $('#imageFocusDiv').fadeIn('100');

    });

    $('#imageShade, #closeButton').click(function(){
        $('#imageFocusDiv').fadeOut('50');
        $('#imageShade').fadeOut('50');
        setTimeout(function(){
            document.getElementById('imageFocusDiv').removeChild(document.getElementById('resImageText'));
        }, 300);
    });

    $('#closeButton').hover(function(){
        $('#closeButton').attr('src', 'images/closebuttonhover.svg');
    }, function(){
        $('#closeButton').attr('src', 'images/closebutton.svg');
    });

    var facadeheight = document.getElementById('mainwrapperfacade');
    var headerheight = document.getElementById('headerwrapper').offsetHeight;
    var navheight = document.getElementsByClassName('navwrapper');

    facadeheight.style.top = headerheight + navheight[0].offsetHeight + 'px';
    facadeheight.style.height = facadeheight.offsetHeight - facadeheight.offsetTop + 'px';

};