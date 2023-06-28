<?php

namespace App\Http\Controllers\backend;

use App\Models\Materi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class MateriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function MateriCategoryList(Request $request)
    {
        $list = DB::table('materis')->get();
        return view('backend.Materi.list_Materi',compact('list'));
    }


    public function MateriCategoryAdd()
    {
        $all = DB::table('materis')->get();
        return view('backend.Materi.create_Materi',compact('all'));
    }

    

    public function MateriCategoryInsert(Request $request)
    {

        $data = array();
        $data['judul'] = $request->judul;
        $data['isi_materi'] = $request->isi_materi;   
        $insert = DB::table('materis')->insert($data);
            
        if ($insert) 
        {
        
            return Redirect()->route('Matericategory.index')->with('success','Materi Berhasil Dimasukkan');
                
        }
        else
        {
            $notification=array
            (
            'messege'=>'error ',
            'alert-type'=>'error'
            );
        return Redirect()->route('Matericategory.index')->with($notification);
        }
    }

    public function MateriEditCategory ($id)
    {
        $edit=DB::table('materis')
             ->where('id_materi',$id)
             ->first();
        return view('backend.Materi.edit_Materi', compact('edit'));     
    }

    public function MateriUpdateCategory(Request $request,$id)
    {
      
        $this->validate($request, [
            'judul'     => 'required|min:1',
            'isi_materi'   => 'required|min:1',
        ]);

        DB::table('materis')->where('id_materi', $id)->first();

        $post = ([
            'judul'     => $request->judul,
            'isi_materi'   => $request->isi_materi,
        ]);

        $post = DB::table('materis')->where('id_materi', $id)->update($post);

        return Redirect()->route('Matericategory.index')->with('success','Materi Category Updated Successfully!');                     
    }

    public function MateriDeleteCategory ($id)
    {
    
        $delete = DB::table('materis')->where('id_materi', $id)->delete();
        if ($delete)
                            {
                            $notification=array(
                            'messege'=>'Successfully Materi Category Deleted ',
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
