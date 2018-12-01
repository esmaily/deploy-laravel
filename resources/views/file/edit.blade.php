@extends('fileManager::layouts')

@section('content')
    <div class="card">
        <h5 class="card-header text-right">ویرایش{{last(explode('/',$file)) }}</h5>
        <div class="card-body">
            <form action="{{ route('fileManager.update') }}" method="post" target="_self">
                @csrf
                @method('PUT')
                <input type="hidden" name="file" value="{{ $file }}">
                <div class="form-group" >
                    <label for="fileContent" class="text-right">محتوای فایل</label>
                    <textarea class="form-control" rows="14" name="description" id="fileContent">{{ $content }}</textarea>
                </div>
               <div class="form-row">
                   <input type="submit"  class="btn btn-success" value="ثبت تغییرات"/>
                   <input type="reset"  class="btn btn-warning ml-2" value="انصراف"/>
               </div>
            </form>
        </div>
            </div>

@stop