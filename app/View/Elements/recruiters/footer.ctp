<?php

echo $this->Html->script('js/demo/moment.latest.min.js') ?>
            <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
            <?php echo $this->Html->script('js/circularprogress.jquery.js') ?> 

<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script>
    $('.phone').inputmask("1-(999) 999-9999");
</script>

<script>
    window.onscroll = function () {
        var el = document.getElementById('sticky'),
                s = window.pageYOffset || document.documentElement.scrollTop, // how much page is scrolled
                t = document.getElementById('main').getBoundingClientRect().top; // top of main div
        if (s > t) {
            el.style.position = 'fixed'; //make position fixed instead of absolute
        } else {
            el.style.position = ''; //clear styles if back to original position
        }
    }
</script>

        <?php echo $this->Html->script('js/bootstrap.min.js') ?>