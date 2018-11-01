<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\YourRfp;
use App\Models\Vacancies;
use App\Models\RequestTeam;
use App\Models\ConsultantsNetwork;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
//use Illuminate\Contracts\Mail\Mailer as Mail;

class SendEmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function submitForm(Request $request) {
        $file   = $request->file('file');
        $type   = $request->get('type');
        $input  = $request->except('file', 'type');

        //dd($request->all());
        
        $path = '';
        //Upload file
        if($file) {
            $path = $this->uploadFile($file, $type);
        }

        // Validate
        $validator = Validator::make($input, [
            //'name' => 'required',
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            $arr = [
                "status" => false,
                "status_code" => 422,
                "message" => 'Your information is not valid',
                "errors" => $validator->errors()
            ];
            return response()->json($arr, 422);
        }

        //Send mail
        $data = $input;
        $this->sendMail($type, $data, $path);

        $arr = [
            "status" => true,
            "status_code" => 200,
            "message" => 'The message is successfully sent',
        ];
        return response()->json($arr, 200);
    }

    public function sendMail($type, $data, $path) {
        switch ($type) {
            case 'contact':
                //Store in database
                Contact::create($data);
                
                //Send mail
                $email_receiver = config('recipient.group_1');
                $result = Mail::send('emails.contact_email', compact('data'), function ($message) use ($email_receiver) {
                    $message->to($email_receiver)
                        ->subject("Contact message received at " . date('H:i d:m:Y'));
                });
                break;
            case 'your_rfp':
                //Store in database
                if($path) {
                    $data['requirement_document'] = $type . '/' . $path->getFileName();
                }
                if(isset($data['solutions'])) {
                    $data['solutions'] = json_encode($data['solutions']);
                }
                YourRfp::create($data);

                /*$arrSolutions = [
                    'mobile-application' => 'Mobile Application',
                    'website-microsite' => 'Website & Microsite',
                    'ecommerce' => 'eCommerce',
                    'dedicated-development-team' => 'Dedicated Development Team',
                    'business-application' => 'Business Application',
                    'system-maintenance' => '',
                ];*/
                
                //Send mail
                $email_receiver = config('recipient.group_1');
                $result = Mail::send('emails.your_rfp', compact('data'), function ($message) use ($email_receiver, $path) {
                    if($path) {
                        $message = $message->attach($path->getPathName());
                    }
                    $message->to($email_receiver)
                        ->subject("\"Submit your RFP\" message received at " . date('H:i d:m:Y'));
                });
                break;

            case 'vacancies':
                //Store in database
                if($path) {
                    $data['cv'] = $type . '/' . $path->getFileName();
                }
                Vacancies::create($data);
                
                //Send mail
                $email_receiver = config('recipient.group_2');
                $result = Mail::send('emails.vacancies', compact('data'), function ($message) use ($email_receiver, $path) {
                    if($path) {
                        $message = $message->attach($path->getPathName());
                    }
                    $message->to($email_receiver)
                        ->subject("\"Opening Vacancies\" message received at " . date('H:i d:m:Y'));
                });
                break;
            
            case 'request_team':
                //Store in database
                RequestTeam::create($data);
                
                //Send mail
                $email_receiver = config('recipient.group_1');
                $result = Mail::send('emails.request_team', compact('data'), function ($message) use ($email_receiver) {
                    $message->to($email_receiver)
                        ->subject("\"Send us your request\" message received at " . date('H:i d:m:Y'));
                });
                break;
            
            case 'consultants_network':
                //Store in database
                ConsultantsNetwork::create($data);
                
                //Send mail
                $email_receiver = config('recipient.group_1');
                $result = Mail::send('emails.consultants_network', compact('data'), function ($message) use ($email_receiver) {
                    $message->to($email_receiver)
                        ->subject("\"Join our consultants network now\" message received at " . date('H:i d:m:Y'));
                });
                break;    

            default:
                return true;
        }
        return $result;
    }

    public function uploadFile($file, $page) {
        $destinationPath = base_path() . '/public/uploads/' . $page;
        if (! is_dir($destinationPath)) {
            mkdir($destinationPath, 0777);
        }
        
        //Re name
        //$fileType 			= $file->getMimeType();
        $fileOriginalName   = $file->getClientOriginalName();
        $filename_noext     = explode('.', $fileOriginalName);
        unset($filename_noext[count($filename_noext)-1]);
        $filename_noext = implode('.', $filename_noext);
        $newName = preg_replace("/[^A-Za-z0-9]/", "_", $filename_noext);
        $filename = $newName . '_' . strtolower(Str::random($length = 32)) . '.' .$file->getClientOriginalExtension();
        return $file->move($destinationPath, $filename);
    }
}
