<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Master\MUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $user = MUser::find(Auth::id())->first();

        // modify first name last name
        $cekLastName = $user->last_name != '' ? $user->last_name : '';
        if ($cekLastName != '') {
            # code...
            $userTxt = $user->first_name . ' ' . $user->last_name;
            $user['userTxt'] = $userTxt;
        } else {
            $user['userTxt'] = $user->first_name;
        }

        return view('pages.profile.profile', ['type_menu' => 'features'], compact(['user']));
    }
}
