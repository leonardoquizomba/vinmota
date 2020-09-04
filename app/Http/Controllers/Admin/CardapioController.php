<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cardapio\AdicionarCardapio;
use App\Models\Cardapio;
use App\Repositorios\Arquivo\IArquivo;
use App\Repositorios\Cardapio\ICardapio;
use App\Repositorios\Categoia\ICategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardapioController extends Controller
{
    private $categoria;
    private $menu;
    private $arquivo;

    public function __construct(ICategoria $ICategoria, ICardapio $ICardapio, IArquivo $IArquivo)
    {
        $this->categoria = $ICategoria;
        $this->menu = $ICardapio;
        $this->arquivo = $IArquivo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.cardapio.index', ['cardapios' => $this->menu->listas()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cardapio.add', ['categorias' => $this->categoria->dropdownList()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdicionarCardapio $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('arquivos_id')) {
            $path = $request->arquivos_id->store('public/images');

            $fileID = $this->arquivo->adicionar(array(
                'nome' => $validated['nome'],
                'link' => asset($path),
                'path' => $path,
                'full_path' => '',
            ));
            $validated['arquivos_id'] = $fileID;
        }


        if ($this->menu->adicionar($validated)) {
            notify()->success('Prato adicionado !');
            return redirect()->back();
        }

        notify()->warning('Nao foi possivel adicionar o prato !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cardapio $cardapio
     * @return \Illuminate\Http\Response
     */
    public function show(Cardapio $cardapio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cardapio $cardapio
     * @return \Illuminate\Http\Response
     */
    public function edit(Cardapio $cardapio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cardapio $cardapio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cardapio $cardapio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cardapio $cardapio
     * @return bool
     */
    public function destroy($cardapio)
    {
        if (!$info = $this->menu->info((int)$cardapio)) {
            return response()->json()->isNotFound();
        }

        if (!$this->arquivo->deletar((int)$info['arquivoId'])) {
            return response()->json()->isNotFound();
        }

        Storage::delete($info['arquivo']);

        if ($this->menu->deletar((int)$info['id'])) {
            return response()->json()->isSuccessful();
        }

        return response()->json()->isServerError();
    }
}
