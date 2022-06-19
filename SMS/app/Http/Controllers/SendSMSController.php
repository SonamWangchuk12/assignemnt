<?php

namespace App\Http\Controllers;
use Twilio\Rest\Client;
use App\SendSMS;
use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $url="https://api.twilio.com/2010-04-01/Accounts/ACa6bf2f76e69dd3f85f97bbf04c8dab4a:6a8074281724262385c3fba6dfce2007/Messages";
        // $client = new \GuzzleHttp\Client();
        // $client = new \GuzzleHttp\Client(['verify' => false]);
        

        $account_sid = env("TWILIO_SID",'ACa6bf2f76e69dd3f85f97bbf04c8dab4a');
        $auth_token = env("TWILIO_AUTH_TOKEN",'6a8074281724262385c3fba6dfce2007');
        $twilio_number = env("TWILIO_NUMBER",'+15005550006');

        // $account_sid = getenv("TWILIO_SID");
        // $auth_token = getenv("TWILIO_AUTH_TOKEN");
        // $twilio_number = getenv("TWILIO_NUMBER");
        $allnumbers=$request->mobile_number;
        $numbers = explode(',', $allnumbers);
        // dd($account_sid);
        $client = new Client($account_sid, $auth_token);
        foreach($numbers as $number) {
            $mobile="+91".$number;

            // $send_request = $client->request("POST",$url,[
                // 'form_params' => [
                    // 'from' => $twilio_number, 'body' => 'Test assignment'  ,'to'=>[$mobile],
                // ]
            // ]);
            // $response = $send_request->getBody()->getContents();
            // $http = new Services_Twilio_TinyHttp(
            //     'https://api.twilio.com',
            //     array('curlopts' => array(
            //         CURLOPT_SSL_VERIFYPEER => true,
            //         CURLOPT_SSL_VERIFYHOST => 2,
            //     ))
            // );
            
            // $client = new Services_Twilio($sid, $token, "2010-04-01", $http);
            
            $client2= $client->messages->create($mobile, 
            ['from' => $twilio_number, 'body' => 'Test assignment'] );
            dd($client2);
          }
        // dd($numbers);
        return redirect()->back()->with('message', 'Message Delivered Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SendSMS  $sendSMS
     * @return \Illuminate\Http\Response
     */
    public function show(SendSMS $sendSMS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SendSMS  $sendSMS
     * @return \Illuminate\Http\Response
     */
    public function edit(SendSMS $sendSMS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SendSMS  $sendSMS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendSMS $sendSMS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SendSMS  $sendSMS
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendSMS $sendSMS)
    {
        //
    }
}
