<?php if(!defined('BASEPATH')) exit('Direct script access not allowed');?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.js"></script>
<!--    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<?php
if($js_link!="" && is_array($js_link))
    foreach ($js_link as $link)
        echo "<script type='text/javascript' src= '".base_url()."assets/js/".$link."'></script>";
?>
</body>
</html