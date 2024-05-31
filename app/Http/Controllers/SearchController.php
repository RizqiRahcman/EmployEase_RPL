<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function cari(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('kotas')
                ->where('nama', 'LIKE', "%{$query}%")
                ->take(5)
                ->get();
            $output = '<ul class="list-group">';
            foreach ($data as $row) {
                $output .= '<li class="list-group-item"><a href="#">' . $row->nama . '</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}