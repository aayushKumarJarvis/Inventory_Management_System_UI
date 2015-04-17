<?php if(!defined('BASEPATH')) exit('Direct script access not allowed');?>

<script type="text/javascript" src= <?php echo base_url()."assets/js/jquery-2.0.0.min.js";?>></script>
<script type="text/javascript" src= <?php echo base_url()."assets/js/bootstrap/bootstrap.min.js";?>></script>

<?php
if($js_link!="" && is_array($js_link)) {
    foreach ($js_link as $link) {
        echo "<script type='text/javascript' src= '".base_url()."assets/js/".$link."'></script>";
    }
}
else if ($js_link!="" ) {
    echo "<script type='text/javascript' src= '".base_url()."assets/js/".$js_link."'></script>";
}
?>
<script type="text/javascript">
    $(document).ready(function(){
        <?php echo $js; ?>
    });
</script>