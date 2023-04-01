let bandera = true;
if(bandera){
    const openModal = document.querySelector('.hero__cta');
    const modal = document.querySelector('.modal');
    const closeModal1 = document.querySelector('.modal__close');
    const closeModal2 = document.querySelector('.modal__close2');

    /*var btn = document.getElementsByClassName('.modal__close');*/

    openModal.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.add('modal--show');
    });

    closeModal1.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.remove('modal--show'); 
    });

    closeModal2.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.remove('modal--show');
    });
    
}

const openModal2 = document.querySelector('.hero__cta2');
const modal2 = document.querySelector('.modal2');
const closeModal21 = document.querySelector('.close_modal');

openModal2.addEventListener('click', (e)=>{
    e.preventDefault();
    modal2.classList.add('modal2--show');
});

closeModal21.addEventListener('click', (e)=>{
    e.preventDefault();
    modal2.classList.remove('modal2--show');
});