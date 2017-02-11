
        </div>
    </div>
    <?php $footer = $site->find('footer')->content(); ?>
    <div id="footer" class="limit">
        <div class="align-left">
            <?php echo $footer->col1()->kirbytext(); ?>
        </div>
        <div class="align-right">
            <?php echo $footer->col2()->kirbytext(); ?>
        </div>
    </div>
</div>

</body>
</html>