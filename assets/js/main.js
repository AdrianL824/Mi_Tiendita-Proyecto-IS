let listElements = document.querySelectorAll('.list__button--click');
let RAIZ_2 = 'http://localhost/ProyectoIS/Mi_Tiendita-Proyecto-IS';


const listElementFunction = (listElement) => {
    listElement.classList.toggle('arrow');
    
    let height = 0;
    let menu = listElement.nextElementSibling;
    if(menu.clientHeight == "0"){
        height=menu.scrollHeight;
    }

    menu.style.height = `${height}px`;
}


if(`${RAIZ_2}/user-register.php` === location.href ||
    `${RAIZ_2}/users.php` === location.href){
    listElements.forEach(listElement => {
        listElementFunction(listElement);
    });
}

listElements.forEach(listElement => {
    listElement.addEventListener('click', () => {
        listElementFunction(listElement);
    })
});