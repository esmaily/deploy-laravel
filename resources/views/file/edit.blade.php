@extends('fileManager::layouts')

@section('content')
    <div id="page-title">
        <span class="title">ویرایش{{last(explode('/',$file)) }}- <a href="{{ route('fileManager.index') }}"> » بازگشت </a></span>
        <div style="text-align: right; margin-top: 10px;">
        </div>
    </div>
    <div class="imgeviewer">
        <form action="{{ route('fileManager.update') }}" method="post" target="_self">
            @csrf
            @method('PUT')
            <input type = "hidden" name="file" value="{{ $file }}">
            <div class="viewfooter">
                <div>
                    <textarea class="textarea" name="description">{{ $content }}</textarea>

                </div>
                <input type="submit" name="addwatermark" class="button2" value="ثبت تغییرات" />
                <input type="reset" name="addwatermark" class="button2 btncancel" value="انصراف" />
            </div>
        </form>
    </div>
    @stop