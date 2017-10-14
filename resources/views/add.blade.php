@extends('layouts.app')

@section('title', 'Add Event')

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
   
    <form action="{{ route('submit.event') }}" method="post">
        <div class="form-group">
            <label for="event_name">Event Name:</label>
            <input type="text" class="form-control" id="event_name" name="ename">
        </div>
        <div class="form-group">
            <label for="organizer">Organizer:</label>
            <input type="input" class="form-control" id="organizer" name="eorg">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="input" class="form-control" id="address" name="eaddress">
        </div>
        <div class="form-group">
            <label for="event_date">Date:</label>
            <input type="date" class="form-control" id="event_date" name="edate">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="edesc"></textarea>
        </div>
        <div class="form-group">
            Categories:
            <br/>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="cat_food">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Food</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="cat_drinks">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Drinks</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="cat_music">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Music</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="cat_kidfriendly">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Kid Friendly</span>
            </label>
        </div>
        {{ csrf_field() }}
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Add Event" id="submit_btn" name="submit">
        </div>
</form>

@endsection