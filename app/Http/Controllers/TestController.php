<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Car;

use App\Role;
use App\People;

use Illuminate\Support\Facades\Log;

class TestController  extends Controller {

    public function show() {

        return response()->json([
            'success' => true,
            'message' => 'hello world'
        ]);

        // Car::create([
        //     'name' => 'test3',
        //     'model' => 'model 3',
        //     'year_graduation' => '2020'
        // ]);

        // $test = Car;

        // Перед получением запроса нужзно включить логирование SQL-запросов
        // \DB::connection()->enableQueryLog();
        info('Some helpful information!');
        logger('Debug message');

        Log::info('Showing user profile for user:');

        $car = Car::all();

        // Лог со сконструированными SQL-запросами
        // $queries = \DB::getQueryLog();

        // Запросы сохраняются в лог-файл
        // info($queries);

        // var_dump($queries);


        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
            'test' => $car
        ]);

        // return view('about', [
        //     'name' => $name
        // ]);
    }

    public function testModel() {

        return response()->json([
            'id' => 1,
            'name' => 'test json'
        ]);

        // $data = People::with('role')
        //     ->get();

        // return response()->json([
        //     'success' => true,
        //     'data' => $data
        // ]);
    }
}






































