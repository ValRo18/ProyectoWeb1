<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/dompdf/dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

if($_POST['mail']){

	$htmlN2=$_POST['page']?? 'CV1.php';

	

// Guardamos el contenido de contenido.php en la variable html
ob_start();
require $htmlN2;
$html = ob_get_clean();



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();

file_put_contents( "../temp_mail/tmp.png", $output);


}





















 ?>