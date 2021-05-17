<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constituency;

class ConstituenciesController extends Controller
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

        $constituencies = Constituency::Paginate(5);
        return view('sys_mg.constituencies.index')->with('constituencies',$constituencies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sys_mg.constituencies.create');
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
            'total_constituency'
        ]);
        $constituencies = new Constituency();
        $constituencies->name = $request->input('total_constituency');
        $constituencies->save();
        return redirect('/constituencies')->with('info','เพิ่มข้อมูลจำนวนผู้มีสิทธิ์เลือกตั้งแล้ว!');
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
        $constituencies = Constituency::find($id);
        return view('sys_mg.constituencies.edit')->with('constituencies',$constituencies);
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
            'total_constituency'
        ]);

        $constituencies = Constituency::find($id);
        $constituencies->total_constituency = $request->input('total_constituency');
        $constituencies->save();
        return redirect('/constituencies')->with('info','อัพเดทข้อมูลจำนวนผู้มีสิทธิ์เลือกตั้งแล้ว!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $constituencies = Constituency::find($id);
        $constituencies->delete();
        return redirect('/constituencies')->with('info','ลบข้อมูลจำนวนผู้มีสิทธิ์เลือกตั้งแล้ว!');
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
        $constituencies = Constituency::where( 'total_contituency' , 'LIKE' , '%'.$str.'%' )
            ->orderBy('total_contituency','asc')
            ->paginate(4);
        return view('sys_mg.constituencies.index')->with([ 'constituencies' => $constituencies ,'search' => true ]);
    }
}
