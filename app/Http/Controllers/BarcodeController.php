<?php

namespace App\Http\Controllers;

use Milon\Barcode\DNS1D;

class BarcodeController extends Controller
{
    public static function generate($code, $text)
    {
        $barcode = new DNS1D();
        echo $barcode->getBarcodePNG($text, $code);
    }
}
