<?php

namespace App\Http\Controllers;
use App\Catalog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use File;

class CatalogController extends Controller
{
    public function index(){
        if(view()->exists('admin.catalog.index')){
            $all_catalog = Catalog::all();
            return view('admin.catalog.index',['all_catalog'=>$all_catalog]);
        }
    }
    public function create(){
        if(view()->exists('admin.catalog.create.index')){
            return view('admin.catalog.create.index');
        }

    }
    public function store(Request $request){
        if($request->isMethod('post')) {
            $validate_messages = [
                'reguired' => "Поле :attribute обов'язкове для заповнення",
            ];
            $this->validate($request, [
                'example_name' => 'required',
                'example_code' => 'required',
                'example_images' => 'required',
                'example_manufacturer' => 'required'
            ], $validate_messages);

            $path_domain = public_path() . '\assets\img\catalog';
            File::isDirectory($path_domain) or File::makeDirectory($path_domain, 0777, true, true);



            $catalog = new Catalog;
            $catalog->name = $request->get('example_name');
            $catalog->images = '.jpg';
            $catalog->code = $request->get('example_code');
            $catalog->manufacturer = $request->get('example_manufacturer');
            $catalog->save();
            if ($request->hasFile('example_images')) {

                $file = $request->file('example_images');
//                $file->move(public_path('\assets\img\catalog'), $imageName);
                $file->move(public_path('\assets\img\catalog'), $catalog->id.'.jpg');

            }
            $catalog->images = $catalog->id.'.jpg';
            $catalog->save();

            return redirect()->route('catalog');
        }
    }
    public function edit($id){
        if(view()->exists('admin.catalog.edit.index')){
            $data = 'Панель Адміністратора';
            $myCatalog = Catalog::findOrFail($id);
//            $myCatalog->fill($);

            return view('admin.catalog.edit.index', ['catalog'=>$myCatalog]);
        }
    }
    public function update(Request $request, $id){
        $editCatalog = Catalog::findOrFail($id);
        if($request->isMethod('put')) {
            $validate_messages = [
                'reguired' => "Поле :attribute обов'язкове для заповнення",
            ];
            $this->validate($request, [
                'example_name' => 'required',
                'example_code' => 'required',
                'example_manufacturer' => 'required'
            ], $validate_messages);
            $previous_img = $editCatalog->images;
            if ($request->hasFile('example_images')) {
                File::Delete('\assets\img\catalog' . $previous_img);
                $file = $request->file('example_images');
//                     dd($file);

                $file->move(public_path('\assets\img\catalog'), $id.'.jpg');
            }

            $editCatalog->name = $request->get('example_name');
            $editCatalog->code = $request->get('example_code');
            $editCatalog->manufacturer = $request->get('example_manufacturer');
            $editCatalog->save();
//            dd( $request);

            return redirect()->route('catalog');
        }
    }
}

