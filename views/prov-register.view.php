<?php require 'views/includes/header.php' ?>

	<section class="page--content">
		<h1 class= "titulo-seccion" >Formulario de registro</h1>
		<form action="" class="formulario" id="formulario" method="POST">
			
			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<div class="contval">
					<label for="nombre" class="formulario__label">Nombre proveedor</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ingrese nombres">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 2 a 30 carácteres alfabéticos</p>
			</div>

            
			<!-- Grupo: direccion -->
			<div class="formulario__grupo" id="grupo__direccion">
				<div class="contval">
					<label for="direccion" class="formulario__label">Dirección</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Ingrese dirección">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 5 a 100 carácteres alfanuméricos</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<div class="contval">
					<label for="correo" class="formulario__label">Correo electrónico</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="ejemplo@servidor.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Correo electrónico inválido</p>
			</div>

            
			<!-- Grupo: sitio web -->
			<div class="formulario__grupo" id="grupo__apellidos">
				<div class="contval">
					<label for="apellidos" class="formulario__label">Sitio web</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Ingrese sitio web">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 2 a 50 carácteres alfabéticos</p>
			</div>

			<!-- Grupo: tipoProducto -->
			<div class="formulario__grupo" id="grupo__tipoUsuario">
				<div class="contval">
					<label for="tipoUsuario" class="formulario__label">Tipo de producto</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<!-- <input type="text" class="formulario__input" name="tipoUsuario" id="tipoUsuario" placeholder="Seleccione tipo usuario"> -->
					<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
						<option value="" disabled selected>Seleccione tipo usuario</option>
						<option value="Vendedor">Vendedor</option>
						<option value="Almacenero">Almacenero</option>
						<option value="Gerente">Gerente</option>
					</select>
				</div>
				<p class="formulario__input-error">El usuario tiene tener un tipo de usuario.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<div class="contval">
					<label for="telefono" class="formulario__label">Número de teléfono</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Ingrese número">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 7 a 8 carácteres numericos</p>
			</div>
		
			
			<!--Botones en el formulario guardar y cancelar-->
			<div class="hero__texts">
				<a href="#" class="hero__cta">Guardar</a>
				<a href="#" class="hero__cta2">Cancelar</a>
			</div>
			


			<!--Seccion de Modales a mostrar-->
			<section class="modal ">
				<div class="modal__container">
					<h2 class="modal__title">Registrar usuario</h2>
					<p class="modal__paragraph">¿Está seguro que desea guardar el usuario?</p>
					<div class="a"></div>
					<div class="modal_buttons">
						<button class="modal__close">Si</button>
						<button class="modal__close2">No</button>
					</div>
				</div>
			</section>
        
			<section class="modal2 ">
				<div class="modal2__container">
					<p class="modal2__paragraph">Cancelado</p>
					<div class="close_modal">x</div>
				</div>
			</section>

			<section class="modal3 ">
				<div class="modal3__container">
					<p class="modal3__paragraph">Usuario guardado exitosamente</p>
					<div class="close3_modal">x</div>
				</div>
			</section>

			<section class="modal4 ">
				<div class="modal4__container">
					<p class="modal4__paragraph">Asegúrese de que todos los campos estén llenados correctamente</p>
					<div class="close4_modal">x</div>
				</div>
			</section>

		</form>
	</section>

<?php require 'views/includes/footer.php' ?>