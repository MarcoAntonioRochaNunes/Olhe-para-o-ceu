<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request){

        $cidade = $request->input('busca');
        $data = $this->ApiTempo($cidade);
        $date = date('d/m');
        $day = date('D');
        // dd($data);
        $speedWind = isset($data['wind']['speed']) * 3.6 ;

        $speedWind = round($speedWind);
        return view('welcome', compact('data', 'date', 'day', 'speedWind'));



    }
    public function ApiTempo($cidade){
        // dd($cidade);

        $key = '103a61aafd3d04815d9a5b9c7f09900d';

        $city = $cidade;
        $country_code = 076;
        $limit = 10;

        $component = 'http://api.openweathermap.org/geo/1.0/direct?q='.$city.','.$country_code.'&limit='.$limit.'&appid='.$key.'';

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $component);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        $data = json_decode($response, true);

        curl_close($curl);
        dd($data);
        foreach($data as $item){
            // dd($item);

            $state = $item['country'];
            if($state == "BR" ){
                $la = $item['lat'];
                $lo = $item['lon'];
                // $url = 'https://api.openweathermap.org/data/3.0/onecall?lat='.$la.'&lon='.$lo.'&appid='.$key.'&units=metric&lang=pt_br';
                $url = 'https://api.openweathermap.org/data/2.5/weather?lat='.$la.'&lon='.$lo.'&appid='.$key.'&units=metric&lang=pt_br';

                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($curl);

                $data = json_decode($response, true);
                // dd($teste);

                return $data;
            }

        }

    }
}
