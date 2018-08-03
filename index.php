<?php 

$salida = shell_exec('./optimize_pdf.sh -s 903_NA.pdf -o output.pdf');
if(empty($salida)){
    echo "PDF generado correctamente.";
}else{
    echo "Error.";
}
