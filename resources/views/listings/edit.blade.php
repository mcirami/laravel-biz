@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a class="btn btn-outline-secondary" href="/listings/{{ $listing->id }}">Go Back</a>
                <div class="panel-heading">Update Listing</div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                    {{ Form::bsText('name', $listing->name) }}
                    {{ Form::bsText('website', $listing->website) }}
                    {{ Form::bsText('email', $listing->email) }}
                    {{ Form::bsText('phone', $listing->phone) }}
                    {{ Form::bsText('address', $listing->address) }}
                    {{ Form::bsTextArea('bio', $listing->bio) }}
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::bsSubmit('submit', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection