<!DOCTYPE html>
<html>
<head>
    <title>รายงานผลคะแนนการเลือกตั้งอย่างไม่เป็นทางการ {{$customer_name->name}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,500;0,600;0,700;1,400&display=swap"
          rel="stylesheet">
</head>

<style>
    *, .card-subtitle, h2, h1, h3, h4, h5, h6 {
        font-family: 'Bai Jamjuree', sans-serif;
    }

    .card {
        border: none !important;
    }

    iframe {
        margin: auto;
        display: block;
    }

    body {
        background-color: white;
    }

    .vertical-center {
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 0;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .rotate-centered {
        top: 50%;
        right: 50%;
        position: absolute;
        transform: scale(-1) translate(-50%, 50%);
        writing-mode: vertical-lr;
        color: white;
    }

    .footer {
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: #efefef;
        text-align: center;
    }

    .footer_updated {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: #efefef;
        text-align: center;
    }

    .feedback {
        background-color: #efefef;
        color: black;
        padding: 10px 20px;
        border-radius: 4px;
        border-color: #efefef;

    }

    #mybutton {
        position: fixed;
        bottom: -4px;
        right: 0px;
        z-index: 1;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #323232;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #323232;
    }

    @media (max-width: 767px) {
        .hidden-mobile {
            display: none;
        }

        iframe {
            width: 350px;
        }
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .card-count {
        background: #fff;
        border-radius: 20px;
        display: inline-block;
        height: 250px;
        margin: 1rem;
        position: relative;
        width: 350px;
    }

    .card-count2 {
        background: #fff;
        border-radius: 20px;
        display: inline-block;
        height: 200px;
        margin: 1rem;
        position: relative;
        width: 300px;
    }

    @media (min-width: 320px) {
        .card-count2 {
            width: 100%;
            height: 200px;
            padding: 10px;
        }

        .card-count {
            width: 100%;
            height: 250px;
            padding: 10px;
        }
    }

    @media (min-width: 481px) {
        .card-count2 {
            width: 100%;
            height: 200px;
            padding: 10px;
        }

        .card-count {
            width: 100%;
            height: 250px;
            padding: 10px;
        }
    }

    @media (min-width: 641px) {
        /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
    }

    @media (min-width: 961px) {
        /* tablet, landscape iPad, lo-res laptops ands desktops */
    }

    @media (min-width: 1025px) {
        /* big landscape tablets, laptops, and desktops */
    }

    @media (min-width: 1281px) {
        /* hi-res laptops and desktops */
    }


    .card-1 {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }

    .card-1:hover {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .card-link {
        box-shadow: 4px 7px #888888;
    }

    /*dark mode*/
    body.dark-mode {
        background-color: #111;
        color: #eee;
    }

    body.dark-mode .card-1, body.dark-mode .card ,body.dark-mode .table ,body.dark-mode .headtitle {
        background-color: black !important;
        color: #eee;
    }

    body.dark-mode .headtitle, body.dark-mode .card-subtitle ,body.dark-mode .table {
        color: white !important;
    }

    body.dark-mode a {
        color: #111;
    }

    /*body.dark-mode button {*/
    /*    background-color: #eee;*/
    /*    color: #111;*/
    /*}*/

    body.light-mode {
        background-color: #eee;
        color: #111;
    }

    body.light-mode a {
        color: #111;
    }

    /*body.light-mode button {*/
    /*    background-color: #111;*/
    /*    color: #eee;*/
    /*}*/

    .noselect { /* disable selecting on frontend */
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none;
        /* Non-prefixed version, currently
                                         supported by Chrome, Edge, Opera and Firefox */
    }


</style>


<body id="body" class="light-mode">

<script>
    function toggleDarkLight() {
        var body = document.getElementById("body");
        var currentClass = body.className;
        body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
    }
</script>

<h4 class="mt-2"
    style="padding: 20px;background-color: #4b4c99;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">
    รายงานผลคะแนนการเลือกตั้งอย่างไม่เป็นทางการ <br> {{$customer_name->name}}</h4>
<div class="mt-4">
    @php
        $counthead = 0;
        $ct = $constituencies_use_total/$constituencies_total->total_constituency*100;
        echo $facebook_link->facebook_link;
    @endphp
</div>

<div class="py-5 noselect">
    <div id="mybutton">
        <button class="feedback">อัพเดทล่าสุดเมื่อ {{DateThai($getUpdateTime->updated_at)}}</button>
        <button class="feedback" type="button" name="dark_light" onclick="toggleDarkLight()"
                title="Toggle dark/light mode">🌓
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-count card-1">
                    <img class="center" style="height: 75px;width: auto;"
                         src="{{asset('storage/img/hand-up.png')}}">
                    <p style="text-align: center;padding: 5px;">จำนวนผู้มีสิทธิ์เลือกตั้ง</p>
                    <p style="text-align: center"><b
                                style="font-size: 3em">{{number_format($constituencies_total->total_constituency)}}</b>
                        คน</p>
                </div>
            </div>
            <div class="col">
                <div class="card-count card-1">
                    <img class="center" style="height: 75px;width: auto;"
                         src="{{asset('storage/img/hand-vote.png')}}">
                    <p style="text-align: center;padding: 5px;">จำนวนผู้มาใช้สิทธิ์</p>
                    <p style="text-align: center"><b
                                style="font-size: 3em">{{number_format($constituencies_use_total)}}</b> คน</p>
                    <p style="text-align: center"><span class="small">คิดเป็น {{number_format($ct,2,'.','')}}%</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <div class="card-count2 card-1">--}}
{{--                    <img class="center" style="height: 50px;width: auto;"--}}
{{--                         src="{{asset('storage/img/correct-card.png')}}">--}}
{{--                    <p style="text-align: center;padding: 5px;">บัตรดี</p>--}}
{{--                    <p style="text-align: center"><b--}}
{{--                                style="font-size: 3em">{{number_format($constituencies_total->total_constituency)}}</b>--}}
{{--                        คน</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card-count2 card-1">--}}
{{--                    <img class="center" style="height: 50px;width: auto;"--}}
{{--                         src="{{asset('storage/img/wrong-card.png')}}">--}}
{{--                    <p style="text-align: center;padding: 5px;">บัตรเสีย</p>--}}
{{--                    <p style="text-align: center"><b--}}
{{--                                style="font-size: 3em">{{number_format($constituencies_use_total)}}</b> คน</p>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card-count2 card-1">--}}
{{--                    <img class="center" style="height: 50px;width: auto;"--}}
{{--                         src="{{asset('storage/img/novote.png')}}">--}}
{{--                    <p style="text-align: center;padding: 5px;">จำนวนบัตรไม่เลือกผู้สมัครผู้ใด</p>--}}
{{--                    <p style="text-align: center"><b--}}
{{--                                style="font-size: 3em">{{number_format($constituencies_use_total)}}</b> คน</p>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @php
        $i = 1;
        $d1 = 1;
        $d2 = 1;
    @endphp
    <div class="container" style="margin: 0 auto;">
        <h5 class="mt-4 mb-4"
            style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">
            ผู้สมัครนายกเทศมนตรี {{$customer_name->name}}</h5>
        <div class="row hidden-md-up" style="margin-left: 5px !important;">
            <table class="table" style="background-color: white;border-radius: 20px;">
                <thead>
                <tr>
                    <th width="10%">ลำดับ</th>
                    <th width="30%"></th>
                    <th width="30%">ชื่อ</th>
                    <th width="30%">คะแนน</th>
                </tr>
                </thead>
                <tbody>
                @foreach($head_executive_new as $key => $hex)
                    <tr>
                        <th style="font-size: 2em">{{$i++}}</th>
                        <td><img class="center" style="height: 100px;width: auto;margin-top: -2%"
                                 src="{{asset('storage/employee_images/'.$hex->picture)}}"></td>
                        <td><p class="card-text p-y-1" style="text-align: left;font-size: 1.2em;">
                                เบอร์ <b style="font-size: 1.8em;text-decoration: underline;color: red">{{$hex->number}}</b></p>
                            {{$hex->first_name}} {{$hex->last_name}}</td>
                        <td><b style="font-size: 3em">{{number_format($hex->totalpoint)}}</b></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container" style="margin: 0 auto;">
        <h6 class="mt-4 mb-4"
            style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">
            {{$customer_name->name}} เขตเลือกตั้งที่ 1</h6>
        <div class="row hidden-md-up" style="margin-left: 5px !important;">
            <table class="table" style="background-color: white;border-radius: 20px;">
                <thead>
                <tr>
                    <th width="10%">ลำดับ</th>
                    <th width="30%"></th>
                    <th width="30%">ชื่อ</th>
                    <th width="30%">คะแนน</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ssh1d1_new as $key => $hex)
                    <tr>
                        <th style="font-size: 2em">{{$d1++}}</th>
                        <td><img class="center" style="height: 100px;width: auto;margin-top: -2%"
                                 src="{{asset('storage/employee_images/'.$hex->picture)}}"></td>
                        <td><p class="card-text p-y-1" style="text-align: left;font-size: 1.2em;">
                                เบอร์ <b style="font-size: 1.8em;text-decoration: underline;color: red">{{$hex->number}}</b></p>
                            {{$hex->first_name}} {{$hex->last_name}}</td>
                        <td><b style="font-size: 3em">{{number_format($hex->totalpoint)}}</b></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container" style="margin: 0 auto;">
        @if($ssh1d2_new->count() != 0)
            <h6 class="mt-4 mb-4"
                style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">
                {{$customer_name->name}} เขตเลือกตั้งที่ 2</h6>
            <div class="row hidden-md-up" style="margin-left: 5px !important;">
                <table class="table" style="background-color: white;border-radius: 20px;">
                    <thead>
                    <tr>
                        <th width="10%">ลำดับ</th>
                        <th width="30%"></th>
                        <th width="30%">ชื่อ</th>
                        <th width="30%">คะแนน</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ssh1d2_new as $key => $hex)
                        <tr>
                            <th style="font-size: 2em">{{$d2++}}</th>
                            <td><img class="center" style="height: 100px;width: auto;margin-top: -2%"
                                     src="{{asset('storage/employee_images/'.$hex->picture)}}"></td>
                            <td><p class="card-text p-y-1" style="text-align: left;font-size: 1.2em;">
                                    เบอร์ <b style="font-size: 1.8em;text-decoration: underline;color: red">{{$hex->number}}</b></p>
                                {{$hex->first_name}} {{$hex->last_name}}</td>
                            <td><b style="font-size: 3em">{{number_format($hex->totalpoint)}}</b></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>

    {{--    <div class="container">--}}
    {{--        <h5 class="mt-0 mb-2 headtitle"--}}
    {{--            style="padding: 20px;color: black;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">--}}
    {{--            ผู้สมัครนายกเทศมนตรี{{$customer_name->name}}</h5>--}}
    {{--        <div class="row hidden-md-up">--}}
    {{--            @foreach($head_executive as $key => $hex)--}}
    {{--                <div class="col-md-12 col-lg-{{12/$head_executive_count_row}} col-sm-12">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="card-block">--}}
    {{--                            --}}{{--                        <img src="{{asset('storage/employee_images/'.$head1->picture)}}">--}}
    {{--                            <img class="center" style="height: 300px;width: auto;"--}}
    {{--                                 src="{{asset('storage/employee_images/'.$hex->picture)}}">--}}
    {{--                            <br>--}}
    {{--                            <br>--}}
    {{--                            <h6 class="card-subtitle text-muted"--}}
    {{--                                style="text-align: center;font-size: 1.2em;">{{$hex->first_name}} {{$hex->last_name}}</h6>--}}

    {{--                            <a class="card-link2 center" style="text-align: center">คะแนน <label--}}
    {{--                                        style="color: red;font-size: 3em"> {{number_format($hex->totalpoint)}}</label></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--        <br>--}}
    {{--        <h5 class="mt-0 mb-2 headtitle"--}}
    {{--            style="padding: 20px;color: black;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">--}}
    {{--            สมาชิกสภา{{$customer_name->name}}</h5>--}}

    {{--        @if($ssh1d1->count() != 0)--}}
    {{--            <h6 class="mt-4 mb-2"--}}
    {{--                style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">--}}
    {{--                {{$customer_name->name}} เขตเลือกตั้งที่ 1</h6>--}}
    {{--            <div class="row" style="padding: 10px;border-radius: 20px;">--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: left">--}}
    {{--                    @foreach($ssh1d1 as $s11)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #652cdd">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s11->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #68b2ff">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s11->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #68b2ff">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s11->first_name}} {{$s11->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;">{{number_format($s11->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--                <div class="col-md-12 col-lg-2"></div>--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: right">--}}
    {{--                    @foreach($ssh2d1 as $s21)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #fd025c">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s21->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #ff5858">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s21->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #ff5858">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s21->first_name}} {{$s21->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;">{{number_format($s21->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        @endif--}}

    {{--        @if($ssh1d2->count() != 0)--}}
    {{--            <h6 class="mt-4 mb-2"--}}
    {{--                style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">--}}
    {{--                {{$customer_name->name}} เขตเลือกตั้งที่ 2</h6>--}}
    {{--            <div class="row" style="padding: 10px;border-radius: 20px;">--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: left">--}}
    {{--                    @foreach($ssh1d2 as $s12)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #652cdd">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s12->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #68b2ff">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s12->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #68b2ff">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s12->first_name}} {{$s12->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;"> {{number_format($s12->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--                <div class="col-md-12 col-lg-2 col-sm-12"></div>--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: right">--}}
    {{--                    @foreach($ssh2d2 as $s22)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #fd025c">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s22->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #ff5858">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s22->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #ff5858">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s22->first_name}} {{$s22->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;"> {{number_format($s22->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        @endif--}}

    {{--        @if($ssh1d3->count() != 0)--}}
    {{--            <h6 class="mt-4 mb-2"--}}
    {{--                style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">--}}
    {{--                {{$customer_name->name}} เขตเลือกตั้งที่ 3</h6>--}}
    {{--            <div class="row" style="padding: 10px;border-radius: 20px;">--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: left">--}}
    {{--                    @foreach($ssh1d3 as $s13)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #652cdd">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s13->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #68b2ff">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%;"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s13->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #68b2ff">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s13->first_name}} {{$s13->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;">{{number_format($s13->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--                <div class="col-md-12 col-lg-2 col-sm-12"></div>--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: right">--}}
    {{--                    @foreach($ssh2d3 as $s23)--}}
    {{--                        <div class="row" style="box-shadow: 4px 1px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #fd025c">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s23->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #ff5858">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s23->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #ff5858">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s23->first_name}} {{$s23->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;">{{number_format($s23->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        @endif--}}


    {{--        @if($ssh1d4->count() != 0)--}}
    {{--            <h6 class="mt-4 mb-2"--}}
    {{--                style="padding: 20px;background-color: #073d72;color: white;text-align: center;margin: 0 auto;width:100%;border-radius: 30px;">--}}
    {{--                {{$customer_name->name}} เขตเลือกตั้งที่ 4</h6>--}}
    {{--            <div class="row" style="padding: 10px;border-radius: 20px;">--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: left">--}}
    {{--                    @foreach($ssh1d4 as $s14)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #652cdd">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s14->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #68b2ff">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%;"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s14->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #68b2ff">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s14->first_name}} {{$s14->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;">{{number_format($s14->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--                <div class="col-md-12 col-lg-2 col-sm-12"></div>--}}
    {{--                <div class="col-md-12 col-lg-5 col-sm-12" style="float: right">--}}
    {{--                    @foreach($ssh2d4 as $s24)--}}
    {{--                        <div class="row" style="box-shadow: 4px 7px #d0d0d0;">--}}
    {{--                            <div class="col-1 hidden-mobile" style="background-color: black">--}}
    {{--                                <span class="rotate-centered">หมายเลข</span>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-2" style="background-color: #fd025c">--}}
    {{--                                <h1 style="font-size: 4em;color: white" class="vertical-center">{{$s23->number}}</h1>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-4" style="background-color: #ff5858">--}}
    {{--                                <img style="height: 150px;width: auto;margin-left: -12%"--}}
    {{--                                     src="{{asset('storage/employee_images/'.$s24->picture)}}">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-5" style="background-color: #ff5858">--}}
    {{--                                <h6 class="card-subtitle text-muted"--}}
    {{--                                    style="margin-top: 10%;color: white !important;">{{$s24->first_name}} {{$s24->last_name}}--}}
    {{--                                    <br>--}}
    {{--                                    <a class="card-link float-right"--}}
    {{--                                       style="margin-top: 20%;background-color: white;padding: 20px;color: red;">{{number_format($s24->totalpoint)}}</a>--}}
    {{--                                </h6>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <br>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        @endif--}}

    {{--    </div>--}}
</div>

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
<div class="footer" style="color: black;background: #ccc !important;">Copyright © 2021<strong><a target="_blank"
                                                                                                 href="https://itglobal.co.th/"
                                                                                                 style="text-decoration: none;color: black">
            I.T. GLOBAL Co., Ltd.</a>
    </strong>All Rights Reserved. <a target="_blank" href="/login" style="text-decoration: underline">ระบบจัดการ</a>
</div>

{{--<script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=election.itglobal.co.th&style=29&maxdigits=5'></script>--}}

{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        setInterval(function () {--}}
{{--            $(".py-5").load(window.location.href + " .py-5");--}}
{{--        }, 5000);--}}
{{--    });--}}
{{--</script>--}}

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>
</html>