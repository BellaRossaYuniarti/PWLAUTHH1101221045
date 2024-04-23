<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function superadminHome(): View
  {
    return view('superadminHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function adminHome(): View
  {
    return view('adminHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function dosenHome(): View
  {
    return view('dosenHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function mahasiswaHome(): View
  {
    return view('mahasiswaHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function tendikHome(): View
  {
    return view('tendikHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function adminakademikHome(): View
  {
    return view('adminakademikHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function adminkeuanganHome(): View
  {
    return view('adminkeuanganHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function direkturHome(): View
  {
    return view('direkturHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function wakildirektur1Home(): View
  {
    return view('wakildirektur1Home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function wakildirektur2Home(): View
  {
    return view('wakildirektur2Home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function wakildirektur3Home(): View
  {
    return view('wakildirektur3Home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function adminlppmHome(): View
  {
    return view('adminlppmHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function adminsdmHome(): View
  {
    return view('adminsdmHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
}
