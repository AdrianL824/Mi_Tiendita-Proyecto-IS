let listElements = document.querySelectorAll('.list__button--click');

export const listElementFunction = (listElement) => {
    listElement.classList.toggle('arrow');
    
    let height = 0;
    let menu = listElement.nextElementSibling;
    if(menu.clientHeight == "0"){
        height=menu.scrollHeight;
    }

    menu.style.height = `${height}px`;
}


export const submenuActive = () => {
  listElements.forEach(listElement => {
    listElementFunction(listElement);
  });
}


export const menuAction = () => {
  listElements.forEach(listElement => {
    listElement.addEventListener('click', () => {
        listElementFunction(listElement);
    })
  });
}