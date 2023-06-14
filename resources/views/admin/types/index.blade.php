@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pt-5 row justify-content-center">
            <div class="col">
                @if (session('message'))
                    <div class="alert alert-info mb-4" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header h4 d-flex align-items-center justify-content-between">
                        {{ __('Types of projects:') }}
                        <a href="{{ route('admin.types.create') }}">
                            @include ('partials.svg.add')
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($types as $type)
                                    <tr>
                                        <th class="align-middle" scope="row">{{ $type->id }}</th>
                                        <td class="align-middle">{{ $type->name }}</td>
                                        <td class="align-middle  d-flex justify-content-end align-items-center gap-3">
                                            @include('admin.types.partials.editZone')
                                            <a href="{{ route('admin.types.show', $type->id) }}">
                                                @include('partials.svg.show')
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection