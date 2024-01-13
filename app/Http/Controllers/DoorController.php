<?php

namespace App\Http\Controllers;

use App\Models\Door;
use App\Http\Requests\StoreDoorRequest;
use App\Http\Requests\UpdateDoorRequest;

class DoorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doors = Door::paginate();
        return view('door.index', compact('doors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('door.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoorRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Door $door)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function checkDoorStatus(Door $door)
    {
        $status = $door->status == Door::STATUS_OPEN ? 'open' : 'close';

        if ($status === 'open') {
            try {
                $door->status = Door::STATUS_CLOSE;
                $door->update();
            } catch (\Exception $exception) {
                return $this->makeErrorResponse('Failed to update door status.');
            }
        }

        return $this->makeApiSuccessResponse([
            'status' => $status
        ]);
    }
}
