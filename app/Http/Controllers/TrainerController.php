<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainerController extends Controller
{
    // GET /trainers
    public function store(Request $request)
    {
        /*
        // Validación
        $data = $request->validate([
            'name'     => ['required','string','max:255'],
            'apellido' => ['required','string','max:255'],
            'avatar'   => ['nullable','image','max:2048'], // 2 MB
        ]);

        $trainer = new Trainer();
        $trainer->nombre   = $data['name'];
        $trainer->apellido = $data['apellido'];

        // Subida opcional del avatar
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars','public');
            $trainer->avatar = $path; // asegúrate de tener esta columna en la tabla
        }

        $trainer->save();

        return 'Guardado';
        */
        return $request->all();
    }

    public function index()
    {
        //$trainers = Trainer::all();
        //return view('index', compact('trainers'));
       // return response()->json(Trainer::latest()->paginate(10));
    }

    // POST /trainers


    // GET /trainers/{trainer}
    public function show(Trainer $trainer)
    {
       // return response()->json($trainer);
    }

    // PUT/PATCH /trainers/{trainer}
    public function update(Request $request, Trainer $trainer)
    {
       /* $data = $request->validate([
            'nombre'   => ['sometimes','required','string','max:100'],
            'apellido' => ['sometimes','required','string','max:100'],
            'avatar'   => ['nullable','string','max:255'],
        ]);

        $trainer->update($data);
        return response()->json($trainer);*/
    }

    // DELETE /trainers/{trainer}
    public function destroy(Trainer $trainer)
    {
       // $trainer->delete();
        //return response()->json(null, 204);
    }
}
