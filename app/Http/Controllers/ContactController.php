<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ReplyContact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'name'    => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'email'   => $request->email,
            'name'    => $request->name,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }

    public function show()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
    }

    public function reply(Request $request, $id)
    {
        $request->validate([
            'reply_message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);

        Mail::to($contact->email)->send(new ReplyContact($request->reply_message));

        return redirect()->back()->with('success', 'Balasan berhasil dikirim ke email pengguna!');
    }
}
