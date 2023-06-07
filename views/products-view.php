<?php require 'views/includes/header.php' ?>

<script defer type="module">
      
  import { submenuActive } from "./assets/js/menu.js";
  import { deleteProviderAlert } from './assets/js/productValidation.js';

  submenuActive();
  deleteProviderAlert();
</script>


<section class="page-content">
  <h2 class="title-page">Lista de productos</h2>
  <div class="users-table">
    <table>
      <thead> <!-- encabezado -->
        <tr>
          <th width= "1px">Id</th>
          <th>Nombre</th>
          <th>Contenido neto</th>
          <th>Tipo de producto</th>
          <th>Foto</th>
          <th>Cantidad</th>
          <th></th>
        </tr>
      </thead>
      <tbody><!-- cuerpo de la lista -->
        <?php foreach($products as $row): ?>
          <tr style="font-size:13px;">
            <th><?=$row['id']?></th>
            <th><?=$row['names']?></th>
            <th><?=$row['content']?> <?=$row['unit']?></th>
            <th><?=$row['product_type']?></th>
            <th><img src="<?=RAIZ?>/store/products/<?=$row['thumb']?>" alt="<?=$row['names']?>"></th>
            <th><?=countShop($row['id'])?></th>

            <th>
              <div class="tr-action--options">
                <a href="<?=RAIZ?>/shopping.php?id=<?=$row['id']?>" class="users-table--add">Añadir</a>
                <a href="<?=RAIZ?>/product-edit.php?id=<?=$row['id']?>" class="users-table--edit">Editar</a>
                <form action="<?=RAIZ?>/delete.php?id=<?=$row['id']?>&type=products" class="form-users-delete" method="post">
                  <input type="submit" class="users-table--delete" value="Eliminar" />
                </form>
              </div>
            </th>   
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>


<?php require 'views/includes/footer.php' ?>