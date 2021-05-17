<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;

class CustomerinfosController extends Controller
{
    /**
     *  Only authenticated users can access this controller
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         *  read all the comments from DepartmentsController
         *  they are all the same.
         */
        
        $customerinfos = Customerinfo::Paginate(5);
        return view('sys_mg.customerinfos.index')->with('customerinfos',$customerinfos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sys_mg.customerinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'
        ]);
        $customerinfo = new Customerinfo();
        $customerinfo->name = $request->input('name');
        $customerinfo->save();
        return redirect('/customerinfos')->with('info','New Info has been created!');
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
        $customerinfo = Customerinfo::find($id);
        return view('sys_mg.customerinfos.edit')->with('customerinfo',$customerinfo);
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
        $this->validate($request,[
            'name'
        ]);

        $customerinfos = Customerinfo::find($id);
        $customerinfos->name = $request->input('name');
        $customerinfos->save();
        return redirect('/customerinfos')->with('info','Selected Info has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerinfo = Customerinfo::find($id);
        $customerinfo->delete();
        return redirect('/customerinfos')->with('info','Selected Info has been deleted!');
    }

    /**
     *  Search For Resource(s)
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $this->validate($request,[
            'search' => 'required'
        ]);
        $str = $request->input('search');
        $customerinfos = Customerinfo::where( 'name' , 'LIKE' , '%'.$str.'%' )
            ->orderBy('facebook_link','asc')
            ->paginate(4);
        return view('sys_mg.customerinfos.index')->with([ 'customerinfos' => $customerinfos ,'search' => true ]);
    }
}
