<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Systemsetting;

class SystemsettingsController extends Controller
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
        
        $systemsettings = Systemsetting::Paginate(5);
        return view('sys_mg.systemsettings.index')->with('systemsettings',$systemsettings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sys_mg.systemsettings.create');
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
            'facebook_link'
        ]);
        $systemsetting = new Systemsetting();
        $systemsetting->facebook_link = $request->input('facebook_link');
        $systemsetting->save();
        return redirect('/systemsettings')->with('info','New Setting has been created!');
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
        $systemsettings = Systemsetting::find($id);
        return view('sys_mg.systemsettings.edit')->with('systemsettings',$systemsettings);
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
            'facebook_link'
        ]);

        $systemsettings = Systemsetting::find($id);
        $systemsettings->facebook_link = $request->input('facebook_link');
        $systemsettings->save();
        return redirect('/systemsettings')->with('info','Selected Setting has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $systemsetting = Systemsetting::find($id);
        $systemsetting->delete();
        return redirect('/systemsettings')->with('info','Selected Setting has been deleted!');
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
        $systemsettings = Systemsetting::where( 'facebook_link' , 'LIKE' , '%'.$str.'%' )
            ->orderBy('facebook_link','asc')
            ->paginate(4);
        return view('sys_mg.systemsettings.index')->with([ 'systemsettings' => $systemsettings ,'search' => true ]);
    }
}
