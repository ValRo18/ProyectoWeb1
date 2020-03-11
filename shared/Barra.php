<?php
require_once '../vendor/autoload.php';
require_once 'guard.php';

?>
  <link rel="stylesheet" href="../css/Barra.css">

  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <ul id="nav-mobile" class="navbar">
        <li><a class="btn-download" href="javascript:void(0)" >Descargar PDF</a></li>

        <li><a  class="btn-send" onclick = "location.href='Email.php'">Send Email</a></li>
        
      </ul>
    </div>
  </nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script> 

<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script src="Canvas2image.js"></script>  

<script type="text/javascript">
  document.querySelector(".btn-download").addEventListener("click", function(){
    var doc = new jsPDF("p", "mm", "a4");
    html2canvas(document.querySelector('.container')).then(function(canvas){
      var imgData = canvas.toDataURL('image/png');
      var pageHeight = 300;
      var imgWidth = 200; 
      var imgHeight = canvas.height * imgWidth / canvas.width;
      var heightLeft = imgHeight;
      var position = 15;

      doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
      heightLeft -= pageHeight;

      while (heightLeft >= 0) {
          position = heightLeft - imgHeight;
          doc.addPage();
          doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
          heightLeft -= pageHeight; 
      }
      doc.output('dataurlnewwindow');
      doc.save('curriculum.pdf');
    });
  });
</script>



