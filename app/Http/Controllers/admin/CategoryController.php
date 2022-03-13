<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [

            'categories' => Category::all(),

        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $category = Category::query()->create([

            'title' => $request->get('title'),
            'slug' => $request->get('slug')
        ]);

        session()->flash('success',
            "دسته بندي  $category->title  ايجاد شد.! "
        );

        return redirect(route('categories.index'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [

            'category' => $category,
        ]);
    }

    public function update(Category $category, UpdateCategoryRequest $request)
    {
        $isSlugUsed = Category::query()->where('slug', $request->get('slug'))
            ->where('id', '!=', $category->id)->exists();

        if ($isSlugUsed) {

            return redirect()->back()->withErrors(['slug' => 'نامک قبلا انتخاب شده است.']);
        }

        $category->update([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
        ]);

        session()->flash('success',
            "دسته بندي  $category->title ویرایش شد.! "
        );

        return redirect(route('categories.index'));

    }

    public function destroy(Category $category)
    {
        session()->flash('delete',
            "دسته بندي  $category->title حذف شد.! "
        );

        //must be search that hotel not in category

        $category->delete();

        return redirect(route('categories.index'));

    }
}
