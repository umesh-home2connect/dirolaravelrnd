<?php

namespace App\Http\Controllers\Diro_home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Couchbase\CouchbaseConnect;
class Diro_homeController extends Controller
{
    protected  $connection ;
    public function __construct(){
                $cbs = new CouchbaseConnect;
                $this->cb = $cbs->connect();
                $this->connection = $this->cb;
        }
        
     public function index()
        {
        
          return view('diro_home');
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
//          public function index()
//            
//        { 
//            $response = array();
//            $user_details  = Adminform::all();
//            $view = view('admin.index',compact('user_details'));
//            
//            $reqobj = new Request();
//            if($reqobj->ajax()) {
//                //$user_details  = Adminform::all();
//          
//                //$sections = $view->renderSections(); 
//                //$response['name'] = $user_details->name;
//               
//                $response['flag'] = 1;
//                echo json_encode($response); 
//            } else {
//            return $view;
//        }
//        }
//    
//    //let create a form
//    public function create(){
//        return view('admin.create');
//    }
}
