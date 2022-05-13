<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
    public function generate_pdf()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('mypdf', $data);
        return $pdf->download('itsolutionstuff.pdf');
        
    }
}
