<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContacCreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact->update(['seen' => true]);

        if ($contact->save()) {
            return view('admin.contact.show', compact('contact'));
        } else {
            return redirect()->back()->withErrors('Заявка не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        if ($contact->seen == 0) {
            return redirect()->back()->withErrors('Заявка еще не посмотрено!');
        }

        if ($contact->seen < 3) {
            $contact->seen++;
            $contact->save();
            return redirect()->back()->withSuccess('Состояние заявка была изменена!');
        } else {
            $contact->delete();
            return redirect()->back()->withSuccess('Заявка была успешно удалена!');
        }
    }}
