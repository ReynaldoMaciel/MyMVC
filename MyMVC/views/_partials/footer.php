<footer class="rm-container rm-center rm-dark-grey">
    <div class="rm-row rm-padding-24">
        <div class="rm-col sm12">
            <img src="<?= INCLUDE_PATH ?>/img/logo-mymvc.fw.png" />
        </div>
    </div>
</footer>
<div class="rm-container rm-center rm-black">
    <div class="xs1">
        <div class="rm-col sm12 text-center rm-padding-24" >
            <p class="font2 font-bold margintop2">
                <?php
                $date = getdate();
                echo $date['year'] . " - MyMVC Framework";
                ?>
            </p>
        </div>
    </div>
</div>
</body>
</html>