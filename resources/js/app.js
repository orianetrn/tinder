/*
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
*/

const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');

const lancement = new Date('April 28 2023 12:00:00');

function timer() {
    const currentTime = new Date ();
    const diff = lancement - currentTime ;

    const d = Math.floor(diff / 1000 / 60 / 60 / 24);
    const h = Math.floor(diff / 1000 / 60 / 60) %24;
    const m = Math.floor(diff / 1000 / 60) %60;
    const s = Math.floor(diff / 1000) %60;

    days.innerHTML = d;
    hours.innerHTML = h < 10 ? '0' + h : h ;
    minutes.innerHTML = m < 10 ? '0' + m : m;
    seconds.innerHTML =s < 10 ? '0' + s : s;
}

setInterval(timer, 1000);
