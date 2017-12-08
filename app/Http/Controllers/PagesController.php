<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pages;
use App\theme;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function Index()
    {
        return view('admin.pages', ['pages' => Pages::All()]);
    }
	public function store(Request $request)
    {
		/*
		Pages::create([
            'site_id' => 22,
            'meta_title' => '',
            'meta_description' => '',
			'meta_keywords' => '',
			'custom_css' => '',
			'html' => '',
            'title' => $request->title,
            'slug' => $request->slug,
        ]);*/
		if($request->title!='' && $request->slug!=''){
			$page = new Pages;
			$page->site_id = 22;
			$page->html = '';
			$page->meta_title = '';
			$page->meta_description = '';
			$page->meta_keywords = '';
			$page->custom_css = '';
			$page->title = $request->title;
			$page->slug = $request->slug;
			$page->save();
			return 'success';
		}else{
			$validate = array();
			if($request->title==''){
				$validate['error'][] = array('field'=>'title', 'message'=>'Title cannot be empty');
			}
			if($request->slug==''){
				$validate['error'][] = array('field'=>'slug', 'message'=>'Slug cannot be empty');
			}
			return json_encode($validate);
		}
		
    }
	public function snippets(){
		$currenttheme = theme::getCurrentTheme();
		return view('templates.'.$currenttheme['name'].'.snippet', ['theme' => $currenttheme['name']]);
	}
	public function edit($id)
    {
		$currenttheme = theme::getCurrentTheme();
		$page = Pages::find($id);
		if($page){
			return view('templates.'.$currenttheme['name'].'.index',['page' => $page]);
		}else{
			return abort(404);
		}
	}
	public function savecover(Request $request)
    {
		$this->validate($request, [
            'fileCover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
		$file = substr($request->fileCover->getClientOriginalName(), 0, strrpos($request->fileCover->getClientOriginalName(), "."));
		$path = "/uploads/" . date("Y") . '/' . date("m") . "/";
        $imageName = $file.'_'.rand().'.'.$request->fileCover->getClientOriginalExtension();
        $request->fileCover->move(public_path($path), $imageName);
        return "<html><body onload=\"parent.applyBoxImage('" . $path . "$imageName" . "')\"></body></html>";
	}
	public function saveimage(Request $request)
    {
		header('Cache-Control: no-cache, must-revalidate');
		$path = "/" . date("Y") . '/' . date("m") . "/";
        $count = $request->get('count');
        $b64str = $request->get('hidimg-'.$count);
        $imgname = $request->get('hidname-'.$count);
        $imgtype = $request->get('hidtype-'.$count);
        //Generate random file name here
        if ($imgtype == 'png') {
            $image = $request->get('hidname-'.$count).'-'.base_convert(rand(), 10, 36).'.png';
        } else {
            $image = $imgname.'-'.base_convert(rand(), 10, 36).'.jpg';
        }
        // Save image
        Storage::disk('uploads')->put($path.$image, base64_decode($b64str));
		$url = url('/uploads'.$path.$image);
		echo "<html><body onload=\"parent.document.getElementById('img-".$count."').setAttribute('src','".$url."');  parent.document.getElementById('img-".$count."').removeAttribute('id') \"></body></html>";
	}
	public function savehtml(Request $request)
    {
		$page = Pages::find($request->pageid);
		$page->html = $request->hidContent;
		$page->save();
		return Redirect::back()->with('success', 'Page successfully updated.');
	}
}
