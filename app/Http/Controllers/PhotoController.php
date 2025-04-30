<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        return view('admin.photo.index',[
        'photos' => Photo::orderBy('id', 'desc')->get()
    ]);

}



    public function store( Request $request){
       
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:5120|mimes:jpg,jpeg,png,webp',
           
        ];
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
          
        ];
        $this->validate($request, $rules, $messages);

        //image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/photo',$fileName);

        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect()->route('photo')->with('success', 'Photo berhasil  ditambahkan!');
    

    }

    public function update(Request $request, $id){
        $rules = [
            'judul' => 'required',
            'image' => 'nullable|max:5120|mimes:jpg,jpeg,png,webp', // image bersifat opsional dalam update
        ];
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
        ];
        $this->validate($request, $rules, $messages);
    
        // Ambil data blog yang akan diupdate
        $photo = Photo::find($id);
    
        // Cek jika ada file image baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if (file_exists(public_path('storage/photo/' . $photo->image))) {
                unlink(public_path('storage/photo/' . $request->old_image));
            }
    
            // Simpan gambar baru
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/photo', $fileName);
        } else {
            // Jika tidak ada gambar baru, tetap menggunakan gambar lama
            $fileName = $photo->image;
        
            $photo->update([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);
    
        return redirect(route('photo'))->with('success', 'Photo berhasil diupdate!');
    
    }
    

    }

    public function destroy($id){
        $photo = Photo::find($id);
        if (Storage::exists('public/photo/' . $photo->image)) {
            Storage::delete('public/photo/' . $photo->image);
        }
        $photo->delete();

        return redirect(route('photo'))->with('success', 'Photo berhasil dihapus!');
    }

    public function show()
{
    return view('foto.foto', [
        'photos' => Photo::orderBy('id', 'desc')->get()
    ]);
}

}



