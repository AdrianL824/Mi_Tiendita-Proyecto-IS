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