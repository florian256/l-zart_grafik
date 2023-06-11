const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let count = 0;

function slideSuivante(){
    items [count].classList.remove('active');
    if(count < nbSlide -1){
        count++;
    } else { 
        count = 0;
    }
    items[count].classList.add('active')
}

suivant.addEventListener('click' , slidesuivante)
function slideprecedent(){
    items[count].classList.remove('active');
    if (count > 0){
        cont--;

    } else{
        count = nbSlide -1;
    }
    items[count].classList.add('active')
}
precedent.addEventListener('click' , slideprecedent)
