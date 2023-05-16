<?php require 'views/includes/header.php' ?>

<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<<< HEAD:views/user-edit.view.php
	<section class="page--content">
		<h1 class= "titulo-seccion" >Editar usuario</h1>
		<form action="" class="formulario" id="formulario" method="POST">
		
			<input type="hidden" name="id" value="<?=$user['id']?>">

========
>>>>>>> feature/Reg_prov-btn_cancel
<script defer type="module">    
  import { submenuActive } from "./assets/js/menu.js"
	import execRegisterValidation, { actionRegister } from "./assets/js/registerValidation.js"
  submenuActive();
	execRegisterValidation(actionRegister);
</script>

<<<<<<< HEAD
	<section class="page--content">
		<h1 class="titulo-seccion" >Formulario de registro</h1>
		<form action="" class="formulario" id="formulario" method="POST">
			
			<section class="formulario-inputs-content">
				<!-- Grupo: Nombre -->
				<div class="formulario__grupo" id="grupo__nombre">
					<div class="contval">
						<label for="nombre" class="formulario__label">Nombre/s</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ingrese nombres">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: apellidos -->
				<div class="formulario__grupo" id="grupo__apellidos">
					<div class="contval">
						<label for="apellidos" class="formulario__label">Apellido/s</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Ingrese apellidos">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
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
					<p class="formulario__input-error"></p>
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
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: tipoUsuario -->
				<div class="formulario__grupo" id="grupo__tipoUsuario">
					<div class="contval">
						<label for="tipoUsuario" class="formulario__label">Tipo de usuario</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
							<option value="" disabled selected>Seleccione tipo usuario</option>
							<option value="Vendedor">Vendedor</option>
							<option value="Almacenero">Almacenero</option>
							<option value="Gerente">Gerente</option>
						</select>
					</div>
					<p class="formulario__input-error"></p>
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
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Contraseña -->
				<div class="formulario__grupo" id="grupo__password">
					<div class="contval">
						<label for="password" class="formulario__label">Contraseña</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="password" class="formulario__input" name="password" id="password" placeholder="Ingrese contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>
				
				<!-- Grupo: Ci -->
				<div class="formulario__grupo" id="grupo__ci">
					<div class="contval">
						<label for="ci" class="formulario__label">C.I.</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="ci" id="ci" placeholder="Ingrese ci">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Contraseña 2 -->
				<div class="formulario__grupo" id="grupo__password2">
					<div class="contval">
						<label for="password2" class="formulario__label">Confirmar contraseña</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="password" class="formulario__input" name="password2" id="password2" placeholder="Ingrese contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
					<div class="campo"><br><br><br>
						* Campo obligatorio
					</div>
				</div>
			</section>
		
			
			<!--Botones en el formulario guardar y cancelar-->
			<div class="formulario-buttons">
=======
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
	<section class="page--content">
		<h1 class= "titulo-seccion" >Formulario de registro</h1>
		<form action="" class="formulario" id="formulario" method="POST">
			
<<<<<<< HEAD
=======
>>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1:views/user-register.view.php
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<div class="contval">
					<label for="nombre" class="formulario__label">Nombre/s</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ingrese nombres">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 2 a 30 carácteres alfabéticos</p>
=======
					<input type="text" class="formulario__input" name="nombre" id="nombre" value="<?=$user['nombre']?>" placeholder="Ingrese nombres">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: apellidos -->
			<div class="formulario__grupo" id="grupo__apellidos">
				<div class="contval">
					<label for="apellidos" class="formulario__label">Apellido/s</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Ingrese apellidos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 2 a 50 carácteres alfabéticos</p>
=======
					<input type="text" class="formulario__input" name="apellidos" id="apellidos" value="<?=$user['apellido']?>" placeholder="Ingrese apellidos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<div class="contval">
					<label for="correo" class="formulario__label">Correo electrónico</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="ejemplo@servidor.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Correo electrónico inválido</p>
=======
					<input type="email" class="formulario__input" name="correo" id="correo" value="<?=$user['email']?>" placeholder="ejemplo@servidor.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: direccion -->
			<div class="formulario__grupo" id="grupo__direccion">
				<div class="contval">
					<label for="direccion" class="formulario__label">Dirección</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Ingrese dirección">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 5 a 100 carácteres alfanuméricos</p>
=======
					<input type="text" class="formulario__input" name="direccion" id="direccion" value="<?=$user['direccion']?>" placeholder="Ingrese dirección">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: tipoUsuario -->
			<div class="formulario__grupo" id="grupo__tipoUsuario">
				<div class="contval">
					<label for="tipoUsuario" class="formulario__label">Tipo de usuario</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<!-- <input type="text" class="formulario__input" name="tipoUsuario" id="tipoUsuario" placeholder="Seleccione tipo usuario"> -->
					<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
						<option value="" disabled selected>Seleccione tipo usuario</option>
=======
<<<<<<<< HEAD:views/user-edit.view.php
					<!-- <input type="text" class="formulario__input" name="tipoUsuario" id="tipoUsuario" placeholder="Seleccione tipo usuario"> -->
					<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
						<option value="<?=$user['tipo_usr']?>" selected><?=$user['tipo_usr']?></option>
========
					<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
						<option value="" disabled selected>Seleccione tipo usuario</option>
>>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1:views/user-register.view.php
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
						<option value="Vendedor">Vendedor</option>
						<option value="Almacenero">Almacenero</option>
						<option value="Gerente Propietario">Gerente propietario</option>
					</select>
				</div>
<<<<<<< HEAD
				<p class="formulario__input-error">El usuario tiene tener un tipo de usuario.</p>
=======
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<div class="contval">
					<label for="telefono" class="formulario__label">Número de teléfono</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Ingrese número">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 7 a 8 carácteres numericos</p>
=======
					<input type="text" class="formulario__input" name="telefono" id="telefono" value="<?=$user['telefono']?>" placeholder="Ingrese número">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<div class="contval">
					<label for="password" class="formulario__label">Contraseña</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="password" class="formulario__input" name="password" id="password" placeholder="Ingrese contraseña">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 6 a 20 carácteres alfanuméricos</p>
=======
					<input type="password" class="formulario__input" name="password" id="password" value="<?=$user['pass']?>" placeholder="Ingrese contraseña">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>
			
			<!-- Grupo: Ci -->
			<div class="formulario__grupo" id="grupo__ci">
				<div class="contval">
					<label for="ci" class="formulario__label">C.I.</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="text" class="formulario__input" name="ci" id="ci" placeholder="Ingrese ci">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 6 a 8 carácteres numéricos</p>
=======
					<input type="text" class="formulario__input" name="ci" id="ci" value="<?=$user['ci']?>" placeholder="Ingrese ci">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<div class="contval">
					<label for="password2" class="formulario__label">Confirmar contraseña</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
<<<<<<< HEAD
					<input type="password" class="formulario__input" name="password2" id="password2" placeholder="Ingrese contraseña">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Las contraseñas no coinciden</p>
=======
					<input type="password" class="formulario__input" name="password2" id="password2" value="<?=$user['pass']?>" placeholder="Ingrese contraseña">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error"></p>
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
				<div class="campo"><br><br><br>
					* Campo obligatorio
				</div>
			</div>
		
			
			<!--Botones en el formulario guardar y cancelar-->
			<div class="hero__texts">
<<<<<<< HEAD
=======
<<<<<<<< HEAD:views/user-edit.view.php
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
				<a href="#" class="hero__cta">Guardar</a>
				<a href="#" class="hero__cta2">Cancelar</a>
			</div>
			


			<!--Seccion de Modales a mostrar-->
			<section class="modal ">
<<<<<<< HEAD
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

=======
                <div class="modal__container">
                    <h2 class="modal__title">Actualizar usuario</h2>
                    <p class="modal__paragraph">¿Está seguro que desea actualizar los datos del usuario?</p>
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
                    <p class="modal3__paragraph">Usuario actualizado exitosamente</p>
                    <div class="close3_modal">x</div>
                </div>
            </section>

			<section class="modal4 ">
                <div class="modal4__container">
                    <p class="modal4__paragraph">Asegúrese de que todos los campos estén llenados correctamente</p>
                    <div class="close4_modal">x</div>
                </div>
            </section>

========
>>>>>>> feature/Reg_prov-btn_cancel
				<button type="submit" class="hero__cta">Guardar</button>
				<button type="button" class="hero__cta2" id="btn-cancel-reset">Cancelar</button>
			</div>
			

<<<<<<< HEAD
=======
>>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1:views/user-register.view.php
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel
		</form>
	</section>

<?php require 'views/includes/footer.php' ?>