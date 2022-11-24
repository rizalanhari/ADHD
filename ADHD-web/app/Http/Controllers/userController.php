<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function data()
    {
        $dataTrain = Http::get('http://127.0.0.1:5000/datatrain');
        $dataTrain = json_decode($dataTrain, true);
        return view('user.data')->with('dataTrain', $dataTrain);
    }
    public function predict()
    {
        $response = Http::get('http://127.0.0.1:5000/question');
        $response = json_decode($response, true);
        return view('user.predict')->with('data', $response);
    }
    public function storepredict(Request $request)
    {
        // $data = array();
        // for ($i = 0; $i < 45; $i++) {
        //     $data[0][$i] = (int)$request->input('pertanyaan' . $i);
        // };
        // // Open a file in write mode ('w')
        // $fp = fopen('dataUser.csv', 'w');

        // // Loop through file pointer and a line
        // foreach ($data as $fields) {
        //     fputcsv($fp, $fields);
        // }
        // $response = Http::get('http://127.0.0.1:5000/predict');
        // $response = json_decode($response, true);
        // return view('user.result')->with('result', $response);

        $response = Http::get('http://127.0.0.1:5000/predict', [
            'data0' => (int)$request->input('pertanyaan0'),
            'data1' => (int)$request->input('pertanyaan1'),
            'data2' => (int)$request->input('pertanyaan2'),
            'data3' => (int)$request->input('pertanyaan3'),
            'data4' => (int)$request->input('pertanyaan4'),
            'data5' => (int)$request->input('pertanyaan5'),
            'data6' => (int)$request->input('pertanyaan6'),
            'data7' => (int)$request->input('pertanyaan7'),
            'data8' => (int)$request->input('pertanyaan8'),
            'data9' => (int)$request->input('pertanyaan9'),
            'data10' => (int)$request->input('pertanyaan10'),
            'data11' => (int)$request->input('pertanyaan11'),
            'data12' => (int)$request->input('pertanyaan12'),
            'data13' => (int)$request->input('pertanyaan13'),
            'data14' => (int)$request->input('pertanyaan14'),
            'data15' => (int)$request->input('pertanyaan15'),
            'data16' => (int)$request->input('pertanyaan16'),
            'data17' => (int)$request->input('pertanyaan17'),
            'data18' => (int)$request->input('pertanyaan18'),
            'data19' => (int)$request->input('pertanyaan19'),
            'data20' => (int)$request->input('pertanyaan20'),
            'data21' => (int)$request->input('pertanyaan21'),
            'data22' => (int)$request->input('pertanyaan22'),
            'data23' => (int)$request->input('pertanyaan23'),
            'data24' => (int)$request->input('pertanyaan24'),
            'data25' => (int)$request->input('pertanyaan25'),
            'data26' => (int)$request->input('pertanyaan26'),
            'data27' => (int)$request->input('pertanyaan27'),
            'data28' => (int)$request->input('pertanyaan28'),
            'data29' => (int)$request->input('pertanyaan29'),
            'data30' => (int)$request->input('pertanyaan30'),
            'data31' => (int)$request->input('pertanyaan31'),
            'data32' => (int)$request->input('pertanyaan32'),
            'data33' => (int)$request->input('pertanyaan33'),
            'data34' => (int)$request->input('pertanyaan34'),
            'data35' => (int)$request->input('pertanyaan35'),
            'data36' => (int)$request->input('pertanyaan36'),
            'data37' => (int)$request->input('pertanyaan37'),
            'data38' => (int)$request->input('pertanyaan38'),
            'data39' => (int)$request->input('pertanyaan39'),
            'data40' => (int)$request->input('pertanyaan40'),
            'data41' => (int)$request->input('pertanyaan41'),
            'data42' => (int)$request->input('pertanyaan42'),
            'data43' => (int)$request->input('pertanyaan43'),
            'data44' => (int)$request->input('pertanyaan44')
        ]);
        $response = json_decode($response, true);
        return view('user.result')->with('result', $response);
    }
}
