<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $Pertanyaans = Pertanyaan::all();

        return view('Pertanyaans.index', compact('Pertanyaans'));
    }

    public function create()
    {
        return view('Pertanyaans.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis' => 'required',
            'pertanyaan' => 'required',
        ]);

        Pertanyaan::create($data);

        return redirect()->route('Pertanyaans.index')->with('success', 'Pertanyaan berhasil dibuat!');
    }

    public function edit(Pertanyaan $Pertanyaan)
    {
        return view('Pertanyaans.edit', compact('Pertanyaan'));
    }

    public function update(Request $request, Pertanyaan $Pertanyaan)
    {
        $data = $request->validate([
            'jenis' => 'required',
            'pertanyaan' => 'required',
        ]);

        $Pertanyaan->update($data);

        return redirect()->route('Pertanyaans.index')->with('success', 'Pertanyaan berhasil diedit!');
    }

    public function destroy(Pertanyaan $Pertanyaan)
    {
        $Pertanyaan->delete();

        return redirect()->route('Pertanyaans.index')->with('success', 'Pertanyaan berhasil dihapus!');
    }
}
?>
