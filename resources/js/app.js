import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine?.start();


const year = document.getElementById('yearCopyright');

const date = new Date().getFullYear();

if(year){
    year.textContent = date;
}
