<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ImageHelper;
use App\Http\Controllers\BaseController;
<<<<<<< HEAD
use App\Http\Requests\Facility\storeFacilityRequest;
=======
use App\Http\Controllers\Controller;
use App\Http\Requests\facility\storeFacilityRequest;
>>>>>>> Div
use App\Models\facility;
use Exception;
use Illuminate\Http\Request;

class FacilityController extends BaseController
{
    public function index()
    {
        try {
            $facilities = Facility::all();
            return response()->json(['success' => true, 'facility' => $facilities,]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage(),]);
        }
    }


    public function store(storeFacilityRequest $request)
    {
        try {
            $facility = Facility::create([
                'name' => $request->name,
                'number' => $request->number,
                'sport_id' => $request->sport_id,
                'capacity' => $request->capacity,
            ]);
            ImageHelper::handleFileUpload($request, $facility);
            return $this->sendResponse(['success' => true, 'message' => 'facility Add Successfully']);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage(),]);
        }
    }

    public function edit($id)
    {
        try {
            $facility = facility::find($id);
            return response()->json([
                'success' => true,
                'facility' => $facility
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
            $facilities = Facility::findOrFail($id);
            $facilities->name = $request->name;
            $facilities->number = $request->number;
            $facilities->capacity = $request->capacity;
            $facilities->sport_id = $request->sport_id;
            $result = $facilities->save();
            ImageHelper::handleFileUpload($request, $result);
            return $this->sendResponse(['success' => true, 'message' => "facility Update Successfully",],200);


        } catch (Exception $e) {
            return $this->sendError(['success' => false, 'message' => $e->getMessage(),],500);
        }
    }

    public function delete($id)
    {
        $facilities = facility::findOrFail($id);
        $facilities->delete();
        return $this->sendResponse(['success' => true, 'message' => "facility Delete Successfully",],200);

    }
}
