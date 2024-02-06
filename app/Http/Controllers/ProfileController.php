<?php
namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    public function show()
    {
        
        $user = auth()->user();
        
        return view('profile.show', compact('user'));
    }
}
