<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function submit(Request $req) {
        //validate with tmdb as well
        $validator = validator($req->all(), [
            'apiKey' => 'required|string|max:32|regex:/(^([a-zA-Z0-9]+)(\d+)?$)/u'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            if (!SessionController::sessionExists($req, $req['apiKey'])){
                SessionController::storeSessionData($req, $req['apiKey']);
            }
            return redirect('search');
        }
    }
}
