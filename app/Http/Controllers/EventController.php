<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EventController extends Controller
{
    public function index(){
        $search = request('search');

        if ($search) {
            $events = Event::where('title', 'like', '%' . $search . '%')->get();
        } else {
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }


    public function create(){
        return view('events.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'description' => 'required',
            'location' => 'required',
            'image' => 'required', // Adiciona validação para imagem
            'items' => 'required',
        ], [
            'title.required' => 'O título do evento é obrigatório.',
            'date.required' => 'A data do evento é obrigatória.',
            'description.required' => 'A descrição do evento é obrigatória.',
            'location.required' => 'A Localização é obrigatória.',
            'image.required' => 'É preciso colocar um banner no evento.',
            'items.required' => 'Pelo menos 1 tipo de infraestrutura tera no evento.',
        ]);
    
        $event = new Event();
    
        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->private = $request->private ?? 0;
        $event->items = $request->items;
    
        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . time()) . '.' . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
    
        $event->user_id = Auth::id();
        $event->save();
    
        return redirect('/')->with('success', 'Evento criado com sucesso!');
    }
    

    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner'=>$eventOwner]);
    }
    public function contact(){
        return view('contact');
    }

    public function dashboard() {
        $user = Auth::user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }

    public function destroy($id){
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('success', 'Evento deletado com sucesso!');
    }

    public function edit($id){

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request, $id) {
        
        Event::findOrFail($id)->update($request->all());

        return redirect('/dashboard')->with('success', 'Evento editado com sucesso!');
    }

}