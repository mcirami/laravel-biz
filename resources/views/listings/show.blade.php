@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-12">
                    @if ($user = Auth::user())
                        <a class="btn btn-success pull-left" href="/dashboard">Back</a>
                    @else
                        <a class="btn btn-success pull-left" href="/listings">Back</a>
                    @endif
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $listing->name }}

                    @if ($user = Auth::user())
                        <div class="pull-right">
                            <a class="btn btn-success btn-xs pull-left" href="/listings/{{ $listing->id }}/edit">Edit</a>
                            {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are You Sure?")']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger btn-xs']) }}
                            {!! Form::close() !!}
                        </div>
                    @endif

                </div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Address: {{ $listing->address }}
                        </li>
                        <li class="list-group-item">
                            Website: <a href="{{ $listing->website }}" target="_blank">{{ $listing->website }}</a>
                        </li>
                        <li class="list-group-item">
                            Email: {{ $listing->email }}
                        </li>
                        <li class="list-group-item">
                            Phone: {{ $listing->phone }}
                        </li>
                    </ul>
                    <hr>
                    <div class="well">
                        {{ $listing->bio }}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection