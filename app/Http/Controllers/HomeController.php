<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Str;

class HomeController extends Controller
{
  
    
    public function recipe()
    {
        // Get active recipes grouped by type
        $recipesByType = Recipe::where('status', 1)->get()->groupBy('type');
    
        return view('recipe', compact('recipesByType'));
    }
    
    // For full recipe view when clicking ▶
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipe-show', compact('recipe'));
    }
    

}


