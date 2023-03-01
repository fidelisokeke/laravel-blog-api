<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legalservice;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class LegalServiceController extends Controller
{
    public function viewallservices(): JsonResponse
    {
        $services = Legalservice::all();

        return response()->json([
            'status' => true,
            'message' => 'All the legal services arrived',
            'data' => $services
        ], 200);
    }

    public function addlegalservices(Request $request): JsonResponse
    {
        // Validate input
        $validatedData = Validator::make($request->all(), [
            'service_name' => 'required|unique:legalservices|max:100|min:3',
            'quantity' => 'required|integer'
        ]);

        // If validation fails
        if ($validatedData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Error in input validation',
                'errors' => $validatedData->errors()
            ], 422);
        }

        // Create new legal service
        $addservicetothelist = Legalservice::create([
            'service_name' => $request->service_name,
            'quantity' => $request->quantity
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Service added to the list',
            'data' => $addservicetothelist
        ], 201);
    }
     // service update section
     public function updateservice(Request $request, $id): JsonResponse
     {
    // Validate input
    $validatedData = Validator::make($request->all(), [
        'service_name' => 'required|unique:legalservices|max:100|min:3',
        'quantity' => 'required|integer'
    ]);

    // If validation fails
    if ($validatedData->fails()) {
        return response()->json([
            'status' => false,
            'message' => 'Error in input validation',
            'errors' => $validatedData->errors()
        ], 422);
    }

    // Create new legal service
    $updateserviceinfo = Legalservice::findorfail($id)->update([
        'service_name' => $request->service_name,
        'quantity' => $request->quantity
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Service Info Updated',
        'data' => $updateserviceinfo 
    ], 200);
} 
public function removeservice($id): JsonResponse
{
    // Find the service by ID
    $service = Legalservice::find($id);
    
    // Check if service exists
    if (!$service) {
        return response()->json([
            'status' => false,
            'message' => 'Service not found'
        ], 404);
    }

    // Delete the service
    $service->delete();

    return response()->json([
        'status' => true,
        'message' => 'Service deleted successfully'
    ], 200);
}
}
