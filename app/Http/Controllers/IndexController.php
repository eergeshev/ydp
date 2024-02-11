<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutUsContact;
use App\Models\Designer;
use App\Models\DesignerGallery;
use App\Models\InternationalPartners;
use App\Models\LocalPartners;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectDetail;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $last_news = News::latest()->take(3)->get();
        $designers = Designer::take(6)->get();
        $sponsors_partners = Sponsor::all();
        $projects = Project::latest()->take(3)->get();
        $about = AboutUsContact::latest()->take(1)->first();

        return view('index', compact('last_news', 'designers', 'sponsors_partners', 'projects', 'about'));
    }

    public function aboutUs(){
        $abouts = About::all();
        $news = News::latest()->take(3)->get();
        $local_partners = LocalPartners::all();
        $inter_partners = InternationalPartners::all();
        $about = AboutUsContact::latest()->take(1)->first();

        return view('about-us', compact('news', 'local_partners', 'inter_partners', 'abouts', 'about'));
    }

    public function allDesigners(){
        $about = AboutUsContact::latest()->take(1)->first();

        return view('designers', compact('about'));
    }

    public function designerDetail($id){
        $designer = Designer::findOrFail($id);
        $gallery = json_decode($designer->gallery, true);
        $len_gallery = count($gallery);
        $about = AboutUsContact::latest()->take(1)->first();

        return view('designer-details', compact('designer', 'gallery', 'len_gallery', 'about'));
    }

    public function projects(){
        $about = AboutUsContact::latest()->take(1)->first();

        return view('projects', compact('about'));
    }

    public function projectDetail($id)
    {
        $project = Project::findOrFail($id);
        $project_details = ProjectDetail::where('project_id', $id)->orderBy('id', 'desc')->get();
        $about = AboutUsContact::latest()->take(1)->first();

        return view('project-details', compact('project', 'project_details', 'about'));
    }


    public function news(){
        $about = AboutUsContact::latest()->first();

        $latestNews = News::orderBy('data', 'desc')->first();

        return view('news', compact('about', 'latestNews'));
    }

    public function newsDetail($id){
        $last_news = News::orderBy('data', 'desc')->where('id', '!=', $id)->take(3)->get();
        $news = News::findOrFail($id);
        $about = AboutUsContact::latest()->take(1)->first();

        return view('news-details', compact('last_news', 'news', 'about'));
    }

}
