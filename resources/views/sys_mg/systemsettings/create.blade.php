@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">จัดการ Facebook Live Link</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('systemsettings.store')}}" method="POST">
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">grid_on</i>
                                <input type="text" name="facebook_link" id="facebook_link" class="validate" value="{{ Request::old('facebook_link') ? : '' }}">
                                <label for="facebook_link">Link</label>
                                <span class="{{$errors->has('facebook_link') ? 'helper-text red-text' : '' }}">{{$errors->first('facebook_link')}}</span>
                            </div>
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light mt-15 col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">เพิ่ม</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/systemsettings">ย้อนกลับ</a>
                </div>
            </div>
        </div>
    </div>
@endsection