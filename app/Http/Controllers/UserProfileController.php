<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Couchbase\CouchbaseConnect;
use CouchbaseViewQuery;
use Illuminate\Support\Facades\Redirect;
use Session;

class UserProfileController extends Controller
{
    
    public function __construct(){
                $cbs = new CouchbaseConnect;
                $this->cb = $cbs->connect();
                
        }
    
    
    function user_profile(Request $request){
        $connection = $this->cb;
        $user_session = Session::get('user_data');
        $user_data = $connection->get($user_session['id']);
        $fetch_data = array();
        $fetch_data = $user_data->value;
        
//       echo '<pre>';
//       print_r($fetch_data);
//        echo '</pre>';
             
         if ($request->isMethod('post')) {
             
                    $inputData = array(
                        'name'       => $request->input('name'),
                        'email'      => $request->input('email'),
                        );
                    $connection->upsert($user_session['id'], $inputData);
                    $connection->get($user_session['id']);
                    $user_session  = '';
                    $request->session()->flash('msg', 'Detail updated successful!'); 
                     return redirect()->to('/user_profile');
//                    return view('user_profile',array('user_data' => $fetch_data));
                    
         }
//         else{          
        return view('user_profile',array('user_data' => $fetch_data));
//         }
    
    }
   
    
    



}
