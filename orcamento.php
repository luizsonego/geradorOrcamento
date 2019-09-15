<?php 
function clearString($string){
    return str_replace(' ', '-', $string);
}
date_default_timezone_set('America/Sao_Paulo');
// error_reporting(0);
// ini_set(“display_errors”, 0 );
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

// reference the Dompdf namespace
use Dompdf\Dompdf;

    $cliente = $_POST['cliente'];
    $servico = $_POST['servico'];
    $valor = $_POST['valor'];
    
    if(!empty($_FILES['file1']['tmp_name'])){
        // $imagem1 = file_get_contents($_FILES['file1']['tmp_name']);
        $imagem1 = '<img src="data:image/png;base64,'. base64_encode(file_get_contents($_FILES['file1']['tmp_name'])).'" alt=""  style="max-width:350px;height:350px;max-height:400px;">';
    }else{
        $imagem1 = '';
    }
    if(!empty($_FILES['file2']['tmp_name'])){
        // $imagem2 = file_get_contents($_FILES['file2']['tmp_name']);
        $imagem2 = '<img src="data:image/png;base64,'. base64_encode(file_get_contents($_FILES['file2']['tmp_name'])).'" alt="" style="max-width:350px;height:350px;max-height:400px">';
    }else{
        $imagem2 = '';
    }
    if(!empty($_FILES['file3']['tmp_name'])){
        // $imagem3 = file_get_contents($_FILES['file3']['tmp_name']);
        $imagem3 = '<img src="data:image/png;base64,'. base64_encode(file_get_contents($_FILES['file3']['tmp_name'])).'" alt="" style="max-width:350px;height:350px;max-height:400px">';
    }else{
        $imagem3 = '';
    }


    // <td width="50%" height="350px"><img src="data:image/png;base64,'. base64_encode($imagem1).'" alt="" width="350px"></td>

$html ='
    <html>
    <head>
    <link type="text/css" href="style.css" rel="stylesheet"   media="screen"/>
    <meta >
    </head>
    <body>
    <style>
    table tr .imagem{text-align: center}   
    </style>
        <div class="content">    
    
            <table border="0" width="100%">
                <tr>
                    <td class="imagem"><img src="logo.png" alt=""></td>
                    <td>
                        <table width="100%">
                            <tr>
                                <td align="center" colspan="2"><strong>MARCIANO LUCAS DE SOUZA SILVA</strong></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><strong>CNPJ: </strong>29.806.797/0001-09</td>
                            </tr>
                            
                            <tr>
                                <td style="font-size:13px" width="150"><strong>Endereço:</strong>Rua Da Providencia <br><strong>Nº</strong> 306  </td>
                                <td style="font-size:13px"><strong>Cep:</strong>87114-530</td>
                            </tr>
                            <tr>
                                <td style="font-size:13px"><strong>Cidade:</strong>Sarandi - PR</td>
                                <td style="font-size:13px"><strong>Fone:</strong>(44) 9 9804 - 2170</td>
                            </tr>
                            <tr>
                                <td style="font-size:13px"><strong>Bairro:</strong>Bom Pastor</td>
                                <td style="font-size:13px"><strong>Email:</strong>marcio.refrigerar@gmail.com</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <hr>
            <table border="0" width="100%">
                <tr>
                    <td align="center">Orçamento</td>
                </tr>
                <tr>
                    <td align="center"><h3>'.$cliente.'</h3></td>
                </tr>
            </table>
    
            <table border="0" width="100%">
                <tr>
                    
                    <td width="50%" height="30px">'.$imagem1.'</td>
                    <td>
                        <table border="0" height="400px" width="100%">
                            <tr>
                                <td style="vertical-align: top;">'.$servico.'</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: bottom;text-align: right">'.$valor.'</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="50%" height="30px">'.$imagem2.'</td>
                    <td width="50%" height="30px">'.$imagem3.'</td>
                </tr>
            </table>
            
            <table border="0" width="100%">
                <tr>
                    <td align="center">Sarandi '.date('d-m-Y').'</td>
                </tr>
            </table>
    
        </div>
    
     </body>  
     </html>  
';

// echo $html;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
// $dompdf->stream(clearString($cliente.'.pdf'));
$dompdf->stream(clearString($cliente.'-'.base64_encode(date('Ymd')).'.pdf'), array("Attachment"=>0));