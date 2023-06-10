<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\isNull;
use App\Http\Controllers\Controller;
use App\Http\Utils\Response;

class ProfileController extends Controller
{
    use Response;

    public function index()
    {
        $profiles = Profile::all();

        return  $this->responseData($profiles, 'success');
    }

    public function store(Request $request)
    {

        $profile = $request->validate([
            'address' => 'required',
            'phone_number' => 'required',
            'user_id' => 'required'
        ]);

        $profile = Profile::create($profile);

        return  $this->responseData($profile, 'success');

    }

    public function show($id)
    {
        $test = Profile::with('user')->whereId($id)->first();

        if ($test == null) {
            return $this->responseDataNotFound('Profile', isNull($test));
        }

        return  $this->responseData($test, 'success');
    }

    public function update(Request $request, $id)
    {
       $request->validate([
            'address' => 'required',
            'phone_number' => 'required',
            'user_id' => 'required'
        ]);

        $profile = Profile::whereId($id)->first();

        if ($profile == null) {
            return $this->responseDataNotFound('Profile is Not Found', isNull($profile));
        }

        $profile = $profile->update($request->all());

        return response()
            ->json(['status' => 'true', 'message' => 'success' ,'data' => $request->all() ]);

    }

    public function destroy(Request $request, $id)
    {
        $profile = Profile::where('id', $id)->first();

        if ($profile == null) {
            return $this->responseDataNotFound('Profile is Not Found',isNull($profile));
        }

        $profile = $profile->delete();

        return $this->responseData($profile,'success');
    }
}
