<form method="POST">
    <label for="">Encoded (base64)</label>
    <br/>
    <input type="text" name="encoded" class="" value="<?php echo $encoded; ?>"/>
    <br/>
    <label for="">Hex key</label>
    <br/>
    <input type="text" name="hexkey" class="" value="<?php echo $hexkey; ?>"/>
    <br/>
    <label for="">Nonce (base64)</label>
    <br/>
    <input type="text" name="nonce" class="" value="<?php echo $nonce; ?>"/>
    <br/>
    <input type="submit" value="Decode"/>
    <br/><label><?php echo $result; ?></label>
</form>
