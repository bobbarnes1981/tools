<form method="POST">
    <label for="">Text</label>
    <br/>
    <textarea name="text"><?php echo $text; ?></textarea>
    <br/>
    <input type="submit" name="encode" value="Encode"/>
</form>
<form method="POST">
    <label for="">Processed Text</label>
    <br/>
    <textarea name="processed_text"><?php echo $processed_text; ?></textarea>
    <br/>
    <input type="submit" name="decode" value="Decode"/>
</form>
<script language="javascript">
    jQuery(document).ready(function(){
        console.log('ready');
    });
</script>