@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="POST" class="container" id="save-form"
        enctype="multipart/form-data">
        @csrf
        <div class="pt-5 row justify-content-center">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex gap-3 align-items-center justify-content-between">
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') }}">


                        <a class="btn btn-success btn-sm"
                            onclick="event.preventDefault();
                            document.getElementById('save-form').submit();">
                            @include('partials.svg.save')
                        </a>


                    </div>
                    <div class="card-body">
                        <h5>Description:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="description">{{ trim(old('description')) }}</textarea>
                        </p>
                        <h5>Project link:</h5>
                        <input type="text" class="form-control" id="link" name="link"
                            value="{{ old('link') }}">

                        <h5 class="pt-3">Type of project:</h5>

                        <select name="type_id" class="form-select">
                            <option value="" selected>Select:</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>

                        <h5 class="pt-3">Immagine:</h5>
                        <input type="file" class="form-control" id="image" name="image">

                        {{-- anteprima immagine upload  --}}

                        <div class="preview pt-3">
                            <img id="file-image-preview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection