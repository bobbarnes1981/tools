<form method="POST">
    <label for="">Datetime</label>
    <br/>
    <input type="text" name="unixtime" class="datepicker" value=""/>
    <br/>
    <input type="submit" value="Convert"/>
    <br/><label><?php echo $timestamp; ?></label>
</form>
<script language="javascript">
    jQuery(document).ready(function(){
        console.log('ready');
        jQuery('.datepicker').datepicker();
        jQuery('.datepicker').datepicker('setDate', '<?php echo $unixtime; ?>');
    });
</script>