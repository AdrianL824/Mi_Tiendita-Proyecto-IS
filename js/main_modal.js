let bandera = true;
if(bandera){
    const openModal = document.querySelector('.hero__cta');
    const modal = document.querySelector('.modal');
    const openModal1 = document.querySelector('.modal__close');
    const closeModal2 = document.querySelector('.modal__close2');


    openModal.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.add('modal--show');
    });

    openModal1.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.remove('modal--show');
        const modal3 = document.querySelector('.modal3');
        modal3.classList.add('modal3--show');
            const closeModal3 = document.querySelector('.close3_modal');
            closeModal3.addEventListener('click', (e)=>{
                e.preventDefault();
                modal3.classList.remove('modal3--show');
            });

    });

    closeModal2.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.remove('modal--show');
        const modal22 = document.querySelector('.modal2');
        modal22.classList.add('modal2--show');
            const closeModal22 = document.querySelector('.close2_modal');
            closeModal22.addEventListener('click', (e)=>{
                e.preventDefault();
                modal22.classList.remove('modal2--show');
            });
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