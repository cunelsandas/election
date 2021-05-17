@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-panel grey-text text-darken-2 mt-20">
            <h4 class="grey-text text-darken-1 center">รายละเอียดพนักงาน</h4>
            <div class="row">
                <div class="row collection mt-20">
                    <!-- Show this image on small devices -->
                    <div class="hide-on-med-only hide-on-large-only row">
                        <div class="col s8 offset-s2 mt-20">
                            <img class="p5 card-panel emp-img-big" src="{{asset('storage/employee_images/'.$employee->picture)}}">
                        </div>
                    </div>
                    <div class="col m8 l8 xl8">
                        <h5 class="pl-15 mt-20">{{$employee->first_name}} {{$employee->last_name}}</h5>
                        <p class="pl-15"><i class="material-icons left">person_outline</i>{{$employee->age}} ปี</p>
                        <p class="pl-15"><i class="material-icons left">person_outline</i>{{$employee->empGender->gender_name}}</p>
                    </div>
                    <!-- Hide this image on small devices -->
                    <div class="hide-on-small-only col m4 l4 xl3">
                        <img class="p5 card-panel emp-img-big" src="{{asset('storage/employee_images/'.$employee->picture)}}">
                    </div>
                </div>
                @php
                    $origin = date_create($employee->birth_date);
                    $target = date_create(date(now()));
                    $interval = date_diff($origin, $target);

                @endphp
{{--                <div class="collection">--}}
{{--                    <div class=" row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">อายุ :</span><span class="col m8 l8 xl9">{{$interval->y}} ปี</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">เบอร์โทรศัพท์ :</span><span class="col m8 l8 xl9">{{$employee->phone}}</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">รหัสไปรษณีย์ :</span><span class="col m8 l8 xl9">{{$employee->empCity->zip_code}}</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">แผนก :</span><span class="col m8 l8 xl9">{{$employee->empDepartment->dept_name}}</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">สายงาน :</span><span class="col m8 l8 xl9">{{$employee->empDivision->division_name}}</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">อีเมล :</span><span class="col m8 l8 xl9">{{$employee->email}}</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">เงินเดือน :</span><span class="col m8 l8 xl9">฿ {{$employee->empSalary->s_amount}}.- บาท/-</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">วันที่เข้าทำงาน :</span><span class="col m8 l8 xl9">{{Thaidateonly($employee->join_date)}}</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">วันเกิด :</span><span class="col m8 l8 xl9">{{Thaidateonly($employee->birth_date)}}</span></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <form action="{{route('candidates.destroy',$employee->id)}}" method="POST">
                    @method('DELETE')
                    @csrf()
                    <button class="btn red col s3 offset-s2 m3 offset-m2 l3 offset-l2 xl3 offset-xl2" type="submit">ลบผู้สมัคร</button>
                </form>
                <a class="btn orange col s3 offset-s2 m3 offset-m2 l3 offset-l2 xl3 offset-xl2" href="{{route('candidates.edit',$employee->id)}}">แก้ไขข้อมูล</a>
            </div>
        </div>
    </div>
@endsection