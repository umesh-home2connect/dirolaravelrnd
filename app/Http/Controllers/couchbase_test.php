<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Couchbase\CouchbaseConnect;
use CouchbaseViewQuery;
use Illuminate\Support\Facades\Redirect;
use Session;

class couchbase_test extends Controller
{
    
    public function __construct(){
                $cbs = new CouchbaseConnect;
                $this->cb = $cbs->connect();
                
        }

        
    public function bucket_test(Request $request){
//        $res = $Connection->get('testdoc');
        $login_flag = FALSE;
        $connection = $this->cb;
        $query = CouchbaseViewQuery::from('dev_user_auth', 'user_auth');
        $Objects = $connection->_view($query, true);
        $fetch_array = [];
//        dd($Objects);
            foreach($Objects['rows'] as $row) {
                $user_obj = new \stdClass();
                $user_obj->name = $row['value']['name'];
                $user_obj->email = $row['value']['email'];
                $user_obj->password = $row['value']['password'];
                $user_obj->id = $row['id'];
                array_push($fetch_array,$user_obj);
             }
            if($request->isMethod('post')) {
             
            $inputData = [
                    'email'      => $request->input('email'),
                    'password'   => $request->input('password'),
                    ];
            foreach($fetch_array as $val){
                 if(($val->email == $inputData["email"]) && ($val->password == $inputData["password"])){
                    $login_flag = true;
                    $session_array = array('user_data' => array(
                        
                        'email'=> $inputData["email"],
                        'password'=> $inputData["password"],
                        'id'=> $val->id,
                        'name'=> $val->name,
                        )
                    );
                    
//                    Session::put('id', $val->id);
                    Session::put($session_array);
                    return redirect('user_profile')->with('message', 'Login Success');
                 }else {
                    $login_flag = false;
                 }
             }

//return view('backend/dashboard', ['Objects' => $Objects]);
//                 $res = $Connection->get('testdoc');
             
         
// function (doc, meta) {
// if(doc.type && doc.type=='user'){
//  emit(doc.itemname, doc);
//  }
//}
         }

              return view('bucket_test') ;
        
    }
    
    
    
    
    
    
//    public function login(Request $request){
//        
//      if ($request->isMethod('post')) {
//               $Connection = $this->cb;
////                 $res = $Connection->get('testdoc');
//                    $inputData = [
//                        'email'      => $request->input('email'),
//                        'password'   => $request->input('password'),
//                        ];
//                    dd($inputData);
////             $Connection->
////               return view('welcome') ;
//         }
//        
//    }
    

}
