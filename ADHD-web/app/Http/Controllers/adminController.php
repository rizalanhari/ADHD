<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.home');
        // return view('login.main');
    }
    public function data()
    {
        $dataTrain = Http::get('http://127.0.0.1:5000/datatrain');
        $dataTrain = json_decode($dataTrain, true);
        $dataTest = Http::get('http://127.0.0.1:5000/datatest');
        $dataTest = json_decode($dataTest, true);
        return view('admin.data')->with('dataTrain', $dataTrain)->with('dataTest', $dataTest);
    }
    public function predict()
    {
        return view('admin.predict');
    }
    public function storepredict(Request $request)
    {
        // // dd($request);
        // $train = $request->input('train');
        // $test = $request->input('test');
        // $lrate = $request->input('lrate');
        // $neuronh = $request->input('neuronh');
        // $data = [[$train, $test, $lrate, $neuronh]];
        // // Open a file in write mode ('w')
        // $fp = fopen('predictAdmin.csv', 'w');

        // // Loop through file pointer and a line
        // foreach ($data as $row) {
        //     fputcsv($fp, $row);
        // }
        // fclose($fp);
        // $result = Http::get('http://127.0.0.1:5000/predictA');
        // $result = json_decode($result, true);
        // // dd($result);
        // return view('admin.result')->with('result', $result);

        $response = Http::get('http://127.0.0.1:5000/predictA', [
            'train' => $request->input('train'),
            'test' => $request->input('test'),
            'lrate' => $request->input('lrate'),
            'neuronh' => $request->input('neuronh'),
        ]);
        $response = json_decode($response, true);
        return view('admin.result')->with('result', $response);
    }
}
