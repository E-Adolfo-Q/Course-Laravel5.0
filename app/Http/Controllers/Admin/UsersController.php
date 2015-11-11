<?php namespace Course\Http\Controllers\Admin;

use Course\Http\Requests;
use Course\Http\Controllers\Controller;

use Course\Http\Requests\CreateUserRequest;

use Course\Http\Requests\EditUserRequest;

use Course\User;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller {

	 /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{		
	   $users = User::orderBy('id','DESC')->paginate();	   
	   return view('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{	
		$user = User::create($request->all());				
        return redirect()->route('admin.users.index');	
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	    $user = User::findOrFail($id);	    
	    return view('admin.users.edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request,$id)
	{		
		$user = User::findOrFail($id);
		$user->fill($request->all());
		$user->save();
		return redirect()->back();	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{ 
	     
		/*User::destroy($id);
		$user = User::findOrFail($id);*/
		
		abort(500);

		$this->user->delete();
        
        $message = $this->user->full_name .' fue Eliminado de nuestro registro';

        if ($request->ajax()){
        	return response()->json([
        		 'id' => $this->user->id, 
                 'message'=> $message
             ]);         
         }
		
		Session::flash('message', $message);       
	    return redirect()->route('admin.users.index');
	}

}
