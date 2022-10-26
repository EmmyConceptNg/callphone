<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadsRequest;
use App\Models\Upload;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class uploadscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadsRequest $request)
    {


        $name = $request->file('photo')->getClientOriginalName();

        $path = $request->file('photo')->move(public_path('/images/'), $name);


        $update = new Upload;


        $update->updateOrInsert([
            'name' => $name,
            'path' => $path
        ]);

        return redirect(RouteServiceProvider::HOME)->with([
            'status' => 'Image Has been uploaded',
            'photo' => '$name'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
