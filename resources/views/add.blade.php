@extends('layouts.app')

@section('title', 'Add Event')

@section('content')


        <div class="form-group">
            <label for="event_name">Event:</label>
            <input type="text" class="form-control" id="event_name">
        </div>
        <div class="form-group">
            <label for="organizer">Organizer:</label>
            <input type="input" class="form-control" id="organizer">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="input" class="form-control" id="address">
        </div>
        <div class="form-group">
            <label for="event_date">Date:</label>
            <input type="date" class="form-control" id="event_date">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description"></textarea>
        </div>
        <div class="form-group">
            Categories:
            <br/>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Food</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Drinks</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Music</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Kid Friendly</span>
            </label>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Submit Button" id="submit_btn">
        </div>

@endsection