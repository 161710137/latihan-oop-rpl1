<?php
require_once 'bio.php';

$namanya = new bio('Salman','Bandung','X RPL 1','Menikah');
echo "namanya...".$namanya->get_bio().'<br>';
echo "tempat lahir...".$namanya->get_tlh().'<br>';
echo "kelas...".$namanya->get_kls().'<br>';
echo "status...".$namanya->get_stts().'<br>';

?>