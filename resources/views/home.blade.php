@extends('layouts.backend')
@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Dashboard') }}</h2>
                    {{-- <h3>{{ auth()->user()->roles->pluck('name') }}</h3> --}}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>

                {{-- @role('editor')
                <div>
                    <h3>Post One - edit - @can('delete')
                        delete
                    @endcan - view</h3>
                    <h3>Post Two - edit - @can('delete')
                        delete
                    @endcan - view</h3>
                </div>
                @endrole --}}
            </div>
        </div>
    </div>
</div>
@endsection
