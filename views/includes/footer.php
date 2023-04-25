<<<<<<< HEAD
    </main>
  </div>

  
  <script src="<?=RAIZ?>/assets/js/main.js"></script>
  <script src="<?=RAIZ?>/assets/js/formulario.js"></script>
  <script src="<?=RAIZ?>/assets/js/botonEditar.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
=======
   </main>
  </div>


  <script type="module">
    import { menuAction } from "./assets/js/menu.js";
    menuAction();
  </script>

  <?php if(isset($_GET['pop'])): ?>
    <script type="module">
      import { alertModal, getParams } from "./assets/js/alerts.js";
      const msg = getParams('pop');
      alertModal(msg);
    </script>
  <?php endif; ?>

>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
</body>
</html>