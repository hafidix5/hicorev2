<?php

namespace App\Http\Livewire;

use App\NotifConfig;
use App\User;
use Carbon\Carbon;
use Livewire\Component;

class Login extends Component
{

    public function notifikasi(){

        $user = User::all();
        $config = NotifConfig::where('id',1)->first();

        if(Carbon::parse($config->waktu_broadcast)->format('Y-m-d') == Carbon::now()->format('Y-m-d')){

        }
        else{

            foreach($user as $item){

                if( Carbon::parse( $item->updated_at )->diffInDays( Carbon::now()) >= $config->durasi_hari){

                    $nohape = $item->email;
                    if($nohape['0']=='0') {

                        $nohape['0']='2';
                        $nohape = '6'.$nohape;
                    }

                    // Send Message
                    $my_apikey = $config->api;
                    $destination = $nohape;
                    $message = $config->pesan;
                    $api_url = "http://panel.rapiwha.com/send_message.php";
                    $api_url .= "?apikey=". urlencode ($my_apikey);
                    $api_url .= "&number=". urlencode ($destination);
                    $api_url .= "&text=". urlencode ($message);

                    $my_result_object = json_decode(file_get_contents($api_url, false));

                    $result = [$my_result_object->success , $my_result_object->description , $my_result_object->description];
                    json_encode($result);
                }

            }

            $update = NotifConfig::where('id',1)->first();
            $update->waktu_broadcast = Carbon::now();
            $update->update();
        }



    }

    public function notifikasi2(){

        $user = User::all();
        $config = NotifConfig::where('id',2)->first();

        if(Carbon::parse($config->waktu_broadcast)->format('Y-m-d') == Carbon::now()->format('Y-m-d')){

        }
        else{

            foreach($user as $item){

                if( Carbon::parse( $item->updated_at )->diffInDays( Carbon::now()) >= $config->durasi_hari){

                    $nohape = $item->email;
                    if($nohape['0']=='0') {

                        $nohape['0']='2';
                        $nohape = '6'.$nohape;
                    }

                    // Send Message
                    $my_apikey = $config->api;
                    $destination = $nohape;
                    $message = $config->pesan;
                    $api_url = "http://panel.rapiwha.com/send_message.php";
                    $api_url .= "?apikey=". urlencode ($my_apikey);
                    $api_url .= "&number=". urlencode ($destination);
                    $api_url .= "&text=". urlencode ($message);

                    $my_result_object = json_decode(file_get_contents($api_url, false));

                    $result = [$my_result_object->success , $my_result_object->description , $my_result_object->description];
                    json_encode($result);
                }

            }

            $update = NotifConfig::where('id',2)->first();
            $update->waktu_broadcast = Carbon::now();
            $update->update();
        }

    }

    public function notifikasi3(){

        $user = User::all();
        $config = NotifConfig::where('id',3)->first();

        if(Carbon::parse($config->waktu_broadcast)->format('Y-m-d') == Carbon::now()->format('Y-m-d')){

        }
        else{

            foreach($user as $item){

                if( Carbon::parse( $item->updated_at )->diffInDays( Carbon::now()) >= $config->durasi_hari){

                    $nohape = $item->email;
                    if($nohape['0']=='0') {

                        $nohape['0']='2';
                        $nohape = '6'.$nohape;
                    }

                    // Send Message
                    $my_apikey = $config->api;
                    $destination = $nohape;
                    $message = $config->pesan;
                    $api_url = "http://panel.rapiwha.com/send_message.php";
                    $api_url .= "?apikey=". urlencode ($my_apikey);
                    $api_url .= "&number=". urlencode ($destination);
                    $api_url .= "&text=". urlencode ($message);

                    $my_result_object = json_decode(file_get_contents($api_url, false));

                    $result = [$my_result_object->success , $my_result_object->description , $my_result_object->description];
                    json_encode($result);
                }

            }

            $update = NotifConfig::where('id',3)->first();
            $update->waktu_broadcast = Carbon::now();
            $update->update();
        }

    }


    public function render()
    {
        return view('livewire.login');
    }
}
