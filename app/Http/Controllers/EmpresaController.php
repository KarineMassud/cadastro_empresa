// app/Http/Controllers/EmpresaController.php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Segmento;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    // Exibi o formulário
    public function create()
    {
        $segmentos = Segmento::all(); // Obtém os segmentos do banco
        return view('empresas.cadastro', compact('segmentos')); // Passa os segmentos para a view
    }

    // Método para salvar os dados no banco
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'estado' => 'required',
            'whatsapp' => 'required',
            'cnpj' => 'required|unique:empresas',
            'segmento_id' => 'required',
        ]);

        // Cria  empresa com os dados do formulário
        Empresa::create($request->all());

        // Redireciona para a página de cadastro com uma mensagem de sucesso
        return redirect()->route('empresas.create')->with('success', 'Empresa cadastrada com sucesso!');
    }
}
