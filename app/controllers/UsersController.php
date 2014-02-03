<?php 
class UsersController extends BaseController
{
	
	public function __construct()
	{
		
		$this->beforeFilter('auth');  //bloqueo de acceso
		
	}
	
	public function getIndex()
	{
	
	$my_id = Auth::user()->id;
	$level = Auth::user()->level;
	
	//control permissions only access administrator (ad)
	if($level==1)
	{
		
	$users = DB::table('users')->where('level','<>','1')->where('id','<>',$my_id)->get();
	return View::make('users.index')-> with('users',$users);	
			
	}
	else{
		
	return View::make('errors.access_denied_ad');
		
	}
		
		
		
	}
	
	

	
}
?>