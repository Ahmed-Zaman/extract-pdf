<?php

namespace App\Http\Controllers;

use Spatie\PdfToText\Pdf;
use Illuminate\Http\Request;
// use Smalot\PDFParser\Parser;
// require 'vendor/autoload.php';
// use PDFParser;
// use Smalot\PdfParser\Parser;
use thiagoalessio\TesseractOCR\TesseractOCR;

class PdfToTextController extends Controller
{

// better result with tables
    public function smalotConvert()
    {
        // $pdfFile = 'Sddd.pdf'; // Replace with the path to your PDF file

        // $parser = new Parser();

        // $pdf = Parser::parseFile($pdfFile);
        // $text = $pdf->getText();

    //    phpinfo();

        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile('shadow_self.pdf');
        $text = $pdf->getText();

        return view('pdf_to_text', compact('text'));
    }

    public function spatieConvert() {

        // Easy way
        // $text = (new Pdf())
        // ->setPdf('16 Monroe Place - Setup  copy.pdf')
        // ->text();
        // return $text;

        // or more easier way
        // $text =  Pdf::getText('16 Monroe Place - Setup  copy.pdf');
        // $text = (new Pdf())->setPdf('16 Monroe Place - Setup  copy.pdf')->text();
        $text = (new Pdf())->setPdf('shadow_self.pdf')->text();
        return view('pdf_to_text', compact('text'));
    }

    public function ocrConvert() {
        echo (new TesseractOCR('pdf-img.png'))
    ->run();
    }
}
