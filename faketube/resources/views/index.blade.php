@extends('layouts.app')

@section('content')
    <h1>Favorite Channels</h1>
    <ul>
        @foreach ($channels as $channel)
            <li>
                <h2>{{ $channel->channelname }}</h2>
                <p>Subscribers: {{ $channel->subscriberscount }}</p>
                <a href="{{ $channel->URL }}" target="_blank">Visit Channel</a>
                <a href="/faketube/channels/{{ $channel->id }}/edit">Edit</a>
                <form method="post" action="/faketube/channels/{{ $channel->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="/faketube/channels/create">Add New Channel</a>
@endsection