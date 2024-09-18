<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\select;

if (!function_exists('admin_guard')) {
    function admin_guard()
    {
        return auth('admin');
    }
}

if (!function_exists('teacher_guard')) {
    function teacher_guard()
    {
        return auth('teacher');
    }
}

if (!function_exists('academic_guard')) {
    function academic_guard()
    {
        return auth('academic');
    }
}

if (!function_exists('check_guard')) {
    function check_guard()
    {
        $guards = ['admin', 'teacher', 'academic'];
        foreach ($guards as $guard) {
            if (auth($guard)->check()) {
                return auth($guard);
            }
        }
        return null;
    }
}

if (!function_exists('get_user_data')) {
    function get_user_data()
    {
        $guards = ['admin', 'teacher', 'academic'];
        foreach ($guards as $guard) {
            if (auth($guard)->check()) {
                return auth($guard)->user();
            }
        }
        return null;
    }
}

if (!function_exists('loadDashboardRoutes')) {
    function loadDashboardRoutes()
    {
        $dashboardPath = base_path('routes/dashboard');
        $files = glob($dashboardPath . '/*.php');

        foreach ($files as $file) {
            Route::middleware('web')->group($file);
        }
    }
}

/*
if (!function_exists('loadcategories')) {
    function loadcategories($select=null)
    {
        $categories = Category::selectRaw('name as text')
        ->selectRaw('category_id as id')
        ->selectRaw('parent as parent')
        ->selectRaw('locale as locale')
        ->where('locale',session('locale'))
        ->get(['id','text','parent']);

        
        $category_arr = [];

        foreach($categories as $category)
        {
            $list_arr = [];
            if($select !== null && $select = $categories->id)
            {
                $list_arr['icon']= '';
                $list_arr['a_attr']= '';
                $list_arr['li_attr']= '';
                $list_arr['children']= [];
                $list_arr['state']= [
                    'opened' => true,
                    'selected' => true,
                ];
            }

            $list_arr['id'] = $category->id;
            $list_arr['parent'] = $category->parent !==null ? $category->parent : '#';
                $list_arr['text'] = $category->text;
            
            
            array_push($category_arr,$list_arr);
            
        }

     

        return json_encode($category_arr,JSON_UNESCAPED_UNICODE);
        
    }
}
*/
