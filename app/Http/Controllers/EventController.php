<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $start = $request->start;
            $end = $request->end;

            $data = Event::whereBetween('start', [$start, $end])
                ->orWhereBetween('end', [$start, $end])
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
        }

        return view('maintenance.blokpreventive');
    }

    public function ajax(Request $request)
    {
        switch ($request->type) {
            case 'add':
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start_date,
                    'end' => $request->end_date,
                ]);

                return response()->json($event);

            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start_date,
                    'end' => $request->end_date,
                ]);

                return response()->json($event);

            case 'delete':
                $event = Event::find($request->id)->delete();

                return response()->json($event);

            default:
                return response()->json(['error' => 'Invalid request type']);
        }
    }
}
