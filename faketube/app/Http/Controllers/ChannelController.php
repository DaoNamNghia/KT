<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('faketube.channels.index', compact('channels'));
    }

    public function create()
    {
        return view('faketube.channels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'channelname' => 'required',
            'subscriberscount' => 'required|integer',
            'URL' => 'required|url',
        ]);

        Channel::create($validatedData);

        return redirect('/faketube/channels')->with('success', 'Channel created successfully.');
    }

    public function edit(Channel $channel)
    {
        return view('faketube.channels.edit', compact('channel'));
    }

    public function update(Request $request, Channel $channel)
    {
        $validatedData = $request->validate([
            'channelname' => 'required',
            'subscriberscount' => 'required|integer',
            'URL' => 'required|url',
        ]);

        $channel->update($validatedData);

        return redirect('/faketube/channels')->with('success', 'Channel updated successfully.');
    }

    public function destroy(Channel $channel)
    {
        $channel->delete();

        return redirect('/faketube/channels')->with('success', 'Channel deleted successfully.');
    }
}