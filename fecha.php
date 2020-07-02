<?php

$fecha_actual = date("d-m-Y");
//sumo 1 día
echo date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 
//resto 1 día



?>