@extends('layouts.app')

@section('content')
    <h1>Edit Channel</h1>
    <form method="post" action="/faketube/channels/{{ $channel->id }}">
        @csrf
        @method('PUT')
        <label for="channelname">Channel Name:</label>
        <input type="text" name="channelname" value="{{ $channel->channelname }}" required><br>
        <label for="subscriberscount">Subscribers Count:</label>
        <input type="number" name="subscriberscount" value="{{ $channel->subscriberscount }}" required><br>
        <label for="URL">Channel URL:</label>
        <input type="url" name="URL" value="{{ $channel->URL }}" required><br>
        <button type="submit">Update Channel</button>
    </form>
    <a href="/faketube/channels">Back to List</a>
@endsection