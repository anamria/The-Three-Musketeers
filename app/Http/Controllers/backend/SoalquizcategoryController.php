<?php

namespace App\Http\Controllers\backend;

use App\Models\Soalquizcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class SoalquizcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function SoalquizCategoryList(Request $request)
    {
        $list = DB::table('soalquiz')->get();
        return view('backend.Soalquizcategory.list_Soalquizcategory',compact('list'));
    }


    public function SoalquizCategoryAdd()
    {
        $all = DB::table('soalquiz')->get();
        return view('backend.Soalquizcategory.create_Soalquizcategory',compact('all'));
    }

    

    public function SoalquizCategoryInsert(Request $request)
    {

        $data = array();
        $data['soal'] = $request->soal;
        $data['a'] = $request->a;
        $data['b'] = $request->b;
        $data['c'] = $request->c;
        $data['d'] = $request->d;
        $data['kunci_jawaban'] = $request->kunci_jawaban;   
        $insert = DB::table('soalquiz')->insert($data);
            
        if ($insert) 
        {
        
            return Redirect()->route('Soalquizcategory.index')->with('success','Soal Category created successfully!');
                
        }
        else
        {
            $notification=array
            (
            'messege'=>'error ',
            'alert-type'=>'error'
            );
        return Redirect()->route('Soalquizcategory.index')->with($notification);
        }
    }

    public function SoalquizEditCategory ($id)
    {
        $edit=DB::table('soalquiz')
             ->where('id',$id)
             ->first();
        return view('backend.Soalquizcategory.edit_Soalquizcategory', compact('edit'));     
    }

    public function SoalquizUpdateCategory(Request $request,$id)
    {
      
        $this->validate($request, [
            'soal'     => 'required|min:1',
            'a'   => 'required|min:1',
            'b'   => 'required|min:1',
            'c'   => 'required|min:1',
            'd'   => 'required|min:1',
            'kunci_jawaban'   => 'required|min:1',
        ]);

        DB::table('soalquiz')->where('id', $id)->first();

        $post = ([
            'soal'     => $request->soal,
            'a'   => $request->a,
            'b'   => $request->b,
            'c'   => $request->c,
            'd'   => $request->d,
            'kunci_jawaban'   => $request->kunci_jawaban,
        ]);

        $post = DB::table('soalquiz')->where('id', $id)->update($post);

        return Redirect()->route('Soalquizcategory.index')->with('success','Soal Category Updated Successfully!');                     
    }

    public function SoalquizDeleteCategory ($id)
    {
    
        $delete = DB::table('soalquiz')->where('id', $id)->delete();
        if ($delete)
                            {
                            $notification=array(
                            'messege'=>'Successfully Soalquiz Category Deleted ',
                            'alert-type'=>'success'
                            );
                            return Redirect()->back()->with($notification);                      
                            }
             else
                  {
                  $notification=array(
                  'messege'=>'error ',
                  'alert-type'=>'error'
                  );
                  return Redirect()->back()->with($notification);

                  }

      }
}
