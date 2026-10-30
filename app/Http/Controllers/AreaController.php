<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()   
    {
        $url = env('URL_SERVER_API');

        $areas = $this->fetchDataFromApi($url . '/area/index');

        return view('area.index', compact('areas'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $area = $this->fetchDataFromApi($url . '/area/' . $id);

        return view('area.show', compact('area'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        // Si tu área requiere consumir otra entidad (como courses o teachers), ajústalo aquí si es necesario según el instructor
        return view('area.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $url = env('URL_SERVER_API');

        $file = $request->file('imagen');

        $response = Http::attach('imagen', file_get_contents($file->getRealPath()), $file->getClientOriginalName())
        ->post($url . '/area', ['name' => $request->name]);

        return redirect()->route('areas.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API'); 
        $area = $this->fetchDataFromApi($url . '/area/' . $id);
        return view('area.edit', compact('area')); 
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/area/' . $id, $request->all());

        return redirect()->route('areas.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API'); 
        Http::delete($url . '/area/' . $id); 
        return redirect()->route('areas.index');
    }
}