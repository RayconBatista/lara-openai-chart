<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('clients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('clients.create');
    }

    public function show(Client $client): Application|Factory|View
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClientRequest $request
     * @return RedirectResponse
     */
    public function store(StoreClientRequest $request): RedirectResponse
    {
        DB::transaction(function() use($request) {
            $user = User::create([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
                'password' => Hash::make('123456')
            ]);

            $user->client()->create([
                'address_id' => $request->get('address_id'),
            ]);
        });

        return redirect()->route('clients.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return Application|Factory|View
     */
    public function edit(Client $client): View|Factory|Application
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClientRequest $request
     * @param Client $client
     * @return RedirectResponse|Response
     */
    public function update(UpdateClientRequest $request, Client $client): Response|RedirectResponse
    {
        DB::transaction(function() use($request, $client) {
            $client->user->update([
                'email' => $request->get('email'),
                'name' => $request->get('name')
            ]);

            $client->update([
                'address_id' => $request->get('address_id'),
            ]);
        });

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return void
     */
    public function destroy(Client $client): void
    {
        $client->delete();
    }
}
