<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Equipo;

class EquiposController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    try
    {
      $response = Equipo::all();
      $statusCode = 200;  // OK
    }
    catch (ModelNotFoundException $e)
    {
      $response = "No hay equipoes en la base de datos";
      $statusCode = 404;  // Not Found
    }

    return response()->json($response, $statusCode);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {


            $input = $request->all();

            try
            {
              $response = Equipo::create($input);
              $statusCode = 200;  // OK
            }
            catch (QueryException $e)
            {
              $response = null;
              $statusCode = 400;  // Bad Request
            }

            return response()->json($response, $statusCode);

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    try
      {
          $response = Equipo::findOrFail($id);
          $statusCode = 200;  // OK
      }
      catch (ModelNotFoundException $e)
      {
        $response = null;
        $statusCode = 404;  // Not Found
      }

      return response()->json($response, $statusCode);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    try
   {
     $equipo = Equipo::findOrFail($id);
   }
   catch (ModelNotFoundException $e)
   {
     return response()->json(null, 404);  // Not Found
   }

   $input = $request->all();

   $response = $equipo->fill($input);

   try
   {
     $response->save();
     $statusCode = 200;  // OK
   }
   catch (QueryException $e)
   {
     $response = null;
     $statusCode = 400;  // Bad Request
   }

   return response()->json($response, $statusCode);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    try
  {
   $equipo = Equipo::findOrFail($id);
  }
  catch (ModelNotFoundException $e)
  {
   return response()->json(null, 404);  // Not Found
  }

  try
  {
   $response = $equipo->delete();
   $statusCode = 200;  // OK
  }
  catch (QueryException $e)
  {
   $response = null;
   $statusCode = 400;  // Bad Request
  }

  return response()->json($response, $statusCode);
  }

}
