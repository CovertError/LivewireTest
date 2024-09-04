<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('test', function () {
    // Create a new DOMDocument
    $dom = new DOMDocument('1.0', 'UTF-8');

    // Add XML content or nodes to the document
    $root = $dom->createElement('root');
    $dom->appendChild($root);

    // Convert DOMDocument to XML string
    $xmlString = $dom->saveXML();

    // Return XML string as a response with the appropriate Content-Type header
    return response($xmlString, 200)
        ->header('Content-Type', 'application/xml');
});