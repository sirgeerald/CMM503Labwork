/**
 * Created by Sir on 16/03/2017.
 */

document.getElementById('toggleProfile').addEventListener('click', function () {
    [].map.call(document.querySelectorAll('.profile'), function(el) {
        el.classList.toggle('profile--open');
    });
});

document.getElementById('toggleProfileStd').addEventListener('click', function () {
    [].map.call(document.querySelectorAll('.profile'), function(el) {
        el.classList.toggle('profile--open');
    });
});

function SwitchButtons(buttonId) {
    var hideBtn, showBtn, menuToggle;
    if (buttonId == 'button1') {
        menuToggle = 'menu2';
        showBtn = 'button2';
        hideBtn = 'button1';
    } else {
        menuToggle = 'menu3';
        showBtn = 'button1';
        hideBtn = 'button2';
    }

    document.getElementById(hideBtn).style.display = 'none'; //step 2 :additional feature hide button
    document.getElementById(showBtn).style.display = ''; //step 3:additional feature show button
}