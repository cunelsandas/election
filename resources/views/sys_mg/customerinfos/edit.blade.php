@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">แก้ไขชื่อหน่วยงาน</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('customerinfos.update',$customerinfo->id)}}" method="POST">
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">grid_on</i>
                                <input type="text" name="name" id="name" value="{{Request::old('facebook_link') ? : $customerinfo->name}}">
                                <label for="name">ชื่อหน่วยงาน</label>
                                <span class="{{$errors->has('name') ? 'helper-text red-text' : ''}}">{{$errors->first('facebook_link')}}</span>
                            </div>
                            @method('PUT')
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light mt-15 col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">อัพเดท</button>
                        </form>
                    </div>
                    <div class="card-action">
                        <a href="/customerinfos">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection