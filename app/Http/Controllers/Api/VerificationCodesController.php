<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
//use Overtrue\EasySms\EasySms;
use App\Http\Requests\Api\VerificationCodeRequest;

class VerificationCodesController extends Controller
{
    public function store(VerificationCodeRequest $request)
    {
        return 123;
    }
}