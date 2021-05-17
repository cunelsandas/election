@extends('layouts.app')
@section('content')
    <style>
        .zoom {
            padding: 50px;
            transition: transform .2s; /* Animation */
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
    <div class="container">
        <h4 class="grey-text text-darken-2 center">ลิงค์ Facebook Live</h4>

        {{-- Include the searh component with with title and route --}}
        {{--    @component('sys_mg.inc.search',['title' => 'fb' , 'route' => 'states.search'])--}}
        {{--    @endcomponent--}}

        <div class="row">
            <!-- Show All States List as a Card -->
            <div class="card col s12 m12 l12 xl12">
                <div class="card-content">
                    <div class="row">
                        <h5 class="pl-15 grey-text text-darken-2"></h5>
                        <!-- Table that shows States List -->
                        <table class="responsive-table col s12 m12 l12 xl12">
                            <thead class="grey-text text-darken-2">
                            <tr>
                                <th width="5%">ID</th>
                                <th width="80%">Facebook Link</th>
                                {{--                                <th>Created at</th>--}}
                                {{--                                <th>Updated at</th>--}}
                                <th width="15%">ตัวเลือก</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Check if there are any states to render in view -->
                            @if($systemsettings->count())
                                @foreach($systemsettings as $systemsetting)
                                    <tr>
                                        <td>{{$systemsetting->id}}</td>
                                        <td>{{$systemsetting->facebook_link}}</td>
                                        {{--                                        <td>{{$state->created_at}}</td>--}}
                                        {{--                                        <td>{{$state->updated_at}}</td>--}}
                                        <td>
                                            <div class="row mb-0">
                                                <div class="col">
                                                    <a href="{{route('systemsettings.edit',$systemsetting->id)}}"
                                                       class="btn btn-floating btn-small waves=effect waves-light orange"><i
                                                                class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form action="{{route('systemsettings.destroy',$systemsetting->id)}}"
                                                          method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button type="submit"
                                                                class="btn btn-floating btn-small waves=effect waves-light red">
                                                            <i class="material-icons">delete</i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- if there are no states then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Setting have been
                                            found yet!</h6></td>
                                </tr>
                            @endif
                            @if(isset($search))
                                <tr>
                                    <td colspan="3">
                                        <a href="/systemsettings" class="right">Show All</a>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <!-- States Table END -->
                    </div>
                    <!-- Show Pagination Links -->
                    {{--                <div class="center">--}}
                    {{--                  {{$systemsettings->links('vendor.pagination.default',['paginator' => $systemsettings])}}--}}
                    {{--                </div>--}}
                </div>
            </div>
            <div style="margin-left: 20%">
                <p style="text-decoration: underline">ขั้นตอนการใส่ลิงค์
                </p>
                <p>
                    1.เข้าไปที่ลิงค์วีดีโอที่ต้องการนำมาใส่ในเว็บ
                </p>
                <img class="zoom" style="height: 300px;width: auto;margin-left: -12%"
                     src="{{asset('storage/img/1.jpeg')}}">
                <p>
                    2.กดเข้าไปที่เมนูและเลือก < / > ฝัง
                </p>
                <img class="zoom" style="height: 300px;width: auto;margin-left: -12%"
                     src="{{asset('storage/img/2.png')}}">
                <p>
                    3.กดปุ่มคัดลอกโค้ด
                </p>
                <img class="zoom" style="height: 300px;width: auto;margin-left: -12%"
                     src="{{asset('storage/img/3.jpeg')}}">
            </div>
            <!-- Card END -->
        </div>
    </div>


    <!-- This is the button that is located at the right bottom, that navigates us to states.create view -->
    {{--<div class="fixed-action-btn">--}}
    {{--    <a class="btn-floating btn-large waves=effect waves-light red" href="{{route('systemsettings.create')}}">--}}
    {{--        <i class="large material-icons">add</i>--}}
    {{--    </a>--}}
    {{--</div>--}}
@endsection