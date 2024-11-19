<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function testConnection()
    {
        $factory = (new Factory)->withServiceAccount(base_path(config('firebase.credentials')));
        $database = $factory->createDatabase();

        // Intenta escribir un dato de prueba
        $reference = $database->getReference('test_path')->set(['key' => 'value']);

        dd(base_path(config('firebase.credentials')));

        return response()->json($reference->getValue());
    }
}
