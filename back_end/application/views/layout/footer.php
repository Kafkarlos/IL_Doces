<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block">Copyright ©<?php echo date('Y') ?> ThemeKit v2.0. All
            Rights Reserved.</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customização <a href="#" class="text-dark"
                target="_blank">Tópicos especiais em informática</a></span>
    </div>
</footer>
</div>
<script src="<?php echo base_url('public/'); ?>src/js/vendor/jquery-3.3.1.min.js"></script>'
<script src="<?php echo base_url('public/'); ?>src/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="<?php echo base_url('public/'); ?>src/js/vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('public/'); ?>plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url('public/'); ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('public/'); ?>plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url('public/'); ?>plugins/screenfull/dist/screenfull.js"></script>

<script src="<?php echo base_url('public/'); ?>dist/js/theme.min.js"></script>
<?php if (isset($scripts)) : ?>
    <?php foreach ($scripts as $script) : ?>
        <script src="<?php echo base_url('public') . $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>


</html>