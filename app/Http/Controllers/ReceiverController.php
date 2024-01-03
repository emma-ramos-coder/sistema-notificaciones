<?php
namespace App\Http\Controllers;
use App\Models\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function __construct(){
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receivers = Receiver::paginate();
        return view('receivers.index', compact('receivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $receiver = new Receiver();
        return view('receivers.create', compact('receiver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Receiver::$rules);
        $receiver = Receiver::create($request->all());

        return redirect()->route('receivers.index')
            ->with('success', 'Destinatario creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $receiver = Receiver::find($id);
        return view('receivers.show', compact('receiver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $receiver = Receiver::find($id);
        return view('receivers.edit', compact('receiver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receiver $receiver)
    {
        request()->validate(Receiver::$rules);
        $receiver->update($request->all());
        return redirect()->route('receivers.index')
            ->with('success', 'Destinatario actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $receiver = Receiver::find($id)->delete();
        return redirect()->route('receivers.index')
            ->with('success', 'Destinatario eliminado satisfactoriamente');
    }
}
