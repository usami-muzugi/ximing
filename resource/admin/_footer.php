
<footer class="main-footer">
    <div class="pull-right hidden-xs">
         Processed in：<?php
        $Runtime->Stop();
        echo $Runtime->SpendTime()."ms";
        ?>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#"><?php echo $site_name;  ?></a> </strong>
            All rights reserved.  Powered by  <b>ss-panel</b><?php echo $version; ?>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258346828'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1258346828%26show%3Dpic2' type='text/javascript'%3E%3C/script%3E"));</script>
</footer>
</div><!-- ./wrapper -->
<?php
include_once '../ana.php';
?>

<!-- jQuery 2.1.3 -->
<script src="../asset/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="../asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../asset/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="../asset/js/app.min.js" type="text/javascript"></script>
</body>
</html>
