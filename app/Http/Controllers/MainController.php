<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\CourseCategory;
use App\Models\Banner;
use App\Models\Service;
use App\Models\News;
use App\Models\Facts;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use App\Models\AboutAdd;

class MainController extends Controller
{
    public function index()
    {
        $about_adds = AboutAdd::latest()->get();
        $users = User::all();
        $facts = Facts::all();
        $news = News::limit(3)->latest()->get();
        $services = Service::limit(3)->get();
        $banners = Banner::all();
        $categories = CourseCategory::all();
        return view('index', compact('categories', 'banners', 'services', 'news', 'facts', 'users', 'about_adds'));
    }

    public function service()
    {
        $services = Service::all();
        return view('service', compact('services'));
    }

    public function courses()
    {
        $categories = CourseCategory::all();
        $courses = Course::latest()->paginate(10);
        return view('courses', compact('categories', 'courses'));
    }

    public function team()
    {
        $teachers = Teacher::all();
        return view('team', compact('teachers'));
    }

    public function contact()
    {
        $categories = CourseCategory::all();
        return view('contact', compact('categories'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact_add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'category_id' => 'required',
         ]);

        Contact::create($request->all());
        return redirect()->route('contact')->with('seccess', 'Tez orada siz bilan bog\'lanishadi.');
    }

    public function takhira()
    {
        return view('takhira');
    }
}
