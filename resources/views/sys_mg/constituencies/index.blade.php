@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">ข้อมูลจำนวนผู้มีสิทธิ์เลือกตั้ง</h4>

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
                                <th>ID</th>
                                <th>จำนวนผู้มีสิทธิ์เลือกตั้ง</th>
{{--                                <th>Created at</th>--}}
{{--                                <th>Updated at</th>--}}
                                <th>ตัวเลือก</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Check if there are any states to render in view -->
                            @if($constituencies->count())
                                @foreach($constituencies as $constituencie)
                                    <tr>
                                        <td>{{$constituencie->id}}</td>
                                        <td>{{number_format($constituencie->total_constituency)}} คน</td>
{{--                                        <td>{{$state->created_at}}</td>--}}
{{--                                        <td>{{$state->updated_at}}</td>--}}
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                                    <a href="{{route('constituencies.edit',$constituencie->id)}}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form action="{{route('constituencies.destroy',$constituencie->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="material-icons">delete</i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- if there are no states then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Setting have been found yet!</h6></td>
                                </tr>
                            @endif
                            @if(isset($search))
                                <tr>
                                    <td colspan="3">
                                        <a href="/constituencies" class="right">Show All</a>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <!-- States Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
                  {{$constituencies->links('vendor.pagination.default',['paginator' => $constituencies])}}
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>


<!-- This is the button that is located at the right bottom, that navigates us to states.create view -->
{{--<div class="fixed-action-btn">--}}
{{--    <a class="btn-floating btn-large waves=effect waves-light red" href="{{route('customerinfos.create')}}">--}}
{{--        <i class="large material-icons">add</i>--}}
{{--    </a>--}}
{{--</div>--}}
@endsection