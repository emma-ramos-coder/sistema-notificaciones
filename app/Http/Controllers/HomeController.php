<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notification;
use App\Models\Receiver;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function index()
    {
        $total_categorias = Category::count();
        $total_usuarios = User::count();
        $total_destinatarios = Receiver::count();
        $total_notificaciones = Notification::count();
        return view('home',compact('total_categorias', 'total_usuarios','total_destinatarios', 'total_notificaciones'));
    }
}
