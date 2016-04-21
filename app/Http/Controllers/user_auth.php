<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Couchbase\CouchbaseConnect;
use Illuminate\Support\Facades\Session;
class user_auth extends Controller
{
    
      public function __construct(){
                $cbs = new CouchbaseConnect;
                $this->cb = $cbs->connect();
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Connection = $this->cb;
//         $res = $Connection->get('testdoc');
          return view('users/index') ;
         //dd($res);
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
         if ($request->isMethod('post')) {
               $Connection = $this->cb;
                    $inputData = [
                        'name'       => $request->input('name'),
                        'email'      => $request->input('email'),
                        'password'   => $request->input('password'),
                        'type'       => 'user',
                        ];
                    $document_name = "user".uniqid();

             $Connection->insert($document_name,$inputData);
             $request->session()->flash('alert-success', 'User was successful added!');
             return redirect('bucket_test')->with('message', 'Signup Success');
//               return view('bucket_test'); 
//               return view('users/index') ;
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
