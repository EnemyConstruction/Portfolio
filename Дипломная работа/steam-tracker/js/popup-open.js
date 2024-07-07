const popupButtons = document.querySelectorAll('.button-open');
const body = document.querySelector('body');

let unlock = true;

const popupTimeout = 200;

if(popupButtons.length > 0) {
    for(let popupButton of popupButtons){
        popupButton.addEventListener('click', function (evt) {
            evt.preventDefault();
            const popupName = popupButton.getAttribute('href').replace('#', '');
            const currentPopup = document.getElementById(popupName);
            popupOpen(currentPopup);
        });
    }
}

const popupCloseButtons = document.querySelectorAll('.popup__close');
if(popupCloseButtons.length > 0){
    for(let popupCloseButton of popupCloseButtons){
        popupCloseButton.addEventListener('click', function (evt) {
            evt.preventDefault();
            popupClose(popupCloseButton.closest('.popup'));
        });
    }
}

function popupOpen(currentPopup) {
    if(currentPopup && unlock){
        const popupActive = document.querySelector('.popup.popup--show');
        if(popupActive){
            popupClose(popupActive, false);
        }
        else{
            bodyLock();
        }
        currentPopup.classList.add('popup--show');
        currentPopup.addEventListener('click', function (evt) {
            if(!evt.target.closest('.popup__content')){
                popupClose(evt.target.closest('.popup'));
            }
        });
    }
}

function popupClose(popupActive, doUnlock = true){
    if(unlock) {
        popupActive.classList.remove('popup--show');
        if(doUnlock){
            bodyUnlock();
        }
    }
}

function bodyLock(){
    const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

    body.style.paddingRight = lockPaddingValue;
    body.classList.add('lock');

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, popupTimeout);
}

function bodyUnlock() {
    setTimeout(function() {
        body.style.paddingRight = '0px';
        body.classList.remove('lock');
    }, popupTimeout);

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, popupTimeout);
}

document.addEventListener('keydown', function(evt) {
    if(evt.keyCode === 27){
        const popupActive = document.querySelector('.popup.popup--show');
        popupClose(popupActive);
    }
});