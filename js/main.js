//scroll up button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("upArrID").style.display = "block";
    } else {
        document.getElementById("upArrID").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function bottomFunction() {
    window.scrollTo(0, document.body.scrollHeight);
}

// COST SLIDER

function outputUpdate(vol) {
    var output = document.querySelector('#volume');
    output.value = vol;
    output.style.left = vol;
}


// POP UPы

// const popupLinks = document.querySelectorAll('.popup-link');
// const body = document.querySelector('body');
// const lockPadding = document.querySelectorAll('.lock-padding');
// let unlock = true;
// const timeout = 300;
// if(popupLinks.length > 0) {
//     for(let index = 0; index < popupLinks.length; index++){
//         const popupLink = popupLinks[index];
//         popupLink.addEventListener("click", function(e){
//             const popupName = popupLink.getAttribute('href').replace('#', '');
//             const curentPopup = document.getElementById(popupName);
//             popupOpen(curentPopup);
//             e.preventDefault();
//         })
//     }
// }
// const popupCloseIcon = document.querySelectorAll('.close-popup');
// if(popupCloseIcon.length > 0){
//     for (let index = 0; index < popupCloseIcon.length; index++) {
//         const el = popupCloseIcon[index];
//         el.addEventListener("click", function(e){
//             popupCloseIcon(el.closest('.popup'));
//             e.preventDefault();
//         })
        
//     }
// }
// function popupOpen(curentPopup){
//     if(curentPopup && unlock){
//         const popupActive = document.querySelector('.popup.oppop');
//         if(popupActive){
//             popupClose(popupActive, false);
//         } else {
//             bodyLock();
//         }
//         curentPopup.classList.add('oppop');
//         curentPopup.addEventListener("click", function (e){
//             if(!e.target.closest('.popup-right__body')){
//                 popupClose(e.target.closest('.popup'));
//             }
//         })
//     }
// }
// function popupClose(popupActive, doUnlock = true) {
//     if(unlock){
//         popupActive.classList.remove('oppop');
//         if(doUnlock) {
//             bodyUnLock();
//         }
//     }
// }
