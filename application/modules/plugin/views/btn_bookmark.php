<button title="bookmark" id="bookmark-<?php echo $content_id ?>" data-content="<?php echo $content_id ?>" data-type="<?php echo $type ?>"><i class="icon-bookmark"></i> <span class="badge">0</span></button>
<script type="text/javascript">
    $('#bookmark-<?php echo $content_id ?>').click(function(){
        $('#message').html("Loading Data");
        $('#loading-template').show();
        $('#bookmark-<?php echo $content_id ?>').load("<?php echo site_url('forum/action_broadcast' . '/' . $content_id . '/' . $type) ?>",function(){
            $('#loading-template').hide();            
        });
        return false;
    });
</script>