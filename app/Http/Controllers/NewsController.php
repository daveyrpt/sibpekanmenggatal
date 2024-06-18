<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Log;

class NewsController extends Controller
{
    public function index()
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function store(Request $request)
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048',
            'type' => 'required',
        ]);

        if ($request->hasFile('file')) {
            // Retrieve the existing file entry
            $fileModel = News::where('type', $request->input('type'))->latest()->first();

            if ($fileModel) {
                // Get the old file path
                $oldFilePath = public_path($fileModel->file_path);

                // Delete the old file if it exists
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            } else {
                // If no existing file model is found, create a new one
                $fileModel = new News;
            }

            // Move the new file to the desired location
            $file = $request->file('file');
            $fileName = $request->input('type') === 'public' ? 'public-news.png' : 'members-news.png';
            $file->move(public_path('images/news'), $fileName);

            // Update the file model with the new file information
            $fileModel->title = $request->input('title');
            $fileModel->name = $fileName;
            $fileModel->type = $request->input('type');
            $fileModel->file_path = '/images/news/' . $fileName;
            $fileModel->save();
     

            Log::create([
                'causer_id' => Auth::user()->id,
                'description' => $request->input('type') === 'public' ? LOG::UPDATE_PUBLIC_NEWS : LOG::UPDATE_MEMBER_ONLY_NEWS,
                'target_id' => null
            ]);

            alert()->success( __('message.success'), __('message.news successfully added'));

            return redirect()->back();
        }
    }

    public function updateStatus(Request $request) 
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $news = News::find($request->id);

        $news->update([
            'status' => $request->input('status') ? 1 : 0
        ]);

        Log::create([
            'causer_id' => Auth::user()->id,
            'description' => $news->type === 'public' ? LOG::UPDATE_PUBLIC_STATUS_NEWS : LOG::UPDATE_MEMBER_ONLY_STATUS_NEWS,
            'target_id' => null
        ]);

        alert()->success( __('message.success'), __('message.news status changed'));

        return redirect()->back();
    }
}
