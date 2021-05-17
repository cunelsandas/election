<ul id="slide-out" class="sidenav sidenav-fixed grey lighten-4">
    <li>
        <div class="user-view">
            <div class="background">
            </div>
            {{-- Get picture of authenicated user --}}
            <a href="{{route('auth.show')}}"><img class="circle" src="{{asset('storage/admins/'.Auth::user()->picture)}}"></a>
            {{-- Get first and last name of authenicated user --}}
            <a href="{{route('auth.show')}}"><span class="white-text name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></a>
            {{-- Get email of authenicated user --}}
            <a href="{{route('auth.show')}}"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>
    <li>
        <a class="waves-effect waves-grey" href="/dashboard"><i class="material-icons">dashboard</i>แดชบอร์ด</a>
    </li>
    <li>
        <a class="waves-effect waves-grey" href="/candidates"><i class="material-icons">supervisor_account</i>รายชื่อผู้สมัคร</a>
    </li>
{{--    <li>--}}
{{--        <a class="waves-effect waves-grey" href="/payments"><i class="material-icons">compare_arrows</i>อัพเดทคะแนน</a>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <a class="waves-effect waves-grey" href="/payrolls"><i class="material-icons">receipt_long</i>ข้อมูลหน่วยเลือกตั้ง</a>--}}
{{--    </li>--}}
    @if($userzone = auth()->user()->zone == 0)
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons pl-15">settings</i><span class="pl-15">ระบบ</span></a>
                <div class="collapsible-body">
                    <ul>

                        <li>
                            <a href="/departments" class="waves-effect waves-grey">
                                <i class="material-icons"></i>
                                ตำแหน่ง
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="/salaries" class="waves-effect waves-grey">--}}
{{--                                <i class="material-icons"></i>--}}
{{--                                เงินเดือน--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li>
                            <a href="/divisions" class="waves-effect waves-grey">
                            <i class="material-icons"></i>
                                เขต
                            </a>
                        </li>
                        <li>
                            <a href="/customerinfos" class="waves-effect waves-grey">
                                <i class="material-icons"></i>
                                ชื่อหน่วยงาน
                            </a>
                        </li>
                        <li>
                            <a href="/constituencies" class="waves-effect waves-grey">
                                <i class="material-icons"></i>
                                จำนวนผู้มีสิทธิ์เลือกตั้ง
                            </a>
                        </li>
                        <li>
                            <a href="/systemsettings" class="waves-effect waves-grey">
                                <i class="material-icons"></i>
                                ลิงค์ Facebook Live
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="/cities" class="waves-effect waves-grey">--}}
{{--                            <i class="material-icons"></i>--}}
{{--                                จังหวัด--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="/states" class="waves-effect waves-grey">--}}
{{--                            <i class="material-icons"></i>--}}
{{--                                อำเภอ--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="/countries" class="waves-effect waves-grey">--}}
{{--                            <i class="material-icons"></i>--}}
{{--                                ประเทศ--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="/reports" class="waves-effect waves-grey">--}}
{{--                                <i class="material-icons"></i>--}}
{{--                                รายงาน--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </li>
        </ul>
    </li>

    <li>
        <a href="/admins" class="waves-effect waves-grey"><i class="material-icons">account_circle</i>แอดมิน</a>
    </li>
    @endif
</ul>
