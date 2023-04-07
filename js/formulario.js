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