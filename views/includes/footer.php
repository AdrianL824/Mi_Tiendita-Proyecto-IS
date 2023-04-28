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

</body>
</html>