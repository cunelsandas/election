@extends('layouts.app')
@section('content')
    <style>
        @media print {
            @page {
                margin: 2.5cm;
                size: A4 landscape;
            }
        }
    </style>
    <div class="container">
        <div class="card-panel grey-text text-darken-2 mt-20">
            <h4 class="grey-text text-darken-1 center">
                สลิปเงินเดือนของ {{$employee->first_name}} {{$employee->last_name}}</h4>
            <div id='printarea'>
                <div class="row">
                    <img src="{{ url('storage/logo.png') }}" alt="" title=""/>
                    <p>รายละเอียดการจ่ายเงินเดือนและค่าจ้างรายเดือน</p>
                    <p>ขององค์การบริหารส่วนตำบลสันกลาง</p>
                    <p>รายรับ-รายจ่าย</p>
                    <p>ประจำเดือน {{Thaimonthonly($payment->month)}} พ.ศ.{{Thaiyearonly(date('Y'))}}</p>

                    <p>ชื่อ-สกุล {{$employee->title_name}}{{$employee->first_name}} {{$employee->last_name}}
                        <br>
                    <p style="text-decoration: underline">รายการรับ</p>
                    <p>เงินเดือน {{number_format($payment->salary,2)}} บาท</p>
                    <p>เงินเพิ่มค่าครองชีพ {{number_format($payment->money_extra,2)}} บาท</p>
                    <p><b>รวมรับทั้งสิ้น {{number_format($payment->salary_amount,2)}} บาท</b></p>
                    <br>
                    <p style="text-decoration: underline">รายการจ่าย</p>
                    <p>ประกันสังคม {{number_format($payment->sso_pay,2)}} บาท</p>
                    <p>กลุ่มออมทรัพย์พนักงาน {{number_format($payment->saving_group_pay,2)}} บาท</p>
                    <p>สหกรณ์ออมทรัพย์พนักงาน {{number_format($payment->saving_co_pay,2)}} บาท</p>
                    <p>ภาษีหัก ณ ที่จ่าย {{number_format($payment->tax_pay,2)}} บาท</p>
                    <p><b>รวมจ่ายทั้งสิ้น {{number_format($payment->pay_amount,2)}} บาท</b></p>
                    <p><b>รับสุทธิ {{number_format($payment->net_receive,2)}} บาท</b></p>
                    ({{baht_text($payment->net_receive)}})
                    <br>
                    <img width="250px" src="{{ url('storage/signature.png') }}" alt="" title=""/>
                    <p>นายทดสอบ ทดสอบ</p>
                    <p>(ผู้อำนวยการกองคลัง)</p>
                </div>
            </div>
            <button class="btn red col s3 offset-s2 m3 offset-m2 l3 offset-l2 xl3 offset-xl2" onclick="print()">Print</button>
            <script>
                function print() {
                    var divToPrint = document.getElementById('printarea');
                    var htmlToPrint = '' +
                        '<style type="text/css">' +
                        '* {' +
                        'font-size: 12px;' +
                        '}' +
                        '</style>';
                    htmlToPrint += divToPrint.outerHTML;
                    newWin = window.open("");
                    newWin.document.write(htmlToPrint);
                    newWin.print();
                    newWin.close();
                }
            </script>
        </div>
    </div>
@endsection