const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
let RAIZ = 'http://localhost/Mi_tiendita';

const cleanInput = (formulario) => {
	const form_children = Array.from(formulario.querySelectorAll("input"));
	form_children.forEach((item) => {
		if(item.nodeName === 'INPUT'){
			item.value = '';
		}
	});
}


const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{2,30}$/, // Letras y espacios, pueden llevar acentos.
	apellidos: /^[a-zA-ZÀ-ÿ\s]{2,50}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	direccion:/^[a-zA-Z0-9.#\/\s]{5,100}$/, // Letras y espacios, pueden llevar acentos.
	telefono: /^\d{7,8}$/, // 7 a 8 numeros.
	ci: /^\d{6,8}$/, // 4 a 8 digitos.
	password: /^.{6,20}$/ // 4 a 12 digitos.
}

const campos = {
	nombre: false,
	apellidos: false,
	correo: false,
	direccion: false,
	telefono: false,
	ci: false,
	password: false
}

const validarFormulario = (e) => {
	console.log(e.target);
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellidos":
			validarCampo(expresiones.apellidos, e.target, 'apellidos');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "direccion":
			validarCampo(expresiones.direccion, e.target, 'direccion');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "ci":
			validarCampo(expresiones.ci, e.target, 'ci');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value || inputPassword1.value === "" && inputPassword2.value == ""){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {

	if(location.href !== `${RAIZ}/user-register.php`){
		document.addEventListener("DOMContentLoaded", () => validarFormulario({target: input}));
	}

	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});
