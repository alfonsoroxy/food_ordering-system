<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;

    //Edit Category
    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug', $category_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    //Auto Generate Slug
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    //Validation Form
    public function updated($fields)
    {
        $this->validateOnly($fields, [
          'name' => 'required',
          'slug' => 'required|unique:categories'
        ]);
    }

    //Update Admin Category
    public function updateCategory()
    {
        $this->validate([
          'name' => 'required',
          'slug' => 'required|unique:categories'
        ]);

        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;

        $category->save();
        session()->flash('message', 'Category has been updated successfully! ');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.master');
    }
}
