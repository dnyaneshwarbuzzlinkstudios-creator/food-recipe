<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe; 
class AddRecipeController extends Controller {
    // Show all recipes
    public function index()
    {
        // Get all recipes
        $recipes = Recipe::all();

        // Page meta title
        $metatitle = "All Recipes";

        // Send data to view
        return view('admin.recipes.all-recipe', compact('recipes', 'metatitle'));
    }

    // Show form
    public function create()
    {
        $data['metatitle'] = "All Recipe";
        return view('admin.recipes.add-recipe',$data);
    }

    // Store recipe
    public function store(Request $request)
{
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'type'        => 'required|string',
        'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'required|string',
        'recipe'      => 'required|string',
        'video_link'  => 'nullable|url',
        'status'      => 'required|boolean',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/recipes'), $imageName);
        $validated['image'] = $imageName;
    }

    \App\Models\Recipe::create($validated);

    return redirect()->route('recipes.index')->with('success', 'Recipe added successfully.');
}


    // Edit
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $metatitle = "Edit";
        return view('admin.recipes.edit-recipe', compact('recipe','metatitle'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'type'        => 'required|string',
            'description' => 'required|string',
            'recipe'      => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'video_link'  => 'nullable|url',
            'status'      => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/recipes'), $imageName);
            $validated['image'] = $imageName;
        }

        $recipe->update($validated);

        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully!');
    }

    // Delete
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        return redirect()->route('recipes.index')->with('success', 'Recipe deleted successfully!');
    }
}
