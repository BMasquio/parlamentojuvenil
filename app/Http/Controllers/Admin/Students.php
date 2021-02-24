<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Data\Repositories\Students as StudentsRepository;
use Illuminate\Http\Request;

class Students extends Controller
{
    public function show(Request $request, $id)
    {
        return app(StudentsRepository::class)->findById($id);
    }
}
