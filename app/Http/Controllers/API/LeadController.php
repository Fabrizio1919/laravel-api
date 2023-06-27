<?php

namespace App\Http\Controllers;

use App\Mail\NewLead;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    

public function store(Request $request)
{
 $data = $request->all();

$validator = Validator::make($data, [
    'name' => 'required',
    'email' => 'required|email',
    'message' => 'required',
]);

if($validator->fails()){
    return response()->json([
        'success' => false,
        'errors' => $validator->errors(),
    ]);
}


$newLead = new Lead();
$newLead->fill($data);
$newLead->save();

Mail::to('info@boolpress.com')->send(new NewLead($newLead));
return response()->json([
    'success' => true
]);







}




}
