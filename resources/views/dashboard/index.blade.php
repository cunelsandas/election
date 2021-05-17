@extends('layouts.app')
@section('content')

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }
    </style>
    @php
        function DateThai($strDate)
        {
            $strYear = date("Y", strtotime($strDate)) + 543;
            $strMonth = date("n", strtotime($strDate));
            $strDay = date("j", strtotime($strDate));
            $strHour = date("H", strtotime($strDate));
            $strMinute = date("i", strtotime($strDate));
            $strSeconds = date("s", strtotime($strDate));
            $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
            $strMonthThai = $strMonthCut[$strMonth];
            return "$strDay $strMonthThai $strYear, $strHour:$strMinute:$strSeconds น.";
        }
    @endphp
    <br>
    <div>
        <div class="row white-text">
            <a href="/candidates" class="white-text">
                <div class="mx-20 card-panel pink lighten-1 col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2 offset-xl1 ml-14">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">person</i>
                            <h6 class="no-padding txt-md">ผู้สมัคร</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">ทั้งหมด({{$t_employees}})คน</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/admins" class="white-text">
                <div class="mx-20 card-panel teal lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">person_outline</i>
                            <h6 class="no-padding txt-md">แอดมิน</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">ทั้งหมด({{$t_admins}})คน</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/departments" class="white-text">
                <div class="mx-20 card-panel green lighten-1 col s8 offset-s2 m4 offset-m2 l4 offset-l2 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">business</i>
                            <h6 class="no-padding txt-md">ตำแหน่ง</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">ทั้งหมด({{$t_departments}})</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/divisions" class="white-text hide-on-small-only">
                <div class="mx-20 card-panel orange lighten-1 col s8 offset-s2 m4 l4 xl2">
                    <div class="row">
                        <div class="col s7 xl7">
                            <i class="material-icons medium white-text pt-5">location_city</i>
                            <h6 class="no-padding txt-md">เขต</h6>
                        </div>
                        <div class="col s5 xl5">
                            <p class="no-padding center mt txt-sm">ทั้งหมด({{$t_divisions}})</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div>
        <label class="center" style="text-align: center;font-size: 2em">QR Code หน้าเว็บไซต์</label>
        <img style="border: solid 15px black;padding: 20px;" class="center"
             src="https://chart.googleapis.com/chart?cht=qr&chs=350x350&chl={{url('')}}/&chld=L|0" alt="">
    </div>
    <br>

    <div class="container-fluid">
        <div class="card-panel">
            <canvas id="employee"></canvas>
        </div>
    </div>

    @if(auth()->user()->zone == 0)
    <div class="container-fluid">
        <div class="card-panel">
            กิจกรรมล่าสุด - Activity LOG
            @foreach($activity_log as $al)
                <p><font style="color: green">{{$al->first_name}} {{$al->first_name}}</font> / หมายเลข  {{$al->number}} เขต {{$al->division_id}} / คะแนน <font style="text-decoration: underline;color: red"> {{number_format($al->totalpoint)}}</font> @ผู้แก้ไข {{$al->user_edit}} : เวลา {{DateThai($al->updated_at)}}</p>
            @endforeach
        </div>
    </div>
    @endif
    <br>
    {{-- include the chart.js Library --}}
    <script src="{{asset('js/Chart.js')}}"></script>

    {{-- Create the chart with javascript using canvas --}}
    <script>
        // Get Canvas element by its id
        employee_chart = document.getElementById('employee').getContext('2d');
        chart = new Chart(employee_chart, {
            type: 'line',
            data: {
                labels: [
                    /*
                        this is blade templating.
                        we are getting the date by specifying the submonth
                     */
                    '{{Thaidatefull(Carbon\Carbon::now()->subMonths(4)->toFormattedDateString())}}',
                    '{{Thaidatefull(Carbon\Carbon::now()->subMonths(3)->toFormattedDateString())}}',
                    '{{Thaidatefull(Carbon\Carbon::now()->subMonths(2)->toFormattedDateString())}}',
                    '{{Thaidatefull(Carbon\Carbon::now()->subMonths(1)->toFormattedDateString())}}'
                ],
                datasets: [{
                    label: 'ผู้สมัคร',
                    data: [
                        '{{$emp_count_4}}',
                        '{{$emp_count_3}}',
                        '{{$emp_count_2}}',
                        '{{$emp_count_1}}'
                    ],
                    backgroundColor: [
                        'rgba(178,235,242 ,1)'
                    ],
                    borderColor: [
                        'rgba(0,150,136 ,1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection