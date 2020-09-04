<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categoria\ActualizarCategoria;
use App\Http\Requests\Categoria\AdicionarCategoria;
use App\Models\Categoria;
use App\Repositorios\Categoia\ICategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    private $ICategoriaR;

    public function __construct(ICategoria $ICategoria)
    {
        $this->ICategoriaR = $ICategoria;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.categoria.index', ['categorias' => $this->ICategoriaR->listas()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categoria.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdicionarCategoria $request)
    {
        $validated = $request->validated();

        if ($this->ICategoriaR->adicionar($validated)) {
            notify()->success('Categoria ' . $validated['nome'] . ' salvo !');
        } else {
            notify()->warning('Não foi possivel adicionar a categoria ' . $validated['nome'] . ' !');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($categoria)
    {
        return view('admin.categoria.editar', ['categoria' => $this->ICategoriaR->info((int)$categoria)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Categoria $categoria
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ActualizarCategoria $request, $categoria)
    {
        if ($this->ICategoriaR->actualizar($request->validated(), $categoria)) {
            notify()->success('Categoria Actualizado !');
            return redirect()->route('categoria');
        }
        notify()->warning('Erro ao actualizar a categoria.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @return bool
     */
    public function destroy($categoria)
    {
        if ($this->ICategoriaR->deletar($categoria)) {
            notify()->success('Categoria deletado !');
            return response()->json()->isSuccessful();
        }
        notify()->warning('Erro tente novamente mais tarde.');
        return response()->json()->isNotFound();
    }
}
