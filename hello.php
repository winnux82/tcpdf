<?php

require __DIR__ . '/vendor/autoload.php';


$pdf = new TCPDF();
$pdf->AddPage();
$pdf->Write(1, 'Hello world');
$pdf->Output('hello_world.pdf');
