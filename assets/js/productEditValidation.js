import InputValidate, { 
    validarSoloLetras,
    validarLetrasNumerosEspeciales,
    validarMinimo,
    validarMaximo,
    validateEmpty,
    validarSoloNumeros,
    emptyFile,
    errorVerification,
    onEvent
  } from './regexp.js'
  
  import { confirmModal, alertModal } from './alerts.js'
  import env from './env.js'
  
  
  const errores = Array.from(document.querySelectorAll('.formulario__input-error'));
  
  // Validaciones de los inputs
  export const validations = (input, index) => ({
  
    names: () => {
      InputValidate(input, index, [
        validarSoloLetras(input),
        validarMinimo(input, 2),
        validarMaximo(input, 50)
      ], errores)
    },
  
    marca: () => {
      InputValidate(input, index, [
        validarLetrasNumerosEspeciales(input),
        validarMinimo(input, 2),
        validarMaximo(input, 30)
      ], errores)
    },
  
    imagen: () => {
      InputValidate(input, index, [], errores)
    },
  
    product_type: () => {
      InputValidate(input, index, [
        validateEmpty(input),
      ], errores)
    },
  
    cantidad: () => {
      InputValidate(input, index, [
        validateEmpty(input),
        validarSoloNumeros(input),
        validarMinimo(input, 1),
        validarMaximo(input, 3)
      ], errores)
    },
  
    unit_type: () => {
      InputValidate(input, index, [
        validateEmpty(input)
      ], errores)
    },
  
  });
  
  
  export const actionRegister = () => {
  
    const formulario = document.getElementById("formulario");
    const inputs = Array.from(formulario.querySelectorAll('input, select'));
    const btncancel = document.getElementById('btn-cancel-reset');
  
    btncancel.addEventListener('click', () => {
      alertModal("Cancelado", () => {
        inputs.forEach((input) => {
          if(input.type === 'file'){
            let preview = document.getElementById("previewImage");
            let customText = document.getElementById("customText");
            preview.setAttribute("src", "./assets/img/not-select.png");
            customText.textContent = "Sin archivos seleccionados";
  
            input.value = '';
          }else{
            input.value = '';
          }
        });
      });
    });
  
    formulario.addEventListener("submit", (e) => {
      e.preventDefault();
      const confirm = () => {
        const formulario = document.getElementById("formulario");
        const inputs = Array.from(formulario.querySelectorAll('input, select'));
        inputs.forEach((input, index) => {
          validations(input, index)[input.name]();
        });
        
        if(!errorVerification(inputs)){
          alertModal("Asegúrese de que todos los campos estén llenados correctamente");
        }else{
          formulario.submit();
        }
      }
      
      confirmModal('Registrar producto', '¿Está seguro que desea guardar el producto?', confirm);
    });
  }
  
  
  export const actionUpdate = () => {
  
    const formulario = document.getElementById("formulario");
    const btncancel = document.getElementById('btn-cancel-reset');
  
    btncancel.addEventListener('click', () => {
      alertModal("Cancelado", () => {
        window.location.href = `${env.host}/products.php`;
      });
    });
  
    formulario.addEventListener("submit", (e) => {
      e.preventDefault();
      const confirm = () => {
        const formulario = document.getElementById("formulario");
        const inputs = Array.from(formulario.querySelectorAll('input, select'));
        inputs.forEach((input, index) => {
          validations(input, index)[input.name]();
        });
        
        if(!errorVerification(inputs)){
          alertModal("Asegúrese de que todos los campos estén llenados correctamente");
        }else{
          formulario.submit();
        }
      }
  
      const canceled = () => {
        alertModal("Cancelado", () => {
          window.location.href = `${env.host}/products.php`;
        });
      }
      
      confirmModal('Actualizar usuario', '¿Está seguro que desea actualizar los datos del usuario?', confirm, canceled);
    });
  }
  
  
  export const deleteProviderAlert = () => {
    const forms = Array.from(document.getElementsByClassName('form-users-delete'));
  
    forms.forEach((item) => {
      item.addEventListener('submit', (e) => {
        e.preventDefault();
  
        const confirm = () => { item.submit();}
        const cancel = () => {
          alertModal('Cancelado');
        }
  
        confirmModal('Eliminar producto', '¿Está seguro que desea eliminar este producto?', confirm, cancel);
      });
    });
  }
  
  
  //Ejecutar validaciones
  export default function execRegisterValidation(action, preload = false){
  
    const formulario = document.getElementById("formulario");
    const inputs = Array.from(formulario.querySelectorAll('input, select'));
  
    onEvent(inputs, validations, preload);
  
    action();
  }
  
  