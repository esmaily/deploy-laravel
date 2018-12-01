@extends('fileManager::layouts')

@section('content')
    <div class = "image-viewer">
        <form action = "{{ route('fileManager.addWaterMark') }}" method = "post" target = "_self">
            @csrf
            @if(session()->has('message'))
                <div class="alert text-center  alert-success">{{ session('message') }}</div>
            @endif
            <input type = "hidden" name = "file" value="{{ $file }}">
            <div class="form-group">
                <figure class="figure col-md-12">
                    <img src = "{{ $file }}" class = "figure-img img-responsive"/>
                </figure>
            </div>
            <div class = "form-group">
                <input type = "submit"  class = "btn btn-primary" value = "افزودن واترمارک"/>
            </div>
        </form>
    </div>
@stop