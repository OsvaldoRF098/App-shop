<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generatePDF()
    {
        $trainers = Trainer::select('nombre', 'apellido', 'avatar')->get()->map(function($t) {
            // Ajusta esta ruta según dónde guardes los avatars
            $path = public_path('images/' . $t->avatar);

            if ($t->avatar && file_exists($path)) {
                $mime = mime_content_type($path);
                $t->avatar_base64 = 'data:' . $mime . ';base64,' . base64_encode(file_get_contents($path));
            } else {
                $t->avatar_base64 = null;
            }

            return $t;
        });

        $data = [
            'title' => 'Listado de trainers',
            'date' => date('d/m/Y'),
            'trainers' => $trainers
        ];

        $pdf = Pdf::loadView('MyPDF', $data);

        return $pdf->download('trainers.pdf');
    }
    public function generatePDFById($id)
    {
        $trainer = Trainer::find($id);

        if (!$trainer) {
            abort(404, 'Trainer no encontrado');
        }

        // Ajusta esta ruta según dónde guardes los avatars
        $path = public_path('images/' . $trainer->avatar);

        if ($trainer->avatar && file_exists($path)) {
            $mime = mime_content_type($path);
            $trainer->avatar_base64 = 'data:' . $mime . ';base64,' . base64_encode(file_get_contents($path));
        } else {
            $trainer->avatar_base64 = null;
        }

        $data = [
            'title' => 'Trainer',
            'date' => date('d/m/Y'),
            'trainer' => $trainer
        ];

        $pdf = Pdf::loadView('PDFid', $data);

        return $pdf->download("trainer_{$id}.pdf");
    }
}
