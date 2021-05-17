@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m12 l12 xl12 mt-20">
                <div>
                    <h4 class="center grey-text text-darken-2 card-title">แก้ไขข้อมูล</h4>
                </div>
                <hr>
                @if(auth()->user()->zone == 1 && $employee->division_id == 1)
                    <div class="card-content">
                        <form action="{{route('candidates.update',$employee->id)}}" method="POST"
                              enctype="multipart/form-data">
                            <input id="user_edit" name="user_edit" type="hidden"
                                   value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                            <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                <i class="material-icons prefix">view_column</i>
                                <select name="head_number">
                                    @if($employee->head_number == null)
                                        <option value="" selected >เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 1)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1" selected>คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 2)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2" selected>คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 3)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3" selected>คอลัมน์ 3</option>
                                    @endif
                                </select>
                                <label>คอลัมน์ที่</label>
                            </div>


                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                    <i class="material-icons prefix">filter_1</i>
                                    <input type="number" name="number" id="number"
                                           value="{{old('number') ? : $employee->number}}">
                                    <label for="first_name">หมายเลข</label>
                                    <span class="{{$errors->has('number') ? 'helper-text red-text' : ''}}">{{$errors->first('number')}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="first_name" id="first_name"
                                           value="{{old('first_name') ? : $employee->first_name}}">
                                    <label for="first_name">ชื่อ</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="last_name" id="last_name"
                                           value="{{old('last_name') ? : $employee->last_name}}">
                                    <label for="last_name">นามสกุล</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                {{--                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">--}}
                                {{--                                <i class="material-icons prefix">email</i>--}}
                                {{--                                <input type="email" name="email" id="email" value="{{old('email') ? : $employee->email}}">--}}
                                {{--                                <label for="email">อีเมล</label>--}}
                                {{--                                <span class="{{$errors->has('email') ? 'helper-text red-text' : ''}}">{{$errors->has('email') ? $errors->first('email') : ''}}</span>--}}
                                {{--                            </div>--}}
                                @php
                                    $origin = date_create($employee->birth_date);
                                    $target = date_create(date(now()));
                                    $interval = date_diff($origin, $target);

                                @endphp
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input type="number" name="age" id="age" value="{{old('age') ? : $employee->age}}">
                                    <label for="age">อายุ</label>
                                    <span class="{{$errors->has('age') ? 'helper-text red-text' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person_outline</i>
                                    <select name="gender">
                                        <option value="" disabled>เลือกเพศ</option>
                                        <!--
                                            make the option active which matches the employee gender
                                        -->
                                        @foreach($genders as $gender)
                                            <option value="{{$gender->id}}" {{old('gender') ? 'selected' : '' }} {{ $employee->empGender==$gender ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เพศ</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">people_alt</i>
                                    <select name="department">
                                        <option value="" disabled>เลือกตำแหน่ง</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}" {{old('department') ? 'selected' : ''}} {{ $employee->empDepartment==$department ? 'selected' : '' }} >{{$department->dept_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>ตำแหน่ง</label>
                                </div>
                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">business</i>
                                    <select name="division">
                                        <option value="0" disabled>เลือกเขต</option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }} {{ $employee->empDivision==$division ? 'selected' : '' }} >{{$division->division_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เขต</label>
                                </div>
                                <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                    <div class="btn">
                                        <span>รูปภาพ</span>
                                        <input type="file" name="picture">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               value="{{old('picture') ? : $employee->picture }}">
                                        <span class="{{$errors->has('picture') ? 'helper-text red-text' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</span>
                                    </div>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">addchart</i>
                                    <input type="number" name="totalpoint" id="totalpoint"
                                           value="{{old('totalpoint') ? : $employee->totalpoint}}">
                                    <label for="age"></label>
                                    <span class="{{$errors->has('totalpoint') ? 'helper-text red-text' : ''}}">{{$errors->has('totalpoint') ? $errors->first('totalpoint') : ''}}</span>
                                    <label>คะแนน</label>
                                </div>
                            </div>
                            @method('PUT')
                            @csrf()
                            <div class="row">
                                <button type="submit"
                                        class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">
                                    อัพเดท
                                </button>
                            </div>
                        </form>
                    </div>
                @elseif(auth()->user()->zone == 2 && $employee->division_id == 2)
                    <div class="card-content">
                        <form action="{{route('candidates.update',$employee->id)}}" method="POST"
                              enctype="multipart/form-data">
                            <input id="user_edit" name="user_edit" type="hidden"
                                   value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                            <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                <i class="material-icons prefix">view_column</i>
                                <select name="head_number">
                                    @if($employee->head_number == null)
                                        <option value="" selected >เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 1)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1" selected>คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 2)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2" selected>คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 3)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3" selected>คอลัมน์ 3</option>
                                    @endif
                                </select>
                                <label>คอลัมน์ที่</label>
                            </div>


                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                    <i class="material-icons prefix">filter_1</i>
                                    <input type="number" name="number" id="number"
                                           value="{{old('number') ? : $employee->number}}">
                                    <label for="number">หมายเลข</label>
                                    <span class="{{$errors->has('number') ? 'helper-text red-text' : ''}}">{{$errors->first('number')}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="first_name" id="first_name"
                                           value="{{old('first_name') ? : $employee->first_name}}">
                                    <label for="first_name">ชื่อ</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="last_name" id="last_name"
                                           value="{{old('last_name') ? : $employee->last_name}}">
                                    <label for="last_name">นามสกุล</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                {{--                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">--}}
                                {{--                                <i class="material-icons prefix">email</i>--}}
                                {{--                                <input type="email" name="email" id="email" value="{{old('email') ? : $employee->email}}">--}}
                                {{--                                <label for="email">อีเมล</label>--}}
                                {{--                                <span class="{{$errors->has('email') ? 'helper-text red-text' : ''}}">{{$errors->has('email') ? $errors->first('email') : ''}}</span>--}}
                                {{--                            </div>--}}
                                @php
                                    $origin = date_create($employee->birth_date);
                                    $target = date_create(date(now()));
                                    $interval = date_diff($origin, $target);

                                @endphp
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input type="number" name="age" id="age"
                                           value="{{old('age') ? : $employee->age}}">
                                    <label for="age">อายุ</label>
                                    <span class="{{$errors->has('age') ? 'helper-text red-text' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person_outline</i>
                                    <select name="gender">
                                        <option value="" disabled>เลือกเพศ</option>
                                        <!--
                                            make the option active which matches the employee gender
                                        -->
                                        @foreach($genders as $gender)
                                            <option value="{{$gender->id}}" {{old('gender') ? 'selected' : '' }} {{ $employee->empGender==$gender ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เพศ</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">people_alt</i>
                                    <select name="department">
                                        <option value="" disabled>เลือกตำแหน่ง</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}" {{old('department') ? 'selected' : ''}} {{ $employee->empDepartment==$department ? 'selected' : '' }} >{{$department->dept_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>ตำแหน่ง</label>
                                </div>
                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">business</i>
                                    <select name="division">
                                        <option value="0" disabled>เลือกเขต</option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }} {{ $employee->empDivision==$division ? 'selected' : '' }} >{{$division->division_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เขต</label>
                                </div>
                                <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                    <div class="btn">
                                        <span>รูปภาพ</span>
                                        <input type="file" name="picture">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               value="{{old('picture') ? : $employee->picture }}">
                                        <span class="{{$errors->has('picture') ? 'helper-text red-text' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</span>
                                    </div>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">addchart</i>
                                    <input type="number" name="totalpoint" id="totalpoint"
                                           value="{{old('totalpoint') ? : $employee->totalpoint}}">
                                    <label for="age"></label>
                                    <span class="{{$errors->has('totalpoint') ? 'helper-text red-text' : ''}}">{{$errors->has('totalpoint') ? $errors->first('totalpoint') : ''}}</span>
                                    <label>คะแนน</label>
                                </div>
                            </div>
                            @method('PUT')
                            @csrf()
                            <div class="row">
                                <button type="submit"
                                        class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">
                                    อัพเดท
                                </button>
                            </div>
                        </form>
                    </div>
                @elseif(auth()->user()->zone == 3 && $employee->division_id == 3)
                    <div class="card-content">
                        <form action="{{route('candidates.update',$employee->id)}}" method="POST"
                              enctype="multipart/form-data">
                            <input id="user_edit" name="user_edit" type="hidden"
                                   value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                            <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                <i class="material-icons prefix">view_column</i>
                                <select name="head_number">
                                    @if($employee->head_number == null)
                                        <option value="" selected >เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 1)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1" selected>คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 2)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2" selected>คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 3)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3" selected>คอลัมน์ 3</option>
                                    @endif
                                </select>
                                <label>คอลัมน์ที่</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                    <i class="material-icons prefix">filter_1</i>
                                    <input type="number" name="number" id="number"
                                           value="{{old('number') ? : $employee->number}}">
                                    <label for="first_name">หมายเลข</label>
                                    <span class="{{$errors->has('number') ? 'helper-text red-text' : ''}}">{{$errors->first('number')}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="first_name" id="first_name"
                                           value="{{old('first_name') ? : $employee->first_name}}">
                                    <label for="first_name">ชื่อ</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="last_name" id="last_name"
                                           value="{{old('last_name') ? : $employee->last_name}}">
                                    <label for="last_name">นามสกุล</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                {{--                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">--}}
                                {{--                                <i class="material-icons prefix">email</i>--}}
                                {{--                                <input type="email" name="email" id="email" value="{{old('email') ? : $employee->email}}">--}}
                                {{--                                <label for="email">อีเมล</label>--}}
                                {{--                                <span class="{{$errors->has('email') ? 'helper-text red-text' : ''}}">{{$errors->has('email') ? $errors->first('email') : ''}}</span>--}}
                                {{--                            </div>--}}
                                @php
                                    $origin = date_create($employee->birth_date);
                                    $target = date_create(date(now()));
                                    $interval = date_diff($origin, $target);

                                @endphp
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input type="number" name="age" id="age"
                                           value="{{old('age') ? : $employee->age}}">
                                    <label for="age">อายุ</label>
                                    <span class="{{$errors->has('age') ? 'helper-text red-text' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person_outline</i>
                                    <select name="gender">
                                        <option value="" disabled>เลือกเพศ</option>
                                        <!--
                                            make the option active which matches the employee gender
                                        -->
                                        @foreach($genders as $gender)
                                            <option value="{{$gender->id}}" {{old('gender') ? 'selected' : '' }} {{ $employee->empGender==$gender ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เพศ</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">people_alt</i>
                                    <select name="department">
                                        <option value="" disabled>เลือกตำแหน่ง</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}" {{old('department') ? 'selected' : ''}} {{ $employee->empDepartment==$department ? 'selected' : '' }} >{{$department->dept_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>ตำแหน่ง</label>
                                </div>
                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">business</i>
                                    <select name="division">
                                        <option value="0" disabled>เลือกเขต</option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }} {{ $employee->empDivision==$division ? 'selected' : '' }} >{{$division->division_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เขต</label>
                                </div>
                                <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                    <div class="btn">
                                        <span>รูปภาพ</span>
                                        <input type="file" name="picture">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               value="{{old('picture') ? : $employee->picture }}">
                                        <span class="{{$errors->has('picture') ? 'helper-text red-text' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</span>
                                    </div>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">addchart</i>
                                    <input type="number" name="totalpoint" id="totalpoint"
                                           value="{{old('totalpoint') ? : $employee->totalpoint}}">
                                    <label for="age"></label>
                                    <span class="{{$errors->has('totalpoint') ? 'helper-text red-text' : ''}}">{{$errors->has('totalpoint') ? $errors->first('totalpoint') : ''}}</span>
                                    <label>คะแนน</label>
                                </div>
                            </div>
                            @method('PUT')
                            @csrf()
                            <div class="row">
                                <button type="submit"
                                        class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">
                                    อัพเดท
                                </button>
                            </div>
                        </form>
                    </div>
                @elseif(auth()->user()->zone == 0)
                    <div class="card-content">
                        <form action="{{route('candidates.update',$employee->id)}}" method="POST"
                              enctype="multipart/form-data">
                            <input id="user_edit" name="user_edit" type="hidden"
                                   value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                            <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                <i class="material-icons prefix">view_column</i>
                                <select name="head_number">
                                    @if($employee->head_number == null)
                                        <option value="" selected>เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 1)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1" selected>คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 2)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2" selected>คอลัมน์ 2</option>
                                        <option value="3">คอลัมน์ 3</option>
                                    @elseif($employee->head_number == 3)
                                        <option value="">เลือกคอลัมน์</option>
                                        <option value="1">คอลัมน์ 1</option>
                                        <option value="2">คอลัมน์ 2</option>
                                        <option value="3" selected>คอลัมน์ 3</option>
                                    @endif
                                </select>
                                <label>คอลัมน์ที่</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl8 offset-xl2">
                                    <i class="material-icons prefix">filter_1</i>
                                    <input type="number" name="number" id="number"
                                           value="{{old('number') ? : $employee->number}}">
                                    <label for="first_name">หมายเลข</label>
                                    <span class="{{$errors->has('number') ? 'helper-text red-text' : ''}}">{{$errors->first('number')}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="first_name" id="first_name"
                                           value="{{old('first_name') ? : $employee->first_name}}">
                                    <label for="first_name">ชื่อ</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="last_name" id="last_name"
                                           value="{{old('last_name') ? : $employee->last_name}}">
                                    <label for="last_name">นามสกุล</label>
                                    <span class="{{$errors->has('first_name') ? 'helper-text red-text' : ''}}">{{$errors->first('first_name')}}</span>
                                </div>
                                {{--                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">--}}
                                {{--                                <i class="material-icons prefix">email</i>--}}
                                {{--                                <input type="email" name="email" id="email" value="{{old('email') ? : $employee->email}}">--}}
                                {{--                                <label for="email">อีเมล</label>--}}
                                {{--                                <span class="{{$errors->has('email') ? 'helper-text red-text' : ''}}">{{$errors->has('email') ? $errors->first('email') : ''}}</span>--}}
                                {{--                            </div>--}}
                                @php
                                    $origin = date_create($employee->birth_date);
                                    $target = date_create(date(now()));
                                    $interval = date_diff($origin, $target);

                                @endphp
                                <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input type="number" name="age" id="age"
                                           value="{{old('age') ? : $employee->age}}">
                                    <label for="age">อายุ</label>
                                    <span class="{{$errors->has('age') ? 'helper-text red-text' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</span>
                                </div>
                                <div class="input-field col s12 m6 l6 xl4">
                                    <i class="material-icons prefix">person_outline</i>
                                    <select name="gender">
                                        <option value="" disabled>เลือกเพศ</option>
                                        <!--
                                            make the option active which matches the employee gender
                                        -->
                                        @foreach($genders as $gender)
                                            <option value="{{$gender->id}}" {{old('gender') ? 'selected' : '' }} {{ $employee->empGender==$gender ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เพศ</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">people_alt</i>
                                    <select name="department">
                                        <option value="" disabled>เลือกตำแหน่ง</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}" {{old('department') ? 'selected' : ''}} {{ $employee->empDepartment==$department ? 'selected' : '' }} >{{$department->dept_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>ตำแหน่ง</label>
                                </div>
                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">business</i>
                                    <select name="division">
                                        <option value="0" disabled>เลือกเขต</option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }} {{ $employee->empDivision==$division ? 'selected' : '' }} >{{$division->division_name}}</option>
                                        @endforeach
                                    </select>
                                    <label>เขต</label>
                                </div>
                                <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                    <div class="btn">
                                        <span>รูปภาพ</span>
                                        <input type="file" name="picture">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               value="{{old('picture') ? : $employee->picture }}">
                                        <span class="{{$errors->has('picture') ? 'helper-text red-text' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</span>
                                    </div>
                                </div>

                                <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                    <i class="material-icons prefix">addchart</i>
                                    <input type="number" name="totalpoint" id="totalpoint"
                                           value="{{old('totalpoint') ? : $employee->totalpoint}}">
                                    <label for="totalpoint"></label>
                                    <span class="{{$errors->has('totalpoint') ? 'helper-text red-text' : ''}}">{{$errors->has('totalpoint') ? $errors->first('totalpoint') : ''}}</span>
                                    <label>คะแนน</label>
                                </div>
                            </div>
                            @method('PUT')
                            @csrf()
                            <div class="row">
                                <button type="submit"
                                        class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">
                                    อัพเดท
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <p style="color: red;font-size: 2em;text-align: center">
                        ท่านไม่มีสิทธิ์ในการแก้ไขข้อมูลของเขตอื่น</p>
                @endif
                <div class="card-action">
                    <a href="/candidates">ย้อนกลับ</a>
                </div>
            </div>
        </div>


    </div>
@endsection