<?php require 'views/includes/header.php' ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> feature/Reg_prov-btn_cancel
<script defer type="module">
      
  import { submenuActive } from "./assets/js/menu.js";
  import { deleteUserAlert } from './assets/js/registerValidation.js';

  submenuActive();
  deleteUserAlert();
</script>


<<<<<<< HEAD
=======
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel
<section class="page-content">
  <h2 class="title-page">Lista de usuarios</h2>
  <div class="users-table">
    <table>
      <thead> <!-- encabezado -->
        <tr>
          <th width= "1px">Id</th>
          <th>Nombre/s</th>
          <th>Apellido/s</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>C.I.</th>
          <th>Dirección</th>
          <th>Tipo usuario</th>
          <th width= "3px"></th>
          <th></th>
        </tr>
      </thead>
      <tbody><!-- cuerpo de la lista -->
        <?php foreach($users as $row): ?>
          <tr style="font-size:13px;">
            <th><?= $row['id']?></th>
            <th><?= $row['nombre']?></th>
            <th><?= $row['apellido']?></th>
            <th><?= $row['email']?></th>
            <th><?= $row['telefono']?></th>
            <th><?= $row['ci']?></th>
            <th><?= $row['direccion']?></th>
            <th><?= $row['tipo_usr']?></th>


            <th><a href="<?=RAIZ?>/user-edit.php?id=<?=$row['id']?>" class="users-table--edit">Editar</a></th>
            <th>
<<<<<<< HEAD
              <form action="<?=RAIZ?>/delete.php?id=<?=$row['id']?>&type=users" class="form-users-delete" method="post">
=======
<<<<<<< HEAD
              <form action="<?=RAIZ?>/user-delete.php?id=<?=$row['id']?>" class="from-delete" method="post">
=======
              <form action="<?=RAIZ?>/user-delete.php?id=<?=$row['id']?>" class="form-users-delete" method="post">
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel
                <input type="submit" class="users-table--delete" value="Eliminar" />
              </form>
            </th>   
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<<<<<<< HEAD
=======
<<<<<<< HEAD
<section class="modal ">
  <div class="modal__container">
    <h2 class="modal__title">Eliminar usuario</h2>
    <p class="modal__paragraph">¿Está seguro que desea eliminar este usuario?</p>
    <div class="a"></div>
    <div class="modal_buttons">
      <button class="modal__close">Si</button>
      <button class="modal__close2">No</button>
    </div>
  </div>
</section>
=======
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel

<?php require 'views/includes/footer.php' ?>