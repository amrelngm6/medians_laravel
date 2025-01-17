<?php

namespace App\Modules\Contracts\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        // List all Contracts
    }

    public function store(Request $request)
    {
        // Store a new Contract
    }

    public function show(Request $request, $id)
    {
        // Display a single Contract
    }

    public function update(Request $request, $id)
    {
        // Update the specified Contract
    }

    public function destroy(Request $request, $id)
    {
        // Delete the specified Contract
    }
}
