<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index()
    {
        try {
            $rooms = Room::all();
            if ($rooms) {
                return response()->json([
                    'success' => true,
                    'room' => $rooms,
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function getTotalRoom()
    {
        try {
            $rooms= Room::count();
            if ($rooms) {
                return response()->json([
                    'success' => true,
                    'rooms' => $rooms,
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function store(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:100', 'min:10', 'unique:rooms'],
                'number' => ['required'],
                'capacity' => ['required'],
            ]);
            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validation->errors()->all(),
                ]);
            }
                $result = Room::create([
                    'name' => $request->name,
                    'number' => $request->number,
                    'sport_id' => $request->sport_id,
                    'capacity' => $request->capacity,
                ]);
                if ($result) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Room Add Successfully'
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => "Some Problem"
                    ]);
                }

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function edit($id)
    {
        try {
            $room = Room::find($id);
            return response()->json([
                'success' => true,
                'room' => $room
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function update(Request $request,$id)
    {
        try {
            $rooms = Room::findOrFail($id);
            $validation = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:100', 'min:10'],
                'capacity' => ['required'],
                'number' => ['required'],
            ]);
            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validation->errors()->all(),
                ]);
            }
            $rooms->name = $request->name;
            $rooms->number = $request->number;
            $rooms->capacity = $request->capacity;
            $rooms->sport_id = $request->sport_id;
            $result = $rooms->save();
            if ($result) {
                return response()->json([
                    'success' => true,
                    'message' => "Room Update Successfully",
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => "Some Problem",
                ]);
            }

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function delete($id)
    {
        $rooms = Room::findOrFail($id);

        $result = $rooms->delete();
        if ($result) {
            return response()->json([
                'success' => true,
                'message' => "Room Delete Successfully",
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Some Problem",
            ]);
        }
    }
}
