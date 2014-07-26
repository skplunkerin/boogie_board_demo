    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p><?php echo date('Y'); ?> &copy; Copyright no one at all. Go to town.</p>
          </div>
          <?php require "_nav_foot.inc"; ?>
        </div>
      </div>
    </footer>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/templates/foundation.js"></script>
    <script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
  </body>
</html>
