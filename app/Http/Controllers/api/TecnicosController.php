<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class TecnicosController extends Controller
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
      $response = User::all()->where('rol','Tecnico');
      $statusCode = 200;  // OK
    }
    catch (ModelNotFoundException $e)
    {
      $response = "No hay tecnicos en la base de datos";
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
              $response = User::create($input);
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
          $response = User::findOrFail($id);
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
     $tecnico = User::findOrFail($id);
   }
   catch (ModelNotFoundException $e)
   {
     return response()->json(null, 404);  // Not Found
   }

   $input = $request->all();

   $response = $tecnico->fill($input);

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
   $tecnico = User::findOrFail($id);
  }
  catch (ModelNotFoundException $e)
  {
   return response()->json(null, 404);  // Not Found
  }

  try
  {
   $response = $tecnico->delete();
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
