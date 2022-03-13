<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createJobSeeker(Request $request) {
        //if $request->purpose="jobSeeker"
        $user = new User;
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->user_email = $request->email;
        $user->birth_date = $request->birthDate;

        if(isset($request->phoneNumber))
            $user->phone_number = $request->phoneNumber;

        $user->country = $request->country;
        $user->address = $request->address;
        $user->field = $request->jobField;
        $user->experience = $request->yearsOfExperience;
        //encrypt the password because you should never save passwords as string
        $user->password = bcrypt($request->password);
        $user->save();
    }

    public function createRecruiter(Request $request) {
        //if $request->purpose="recruiter"
        $user = new Company();
        $user->company_name = $request->companyName;
        $user->company_email = $request->email;
        $user->country = $request->country;
        $user->address = $request->address;
        //encrypt the password because you should never save passwords as string
        $user->password = bcrypt($request->password);
        $user->save();
    }
}
