<?php

namespace App\Http\Controllers;

use App\Models\Kardex;
use App\Models\KardexAparta;
use Illuminate\Http\Request;

class KardexController extends Controller
{
    public function index()
    {
        $kardex = new KardexAparta();

        $dataTablaHead = $kardex->getDataTablaHead();
        $dataTable = $kardex->getDataDataTable();
        $newEntryData = $kardex->getInboxHtmlDataTable();
        
        return view('kardex.index' , compact('dataTableHead','dataTable','newEntryData'));
    }
}
