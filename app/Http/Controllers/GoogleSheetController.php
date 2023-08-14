<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;

class GoogleSheetController extends Controller
{
    public function index()
    {
        $sheet = Sheets::spreadsheet('12Pp1heBH0hrgUnkF-rmFYEzNPf-hFEqeKMX3oXyPNKg')->sheet('Demo')->get();

        $header = $sheet->pull(0);
        $values = Sheets::collection($header, $sheet);
        $data = array_values($values->toArray());

        dd($data);
    }
}

        // $sheet = Sheets::spreadsheet('12Pp1heBH0hrgUnkF-rmFYEzNPf-hFEqeKMX3oXyPNKg')->addsheet('Demo2');
        // dd('New Sheet Created');

        // $sheet = Sheets::spreadsheet('12Pp1heBH0hrgUnkF-rmFYEzNPf-hFEqeKMX3oXyPNKg')->deletesheet('Demo2');
        // dd('New Sheet Created');

        // $row=[
        //     ['id', 'name', 'mail'],
        //     ['1', 'name1', 'mail1'],
        //     ['2', 'name1', 'mail2'],
        //     ['3', 'name3', 'mail3']
        // ];

        // $sheet = Sheets::spreadsheet('12Pp1heBH0hrgUnkF-rmFYEzNPf-hFEqeKMX3oXyPNKg')->sheet('Demo2')->append($row);

        // dd('Record Created Successfully');
