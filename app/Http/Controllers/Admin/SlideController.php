<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Slide::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('slide', function($row){
    
                    $btn = '
                        <a data-fancybox="gallery" href="'.$row->slide_image.'">
                            <img width="200" height="200" src="'.$row->slide_image.'" class="img-thumbnail">
                        </a>
                    ';

                    return $btn;
                })
                ->addColumn('action', function($row){
    
                        $btn = '
                                <a href="' . route('slide.edit', $row->id) . '" class="btn btn-warning bg-gradient waves-effect">Edit</a>
                                <a onclick="Delete(this.id)" id="'.$row->id.'" class="btn btn-danger bg-gradient waves-effect">Delete</a>
                        ';
    
                        return $btn;
                })
                ->rawColumns(['action', 'slide'])
                ->make(true);
        }
        return view('admin.slide.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'         => 'required|string',
            'description'   => 'required',
            'image'         => 'required|mimes:jpeg,jpg,png',
        ]);

        try {
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/sliders', $image->hashName());
    
            //save to DB
            Slide::create([
                'slide_heading'     => $validated['judul'],
                'slide_paragraph'   => $validated['description'],
                'slide_image'       => $image->hashName(),
                'created_by'        => Auth::id()
            ]);
            $notification = array(
                'success'   => 'Berhasil tambah slide'
            );

            return redirect()->route('slide.index')->with($notification);

        } catch (Throwable $e) {
            return redirect()->route('slide.index')->with(['error' => 'Tambah data gagal! ' . $e->getMessage()]);
        }
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
        $detail = Slide::find($id);

        return view('admin.slide.edit', compact('detail'));
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
        $validated = $request->validate([
            'judul'         => 'required|string',
            'description'   => 'required',
            'image'         => 'mimes:jpeg,jpg,png',
        ]);

        try {
            //upload image
            $image  = $request->file('image');
            $detail = Slide::find($id);
            if ($image) {
                Storage::delete('public/sliders/' . basename($detail->slide_image));
                
                $image->storeAs('public/sliders', $image->hashName());
                $resultImage = $image->hashName();
            }else{
                $resultImage  = basename($detail->slide_image);
            }
    
            //save to DB
            $detail->update([
                'slide_heading'     => $validated['judul'],
                'slide_paragraph'   => $validated['description'],
                'slide_image'       => $resultImage,
                'updated_by'        => Auth::id()
            ]);
            $notification = array(
                'success'   => 'Berhasil update slide'
            );

            return redirect()->route('slide.index')->with($notification);

        } catch (Throwable $e) {
            return redirect()->route('slide.index')->with(['error' => 'Update data gagal! ' . $e->getMessage()]);
        }
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
