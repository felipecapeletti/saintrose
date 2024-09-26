<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    public function criarprojeto(Request $request)
        {
            $validatedData = $request->validate([
                'capa' => 'required|image',
                'fotos' => 'required|array',
                'fotos.*' => 'image',  
                'categoria' => 'required|string',
                'modelo' => 'required|string',
                'ano' => 'required|numeric',
                'potencia' => 'nullable|string',
                'motor' => 'nullable|string',
                'tipo' => 'nullable|string',
                'pintura' => 'nullable|string',
                'suspensao' => 'nullable|string',
                'rodas' => 'nullable|string',
                'modificacoes' => 'nullable|string',
            ]);

    
            $capaPath = $request->file('capa')->store('projetos/capas', 'public');

            if (is_array($request->file('fotos'))) {
                $fotosPaths = [];
                foreach ($request->file('fotos') as $foto) {
                    $fotosPaths[] = $foto->store('projetos/fotos', 'public');
                }
            } else {

                $fotosPaths = [];
            }

            Projeto::create([
                'user_id' => Auth::id(),
                'capa' => $capaPath,
                'fotos' => json_encode($fotosPaths),  
                'categoria' => $validatedData['categoria'],
                'modelo' => $validatedData['modelo'],
                'ano' => $validatedData['ano'],
                'potencia' => $validatedData['potencia'] ?? null,
                'motor' => $validatedData['motor'] ?? null,
                'tipo' => $validatedData['tipo'] ?? null,
                'pintura' => $validatedData['pintura'] ?? null,
                'suspensao' => $validatedData['suspensao'] ?? null,
                'rodas' => $validatedData['rodas'] ?? null,
                'modificacoes' => $validatedData['modificacoes'] ?? null,
            ]);

            return redirect('/meus-projetos');
        }

}
