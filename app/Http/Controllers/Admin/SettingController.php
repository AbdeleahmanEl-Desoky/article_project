<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Media;
use App\Models\Message;
use App\Models\Privacy;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function aboutIndex()
    {

        $about = About::first();
        return view('admin.setting.about',compact('about'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function aboutStore(Request $request)
    {

        About::updateOrInsert(
            ['id' => $request->id], // Identification condition, usually primary key
            [
                'title_en' => $request->title_en,
                'description_en' => $request->description_en,
                // Add other fields as needed
            ]
        );

        return redirect()->route('admin.abouts.index');

    }



    /**
     *  contact us
     */

    public function contactIndex()
    {
        $contact = Contact::first();
        return view('admin.setting.contact',compact('contact'));
    }

    public function contactStore(Request $request)
    {
        Contact::updateOrInsert(
            ['id' => $request->id],
            [
                'title_en' => $request->title_en,
                'description_en' => $request->description_en,
                'description_en' => $request->description_en,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );
        return redirect()->route('admin.contact.index');
    }





/**
 * medias
 */
    public function mediaIndex()
    {

        $media = Media::first();
        return view('admin.setting.media',compact('media'));
    }


    public function mediaStore(Request $request)
    {
        Media::updateOrInsert(
            ['id' => $request->id],
            [
                'facebook	' => $request->facebook	,
                'phone' => $request->phone,
                'whatsupp' => $request->whatsupp,
                'instgram' => $request->instgram,
                'tiktok' => $request->tiktok,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
            ]
        );
        return redirect()->route('admin.media.index');
    }



    /**
     * privacyBpolicy
     */
    public function privacyBpolicyIndex()
    {

        $privacy = Privacy::first();
        return view('admin.setting.Privacy',compact('privacy'));
    }

    public function privacyBpolicyStore(Request $request)
    {

        Privacy::updateOrInsert(
            ['id' => $request->id], // Identification condition, usually primary key
            [
                'title_en' => $request->title_en,
                'description_en' => $request->description_en,
                // Add other fields as needed
            ]
        );

        return redirect()->route('admin.privacyBpolicy.index');

    }




    /**
     * messages
     */


     public function messagesIndex()
     {

         $messages = Message::first();
         return view('admin.setting.messages',compact('messages'));
     }
}
