<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    #fungsi index
    public function index()
    {
        return view('admin.blog.index',[
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);

    }

    #halaman create
    public function create()
    {
    return view('admin.blog.create');
    }


    #fungsi store
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:5120|mimes:jpg,jpeg,png,webp',
            'tanggal_pelaksanaan' => 'required|date',
            'desc' => 'required|min:20',
        ];
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'tanggal_pelaksanaan.required' => 'Tanggal pelaksanaan wajib diisi!',
            'tanggal_pelaksanaan.date' => 'Format tanggal tidak valid!',
            'desc.required' => 'Deskripsi wajib diisi!'
        ];
        $this->validate($request, $rules, $messages);

        //image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel',$fileName);

        //Artikel
        $storage ="storage/content-artikel";
        $dom = new \DOMDocument();

    #untuk menonatifkan kesalahan libxml standar memungkinkan penangannan kesalahan pengguna
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);

    #MENGHAPUS BUFFER KESALAHAN LIBXML
    libxml_clear_errors();


    //blog ini adalah kode untuk menyimpan gambar yg dimasukkan didalam artikel
    $images = $dom->getElementsByTagName('img');
    $manager = new ImageManager(
    new Driver()
);

foreach ($images as $img) {
    $src = $img->getAttribute('src');

    if (preg_match('/data:image/', $src)) {
        preg_match('/data:image\/(?<mime>.*?);/', $src, $groups);
        $mimetype = $groups['mime'];
        $fileNameContent = uniqid();
        $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
        $filePath =( "$storage/$fileNameContentRand.$mimetype");

    //kode untuk menyimpan gambar pada content-artikel 
     $image = $manager->read($src)
    ->resize(width: 1440, height: 720)
    ->toJpeg(quality: 100);  // Atau gunakan format yang sesuai
     // Simpan gambar
    $image->save(public_path($filePath));

        $new_src = asset($filePath);
        $img->removeAttribute('src');
        $img->setAttribute('src', $new_src);
        $img->setAttribute('class', 'img-responsive');
    }
}

    Blog::create([
        'judul' => $request->judul,
        'slug' =>Str::slug($request->judul, '-'),
        'image' => $fileName,
        'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        'desc' => $dom ->saveHTML(),

    ]);
    return redirect()->route('blog')->with('success', 'Artikel berhasil ditambahkan!');

    }

    #halaman edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
        'artikel' =>$artikel
        ]);
        

    }

    #fungsi update
    public function update(Request $request, $id)
{
    $rules = [
        'judul' => 'required',
        'image' => 'nullable|max:5120|mimes:jpg,jpeg,png,webp', // image bersifat opsional dalam update
        'tanggal_pelaksanaan' => 'required|date',
        'desc' => 'required|min:20',
    ];
    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'image.required' => 'Image wajib diisi!',
        'tanggal_pelaksanaan.required' => 'Tanggal pelaksanaan wajib diisi!',
        'tanggal_pelaksanaan.date' => 'Format tanggal tidak valid!',
        'desc.required' => 'Deskripsi wajib diisi!',
    ];
    $this->validate($request, $rules, $messages);

    // Ambil data blog yang akan diupdate
    $blog = Blog::findOrFail($id);

    // Cek jika ada file image baru
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if (file_exists(public_path('storage/artikel/' . $blog->image))) {
            unlink(public_path('storage/artikel/' . $blog->image));
        }

        // Simpan gambar baru
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);
    } else {
        // Jika tidak ada gambar baru, tetap menggunakan gambar lama
        $fileName = $blog->image;
    }

    // Proses untuk menangani gambar dalam konten artikel
    $storage = "storage/content-artikel";
    $dom = new \DOMDocument();

    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
    libxml_clear_errors();

    $images = $dom->getElementsByTagName('img');
    $manager = new ImageManager(
        new Driver()
    );

    foreach ($images as $img) {
        $src = $img->getAttribute('src');

        if (preg_match('/data:image/', $src)) {
            preg_match('/data:image\/(?<mime>.*?);/', $src, $groups);
            $mimetype = $groups['mime'];
            $fileNameContent = uniqid();
            $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
            $filePath = "$storage/$fileNameContentRand.$mimetype";

            // Simpan gambar pada content-artikel
            $image = $manager->read($src)
                ->resize(width: 1440, height: 720)
                ->toJpeg(quality: 100);  // Atau gunakan format yang sesuai
            $image->save(public_path($filePath));

            $new_src = asset($filePath);
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    // Update data blog
    $blog->update([
        'judul' => $request->judul,
        'slug' => Str::slug($request->judul, '-'),
        'image' => $fileName,
        'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        'desc' => $dom->saveHTML(),
    ]);

    return redirect(route('blog'))->with('success', 'Artikel berhasil diupdate!');

}


    #fungsi delete
    public function destroy($id)
    {
    
        $artikel = Blog::find($id);
        if (Storage::exists('public/artikel/' . $artikel->image)) {
            Storage::delete('public/artikel/' . $artikel->image);
        }
        $artikel->delete();

        return redirect(route('blog'))->with('success', 'Artikel berhasil dihapus!');
    }
}
