<?php namespace StartupWrench\JobFeed;

use App\Http\Controllers\Controller;

class JobFeedController extends Controller {

  // public function __construct() {
  //   $this->middleware('auth');
  // }

  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index()
  {
    
    return view('jobFeed::index');
  }


}