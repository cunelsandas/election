@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m12 l12 xl12 mt-20">
                <div>
                    <h4 class="center grey-text text-darken-2 card-title">เพิ่มผู้สมัครใหม่</h4>
                </div>
                <hr>
                <div class="card-content">
                    <form action="{{route('candidates.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                            <i class="material-icons prefix">view_column</i>
                            <select name="head_number">
                                <option value="" disabled {{ old('head_number')? '' : 'selected' }}>เลือกคอลัมน์</option>
                                <option value="1" {{ old('head_number')? 'selected' : '' }}>คอลัมน์ 1</option>
                                <option value="2" {{ old('head_number')? 'selected' : '' }}>คอลัมน์ 2</option>
                                <option value="3" {{ old('head_number')? 'selected' : '' }}>คอลัมน์ 3</option>

                            </select>
                            <label>แถวที่</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                <i class="material-icons prefix">filter_1</i>
                                <input type="number" name="number" id="number" value="{{Request::old('number') ? : ''}}">
                                <label for="first_name">หมายเลข</label>
                                <span class="{{$errors->has('number') ? 'helper-text red-text' : ''}}">{{$errors->first('number')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="first_name" id="first_name"
                                       value="{{Request::old('first_name') ? : ''}}">
                                <label for="first_name">ชื่อ</label>
                                <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="last_name" id="last_name"
                                       value="{{Request::old('last_name') ? : ''}}">
                                <label for="last_name">นามสกุล</label>
                                <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                <i class="material-icons prefix">perm_identity</i>
                                <input type="number" name="age" id="age" value="{{Request::old('age') ? : ''}}">
                                <label for="age">อายุ</label>
                                <span class="{{$errors->has('age') ? 'helper-text red-text' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</span>
                            </div>


                            <div class="input-field col s12 m6 l6 xl4">
                                <i class="material-icons prefix">person_outline</i>
                                <select name="gender">
                                    <option value="" disabled {{ old('gender')? '' : 'selected' }}>เลือกเพศ</option>
                                    @foreach($genders as $gender)
                                        <option value="{{$gender->id}}" {{ old('gender')? 'selected' : '' }}>{{$gender->gender_name}}</option>
                                    @endforeach
                                </select>
                                <label>เพศ</label>
                            </div>

                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">people_alt</i>
                                <select name="department">
                                    <option value="" disabled {{ old('department') ? '' : 'selected' }}>เลือกตำแหน่ง
                                    </option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}" {{ old('department') ? 'selected' : '' }}>{{$department->dept_name}}</option>
                                    @endforeach
                                </select>
                                <label>ตำแหน่ง</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">business</i>
                                <select name="division">
                                    <option value="" disabled {{ old('division') ? '' : 'selected' }}>เลือกเขต</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }}>{{$division->division_name}}</option>
                                    @endforeach
                                </select>
                                <label>เขต</label>
                            </div>
                            <div class="file-field input-field col s12 m12 l12 xl8 offset-xl2">
                                <div class="btn">
                                    <span>รูปภาพ</span>
                                    <input type="file" name="picture">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="{{old('picture') ? : '' }}">
                                    <span class="{{$errors->has('picture') ? 'helper-text red-text' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</span>
                                </div>
                            </div>
                        </div>
                        @csrf()
                        <div class="row">
                            <button type="submit"
                                    class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">
                                เพิ่มข้อมูล
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-action">
                    <a href="/candidates">ย้อนกลับ</a>
                </div>
            </div>
        </div>
    </div>
@endsection