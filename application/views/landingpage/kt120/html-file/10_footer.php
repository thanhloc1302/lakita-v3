<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
        </div>
    </div>
</div>

<!-- html5 player (start) -->

<script src="https://lakita.vn/styles/html5/build/mediaelement-and-player.min.js"></script>
<link rel="stylesheet" href="https://lakita.vn/styles/html5/build/mediaelementplayer.min.css" />
<script>
    $('audio,video').mediaelementplayer({
        success: function (player, node) {
            $('#' + node.id + '-mode').html('mode: ' + player.pluginType);
        }
    });

</script>

<!-- html5 player (end) -->