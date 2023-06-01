const items = document.querySelectorAll('img');
const nbSlide = items.lenght;
const suivant = document.querySelector('right');
const precedent = document.querySelector ('left');
let count = 0;

function slidesuivante(){
    items[count].classList.remove('active');
    if (count < nbSlide -1){
        count++;

    }else {
        count=0;
    }

    items[count].classList.add('active')
    console.log(count);

    }