<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ImageHelper;
use App\Http\Controllers\BaseController;

use App\Http\Requests\Sport\storeSportRequest;
use App\Http\Requests\Sport\updateSportRequest;
use App\Models\Sport;
use Exception;

class SportController extends BaseController
{
    public function index()
    {
        try {
            $sports = Sport::with('images','room','facility')->get();
            if ($sports) {
                return $this->sendResponse(['success' => true, 'Sport' => $sports,],200);
            }
        } catch (Exception $e) {
            return $this->sendError(['success' => false, 'message' => $e->getMessage(),],500);
        }
    }


    public function store(storeSportRequest $request)
    {
        try {
            $sport=Sport::create($request->validated());
            ImageHelper::handleFileUpload($request, $sport);
            return $this->sendResponse(['sport' => $sport, 'message' => 'Sport Add Successfully'],200);
        } catch (Exception $e) {
            return $this->sendError(['success' => false, 'message' => $e->getMessage(),],500);
        }
    }

    public function edit($id)
    {
        try {
            $sport = Sport::find($id);
            return response()->json(['success' => true, 'Sport' => $sport]);
        } catch (Exception $e) {
            return $this->sendError(['success' => false, 'message' => $e->getMessage(),],500);
        }
    }

    public function update(updateSportRequest $request, Sport $sport)
    {
        try {
            $sport=Sport::update($request->validated());
            ImageHelper::handleFileUpload($request, $sport);
            return response()->json(['success' => true, 'message' => "Sport Update Successfully",]);
        } catch (Exception $e) {
            return $this->sendError(['success' => false, 'message' => $e->getMessage(),],500);
        }
    }

    public function delete($id)
    {
        $sports = Sport::findOrFail($id);
        $sports->delete();
        return response()->json(['success' => true, 'message' => "Sport Delete Successfully",]);

    }
}
