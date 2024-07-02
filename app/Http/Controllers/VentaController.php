<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use PDF;

class VentaController extends Controller
{
    public function imprimirTicket($id)
    {
        $venta = Venta::with('productos', 'cliente')->findOrFail($id);
    
        $pdf = PDF::loadView('pdf.ticket', compact('venta'));
    
        return $pdf->download('ticket_venta_'.$id.'.pdf');
    }
}
