@extends('manage.layouts.manage')
@section('content')
<div class="page-nav">
    <a href="{{ route('manage.menus.index') }}" class="btn btn-primary btn-sm">
        <i class="fa fa-list-alt"></i>
        <span> Return to List</span>
    </a>
</div>
<div class="page-body">
    <div class="body-heading">
        <h3>
            <i class="fa fa-plus"></i>
            <span>Add Menu</span>
        </h3>
    </div>  
    <div class="body-content">
        <div class="form-content-sm">
            <form action="{{ route('manage.menus.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="parent_id">Parent Menu:</label>
                    <select name="parent_id" class="form-control select2-select"> 
                        @include('manage._includes.form.menus_opts', ['name'=>'parent_id'])
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="url">Url: <span class="ietips">[ i.e. {{url('/')}}/ slug or #target ]</span></label>
                    {{-- <input type="text" name="url_suffix" class="form-control"> --}}
                    <input type="text" name="url" class="form-control" value="{{old('url')}}">
                </div>
                <div class="form-group">
                    <label for="target">Target:</label>
                    <select name="target" class="form-control"> 
                        <option value="_self" selected>_self</option>
                        <option value="_blank">_blank</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="icon_class">Icon Class:</label>
                    <input type="text" name="icon_class" class="form-control" value="{{old('icon_class')}}">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="btn">
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection