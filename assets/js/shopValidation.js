import InputValidate, {
    validateEmpty,
    validarSoloNumeros,
    validarMinimo,
    errorVerification,
    onEvent
  } from './regexp.js'
  
  import { confirmModal, alertModal } from './alerts.js'
  // import env from './env.js'
  
  
  const errores = Array.from(document.querySelectorAll('.formulario__input-error'));
  
  // Validaciones de los inputs
  export const validations = (input, index) => ({
  
    names: () => {
      InputValidate(input, index, [
      ], errores)
    },
  
    contenido: () => {
      InputValidate(input, index, [
      ], errores)
    },
  
    product_type: () => {
      InputValidate(input, index, [
      ], errores)
    },
  
    provider_selected: () => {
      InputValidate(input, index, [
        validateEmpty(input),
        validarMinimo(input, 2)
      ], errores)
    },
  
    cantidad: () => {
      InputValidate(input, index, [
        validateEmpty(input),
        validarSoloNumeros(input)
      ], errores)
    },
  
    date_comp: () => {
      InputValidate(input, index, [
        validateEmpty(input)
      ], errores)
    },
  
    date_elb: () => {
      InputValidate(input, index, [
        validateEmpty(input)
      ], errores)
    },
  
    date_venc: () => {
      InputValidate(input, index, [
        validateEmpty(input)
      ], errores)
    },
  
  });
  
  
  export const actionRegister = () => {
  
    const formulario = document.getElementById("formulario");
    const inputs = Array.from(formulario.querySelectorAll('input, select'));
    const btncancel = document.getElementById('btn-cancel-reset');
  
    btncancel?.addEventListener('click', () => {
      alertModal("Cancelado", () => {
        inputs.forEach((input) => {
          if(!input.disabled){
            input.value = '';
          }
        });
      });
    });
  
    formulario?.addEventListener("submit", (e) => {
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
      
      confirmModal('Registrar compra', '¿Está seguro que desea guardar la compra?', confirm);
    });
  }
  
  //Ejecutar validaciones
  export default function execRegisterValidation(action, preload = false){
  
    const formulario = document.getElementById("formulario");
    const inputs = Array.from(formulario.querySelectorAll('input, select'));
  
    onEvent(inputs, validations, preload);
  
    action();
  }
  