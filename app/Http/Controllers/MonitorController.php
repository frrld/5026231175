<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitor;

class MonitorController extends Controller
{
    public function index()
    {
        $search = request('search');

        $query = Monitor::query();
        if ($search) {
            $query->where('merkmonitor', 'like', "%{$search}%")
                  ->orWhere('hargamonitor', 'like', "%{$search}%")
                  ->orWhere('tersedia',    'like', "%{$search}%")
                  ->orWhere('berat',       'like', "%{$search}%");
        }

        $monitors = $query
            ->orderBy('ID', 'asc')
            ->paginate(10)
            ->withQueryString();

        return view('index2', compact('monitors', 'search'));
    }

    public function create()
    {
        return view('tambah2');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'merkmonitor'  => 'required|string|max:25',
            'hargamonitor' => 'required|integer',
            'tersedia'     => 'required|boolean',
            'berat'        => 'required|numeric',
        ]);

        Monitor::create($validated);

        return redirect()->route('monitor.index')
                         ->with('success', 'Monitor berhasil ditambahkan.');
    }

    public function show($id)
    {
        $monitor = Monitor::findOrFail($id);
        return view('show2', compact('monitor'));
    }

    public function edit($id)
    {
        $monitor = Monitor::findOrFail($id);
        return view('edit2', compact('monitor'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'merkmonitor'  => 'required|string|max:25',
            'hargamonitor' => 'required|integer',
            'tersedia'     => 'required|boolean',
            'berat'        => 'required|numeric',
        ]);

        Monitor::findOrFail($id)->update($validated);

        return redirect()->route('monitor.index')
                         ->with('success', 'Monitor berhasil diupdate.');
    }

    public function destroy($id)
    {
        Monitor::findOrFail($id)->delete();

        return redirect()->route('monitor.index')
                         ->with('success', 'Monitor berhasil dihapus.');
    }
}
