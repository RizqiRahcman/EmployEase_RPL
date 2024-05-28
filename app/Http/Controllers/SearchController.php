<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function cari(Request $request)
  {
    if($request->get('query'))
    {
        $query = $request->get('query');
        $data = DB::table('kota')
        ->where('nama', 'LIKE', "%{$query}%")
        ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        foreach($data as $row)
        {
        $output .= '
        <li><a href="#">'.$row->nama.'</a></li>
        ';
        }
        $output .= '</ul>';
        echo $output;
    }
  }
}
