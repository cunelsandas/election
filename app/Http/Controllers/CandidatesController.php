<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CandidatesController extends Controller
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
         *  It works the same as employeescontroller
         *  please see the comments for explaination
         *  on what's going on here.
         */
        
        $candidates = Candidate::Paginate(4);
        return view('candidate.index')->with('candidates',$candidates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidate = new Candidate();
        $this->validateRequest($request,NULL);
        $fileNameToStore = $this->handleImageUpload($request);
        $this->setCandidate($request ,$candidate, $fileNameToStore);
        return redirect('/candidates')->with('info','New Candidate been created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.edit')->with('candidate',$candidate);
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
        $this->validateRequest($request,$id);
        
        $candidate = Candidate::find($id);
        
        if($request->hasFile('picture')){

            $fileNameToStore = $this->handleImageUpload($request);
            Storage::delete('public/employee_images/'.$candidate->picture);
        }else{
            $fileNameToStore = '';
        }
        
        $this->setCandidate($request, $candidate ,$fileNameToStore);
        return redirect('/candidates')->with('info','selected Candidate has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         *  Check if the admin is not the
         *  current authenticated user
         */
        if($id == Auth::user()->id){
            //redirect to admins route
            return redirect('/candidates')->with('info','Authenticated Admin cannot be deleted!');
        }
        
        $candidate = Candidate::find($id);

        //delete the admin picture
        Storage::delete('public/employee_images/'.$candidate->picture);
        $candidate->delete();
        return redirect('/candidates')->with('info','selected Candidate has been deleted!');
    }

    /**
     *  Search For Resource(s)
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $this->validate($request,[
            'search' => 'required',
            'options' => 'required',
        ]);
        $str = $request->input('search');
        $option = $request->input('options');
        $candidates = Candidate::where( $option , 'LIKE' , '%'.$str.'%' )
            ->orderBy($option,'asc')
            ->paginate(4);
        return view('candidate.index')->with([ 'candidates' => $candidates ,'search' => true ]);
    }

    /**
     *  Validate all the inputs
     */
    private function validateRequest(Request $request, $id)
    {
        $this->validate($request,[
            'first_name'   =>  'required|min:3',
            'last_name'    =>  'required|min:3',
            //if we are updating admin but not changing password.
            'picture'      =>  ''.($request->hasFile('picture')  ? 'mimes:jpeg,jpg,png,gif|max:10000' : '')
        ]);
    }

    /**
     * Add or update an admin
     */
    private function setCandidate(Request $request , Candidate $candidate , $fileNameToStore){
        $candidate->first_name = $request->input('first_name');
        $candidate->last_name = $request->input('last_name');
        if($request->hasFile('picture')){
            $candidate->picture = $fileNameToStore;
        }
        $candidate->save();
    }

    /**
     *  Handle Image Upload
     */
    public function handleImageUpload(Request $request){
        if( $request->hasFile('picture') ){
            
            //get filename with extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            
            //get just filename
            $filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
            
            // get just extension
            $extension = $request->file('picture')->getClientOriginalExtension();
            
            /**
             * filename to store
             * 
             *  we are appending timestamp to the file name
             *  and prepending it to the file extension just to
             *  make the file name unique.
             */
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            //upload the image
            $path = $request->file('picture')->storeAs('public/employee_images' , $fileNameToStore);
        }
        /**
         *  return the file name so we can add it to database.
         */
        return $fileNameToStore;
    }
}
