<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::first();
        return view('news.index', compact('news'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $oldFileModel = News::latest()->first();
            if ($oldFileModel) {
                $oldFilePath = public_path($oldFileModel->file_path);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                    $oldFileModel->delete();
                }
            }

 
            $file = $request->file('file');
            //$fileName = time() . '_' . $file->getClientOriginalName();
            $fileName = 'news-image.png';
            $filePath = $file->move(public_path('images'), $fileName);

            $fileModel = new News;
            $fileModel->title = $request->input('title');
            $fileModel->name = $fileName;
            $fileModel->file_path = '/images/' . $fileName;
            $fileModel->save();

            alert()->success( __('message.success'), __('message.news successfully added'));

            return redirect()->back();
        }
    }

    public function updateStatus(Request $request) 
    {

        News::find($request->id)->update([
            'status' => $request->input('status') ? 1 : 0
        ]);

        alert()->success( __('message.success'), __('message.news status changed'));

        return redirect()->back();
    }
}
