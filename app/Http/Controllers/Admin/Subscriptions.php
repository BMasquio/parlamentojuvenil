<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Data\Repositories\Subscriptions as SubscriptionsRepository;
use Illuminate\Http\Request;

class Subscriptions extends Controller
{
    public function show(Request $request, $id)
    {
        return app(SubscriptionsRepository::class)
            ->findById($id)
            ->load('student');
    }
}
