<?php
namespace App\Http\Controllers;
use App\Models\Receiver;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\NotificationDetail;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function __construct(){
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::paginate();
        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $notification = new Notification();
        $categories = Category::pluck('category_name','id');
        $receivers = Receiver::get();
        return view('notifications.create', compact('notification','categories','receivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Notification::$rules);
        $notification = Notification::create($request->all()+['user_id'=>Auth::user()->id]);

        $notificationDetails = [];
        foreach ($request->receiver_id as $key => $receiver) {
            $notificationDetails[] = new NotificationDetail([
                "receiver_id" => $request->receiver_id[$key],
                "phone" => $request->phone[$key],
                "email" => $request->email[$key]
            ]);
        }
        $notification->notificationDetails()->saveMany($notificationDetails);
        return redirect()->route('notifications.index')
            ->with('success', 'Notificación creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        $notificationDetails = $notification->notificationDetails;
        return view('notifications.show', compact('notification','notificationDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notification = Notification::find($id);
        $notificationDetails = $notification->notificationDetails;
        $categories = Category::pluck('category_name','id');
        $receivers = Receiver::get();
        return view('notifications.edit', compact('notification','categories','receivers','notificationDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        request()->validate(Notification::$rules);
        $notification->update($request->all()+['user_id'=>Auth::user()->id]);

        $notificationDetails = [];
        foreach ($request->receiver_id as $key => $receiver) {
            $notificationDetails[] = new NotificationDetail([
                "receiver_id" => $request->receiver_id[$key],
                "phone" => $request->phone[$key],
                "email" => $request->email[$key]
            ]);
        }
        $notification->notificationDetails()->saveMany($notificationDetails);
        return redirect()->route('notifications.index')
            ->with('success', 'Notificación actualizada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notification = Notification::find($id)->delete();
        return redirect()->route('notifications.index')
            ->with('success', 'Notificación eliminada satisfactoriamente.');
    }

    public function api_notificaciones():JsonResponse
    {
        $notificaciones = DB::table('notifications')
            ->join('categories','notifications.category_id','=','categories.id')
            ->select(['notifications.id','titulo','contenido','fecha_inicio','fecha_fin','estado','destinatario','category_name'])
            ->where('fecha_fin','>=',date('Y-m-d'))
            ->orderBy('fecha_inicio')
            ->get();
        // devuelve una respuesta HTTP en formato JSON con un código de estado 200 (OK)
        return response()->json($notificaciones,200);
    }

    public function api_notificacion(string $correo):JsonResponse
    {
        $notificaciones = DB::table('notifications')
            ->join('categories','notifications.category_id','=','categories.id')
            ->select(['notifications.id','titulo','contenido','fecha_inicio','fecha_fin','estado','destinatario','category_name'])
            ->where('fecha_fin','>=',date('Y-m-d'))
            ->where('destinatario','like','%'.$correo.'%')
            ->orderBy('fecha_inicio','desc')
            ->get();
        // devuelve una respuesta HTTP en formato JSON con un código de estado 200 (OK)
        return response()->json($notificaciones,200);
    }
}
