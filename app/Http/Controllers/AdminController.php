<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Flasher\Laravel\Facades\Flasher;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        // Add a success message
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category added successfully..!');

        return redirect()->back();
    }
}
