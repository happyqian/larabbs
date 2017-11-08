@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default col-md-10 col-md-offset-1">
            <div class="panel-heading">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                </h4>
            </div>
            @include('common.error')
            <div class="panel-body">
                <form action="{{ route('users.update',$user->id) }}" method="post" accept-charset="utf-8">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input value="{{ old('name',$user->name) }}" type="text" name="name" id="name-field" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email-field">邮箱</label>
                        <input type="text" name="email" value="{{ old('email',$user->email) }}" id="email-field" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="introduction-field">个人简介</label>
                        <textarea name="introduction" id="introduction-field" cols="30" rows="3" class="form-control" >{{ old('introduction',$user->introduction) }}</textarea>
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop