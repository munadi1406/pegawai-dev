import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const year = document.getElementById('yearCopyright');
console.log(year);

const date = new Date().getFullYear();
console.log(date);

year.textContent = date;
