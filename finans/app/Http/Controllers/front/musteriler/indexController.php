<?php

namespace App\Http\Controllers\Front\Musteriler;


use App\Helpers\FileUpload;
use App\Http\Controllers\Controller;
use App\Models\Musteriler;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class indexController extends Controller
{

    public function index()
    {
        return  view('front.musteriler.index');
    }

    public function create()
    {
        return view('front.musteriler.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['photo'] = FileUpload::newUpload(rand(1, 9000), 'musteriler', $request->file('photo'), 0);

        $create = Musteriler::create($all);
        if($create)
        {
            return redirect()->back()->with('status', 'Müşteri Başarı ile Eklendi.');
        }
        else
        {
            return redirect()->back()->with('status', 'Müşteri Başarı ile Eklenemedi.');
        }
    }

    public function edit($edit)
    {

    }

    public function update(Request $request)
    {

    }

    public function delete($id)
    {

    }

    public function data(Request $request)
    {
        $table = Musteriler::query();

        return DataTables::of($table)
            ->addColumn('edit', function ($table) {
                return '<a href="' . route('musteriler.edit', ['id' => $table->id]) . '">Düzenle</a>';
            })
            ->addColumn('delete', function ($table) {
                return '<a href="' . route('musteriler.delete', ['id' => $table->id]) . '">Sil</a>';
            })
            ->rawColumns(['edit', 'delete'])
            ->make(true);
    }


}
