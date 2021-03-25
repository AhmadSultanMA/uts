<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Exports\UtsExport;
use App\Imports\UtsImport;
use Maatwebsite\Excel\Facades\Excel;

class utsController extends Controller
{
    public function index()
    {
        $data = Table::get();
        // dd($data);
        return view('table',compact('data'));
    }

    public function addTable()
    {
        return view('addTable');
    }

    public function saveTable(Request $request)
    {
        $data = new Table;
        $data->namaKaryawan = $request->namaKaryawan;
        $data->hadirMasuk = $request->hadirMasuk;
        $data->izinMasuk = $request->izinMasuk;
        $data->bolosMasuk = $request->bolosMasuk;
        $data->telatMasuk = $request->telatMasuk;
        $data->save();
        return redirect('/uts');
    }
    public function editTable($id)
    {
        $data = Table::where('id',$id)->first();
        return view('editTable',compact('data'));
    }

    public function updateTable(Request $request)
    {
        $data = Table::where('id',$request->id)->first();
        $data->namaKaryawan = $request->namaKaryawan;
        $data->hadirMasuk = $request->hadirMasuk;
        $data->izinMasuk = $request->izinMasuk;
        $data->bolosMasuk = $request->bolosMasuk;
        $data->telatMasuk = $request->telatMasuk;
        $data->save();
        return redirect('/uts');
    }

    public function deleteTable($id)
    {
        $data = Table::where('id',$id)->first();
        $data->delete();
        return redirect('/uts');
    }

    public function exportXL()
    {
        return Excel::download(new UtsExport,'table.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new UtsExport,'table.csv');
    }

    public function exportPDF()
    {
        return Excel::download(new UtsExport,'table.pdf');
    }

    public function upload()
    {
        return view('uploadTable');
    }

    public function uploadTable(Request $request)
    {
        Excel::import(new UtsImport,$request->file('file')->store('temp'));

        return redirect('/uts');
    }
}
