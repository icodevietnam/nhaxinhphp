  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2016 <a href="http://icodingactive.com">Icoding Active Company</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->
<?php
    Assets::js([
    Url::consolePath().'plugins/jQuery/jquery-2.2.3.min.js',
    Url::consolePath().'plugins/jQueryUI/jquery-ui.min.js',
    ]);
?>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<?php
    Assets::js([
    Url::consolePath().'bootstrap/js/bootstrap.min.js',
    Url::consolePath().'plugins/raphael/raphael.min.js',
    Url::consolePath().'plugins/morris/morris.min.js',
    Url::consolePath().'plugins/sparkline/jquery.sparkline.min.js',
    Url::consolePath().'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    Url::consolePath().'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    Url::consolePath().'plugins/knob/jquery.knob.js',
    Url::consolePath().'plugins/moment/moment.min.js',
    Url::consolePath().'plugins/daterangepicker/daterangepicker.js',
    Url::consolePath().'plugins/datepicker/bootstrap-datepicker.js',
    Url::consolePath().'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    Url::consolePath().'plugins/slimScroll/jquery.slimscroll.min.js',
    Url::consolePath().'plugins/fastclick/fastclick.js',
    Url::consolePath().'dist/js/app.min.js',
    Url::consolePath().'dist/js/pages/dashboard.js',
    Url::consolePath().'dist/js/demo.js'
    ]);
?>
</body>
</html>
