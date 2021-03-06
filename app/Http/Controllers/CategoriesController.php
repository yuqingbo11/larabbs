<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use App\Models\User;
use App\Models\Link;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Request $request, Category $category, Topic $topics, User $user, Link $link)
    {
        $topics =$topics->withOrder($request->order)->where('category_id', $category->id)->paginate(30);
        $active_users = $user->getActiveUsers();
        $links = $link->getAllCached();
        return view('topics.index', compact('topics', 'category','active_users','links'));
    }
}
