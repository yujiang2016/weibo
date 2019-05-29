@extends('layouts.default')
@section('title','注册')
@section('content')
  <div class="offset-md-2 col-md-8">
      <div class="card">
          <div class="card-header">
              <h5>注册</h5>
          </div>
          @include('shared._errors')
          <div class="card-body">
              <form action="{{route('users.store')}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <lable for="name">名称：</lable>
                      <input type="text" name="name" class="form-control" value="{{old('name')}}">
                  </div>
                  <div class="form-group">
                      <lable for="email">邮箱：</lable>
                      <input type="text" name="email" class="form-control" value="{{old('email')}}">
                  </div>
                  <div class="form-group">
                      <lable for="password">密码：</lable>
                      <input type="text" name="password" class="form-control" value="{{old('password')}}">
                  </div>
                  <div class="form-group">
                      <label for="password_confirmation">确认密码：</label>
                      <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                  </div>
                  <button type="submit" class="btn btn-primary">注册</button>
              </form>
          </div>
      </div>
  </div>
@stop