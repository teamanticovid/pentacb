<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+14752644330"><?php  echo $_POST['To'];?></Dial>
</Response>
