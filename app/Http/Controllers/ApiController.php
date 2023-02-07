<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
  public function sendEnquiryData(Request $request)
  {
    $response = Http::withHeaders([
      'USER-TOKEN' => 'edureka ',
    ])->post('https://api-user.edureka.co/userlead/create-user-lead', $request->all());

    return $response;
  }

  public function sendBrochureData(Request $request)
  {
    $response = Http::withHeaders([
      'USER-TOKEN' => 'edureka ',
    ])->post('https://api-user.edureka.co/userlead/create-user-lead', $request->all());

    return $response;
  }

  public function sendApplyData(Request $request)
  {
    $response = Http::withHeaders([
      'USER-TOKEN' => 'edureka ',
    ])->post('https://api-user.edureka.co/userlead/create-user-lead', $request->all());

    return $response;
  }

  public function sendBannerData(Request $request)
  {
    $response = Http::withHeaders([
      'USER-TOKEN' => 'edureka ',
    ])->post('https://api-user.edureka.co/userlead/create-user-lead', $request->all());

    return $response;
  }
}
