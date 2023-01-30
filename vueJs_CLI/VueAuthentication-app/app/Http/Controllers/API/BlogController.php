<?php

namespace App\Http\Controllers\API;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controllers\Controller;
use App\Http\Resources\BlogResource;
use Illuminate\Validation\Validator;
use Exception;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs  = Blog::all();

        return send_response('success', BlogResource::collection($blogs));
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
    public function store(Request $request)
    {

        $validator =  Validator::make($request->all(),[
            "title" => "required|min:10",
            "description" => "required",

        ]);

        if($validator->fails())
            // return response()->json([
            //     'message' => 'Validation errors',
            //     'data'    => $validator->errors(),
            // ], 422);
            return send_error('Validation error', $validator->errors(), 422);
            try{
                $blog = Blog::create([
                        'title'                 => $request->title,
                        'description'           => $request->description,

                    ]);

                    $data = [
                        'title' => $blog->title,
                        'description' => $blog->description
                    ];

                    return send_response('Blog Create Successfully', $data);

                }catch(Exception $e){
                   return send_error($e->getMessage(), $e->getCode());
                }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $id)
    {
        $blog = Blog::find($id);

        if($blog)
            return send_response('Success', new BlogResource($blog));
        else
            return send_error('Data Not Found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog = Blog::find($blog);
        try{
           if($blog)
           {
                $blog->delete();
           }
           return send_response('Delete Success', []);
        }catch(Exception $e)
        {
            return send_error('Someting error', $e->getCode());
        }
    }
}
