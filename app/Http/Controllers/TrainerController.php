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

            //return $request->all();
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
            // almacena en storage/app/public/avatars
            $file = $request->file('avatar');
            $name=time().$request->file('avatar')->getClientOriginalName();
            $file->move(public_path(). '/images/',$name);
            $trainer->avatar = $name;
        }

        $trainer->save();


        return redirect()->back();
    
 

    }

    public function index()
    {
        //$trainers = Trainer::all();
        //return view('index', compact('trainers'));
       // return response()->json(Trainer::latest()->paginate(10));
    }

    // POST /trainers


    // GET /trainers/{trainer}
    public function show($id)
    {
       // return response()->json($trainer);
       $trainer = Trainer::find($id);
       return view('show', compact('trainer'));
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
    public function destroy($id)
    {
        $trainer = Trainer::find($id);

        if (!$trainer) {
            return 'El registro con ID '.$id.' no existe';
        }

        
        $imagenPath = public_path('images/'.$trainer->avatar);

    
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        if ($trainer->delete()) {
            return redirect()->back();
        } else {
            return 'El registro con ID '.$id.' no se puede eliminar';
        }
       // $trainer->delete();
        //return response()->json(null, 204);
    }
}
