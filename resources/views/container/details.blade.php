@extends('layout.main')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>
    @media print {
        * {
            font-size: 12px;
            line-height: 20px;
        }

        td,
        th {
            padding: 5px 0;
        }

        .hidden-print {
            display: none !important;
        }

        @page {
            margin: 0;
        }

        body {
            margin: 0.5cm;
            margin-bottom: 1.6cm;
        }
    }

</style>
<body>
    <br>
    <div id="data">
        <div class="container">
            <br>
            <div class="row">
                <br>
                <div class="col-md-2" style="text-align: right;">
                    {{-- <img src="{{url('public/images/pfi .png')}}" alt="">--}}
                </div>
                <div class="col-md-8" style="text-align: left;">
                </div>
                <div class="col-md-2 hidden-print" style="text-align: left;">
                    <a id="click_print" type="button" class="btn btn-secondary buttons-print buttons-html5 "><i class="dripicons-print"></i> Print</a>
                    <a href="{{ route('containers.pdf', $show->id) }}" target="_blank" type="button" class="btn btn-secondary buttons-pdf buttons-html5  "><i class="dripicons-print"></i> PDF</a>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6" style="text-align: right;">
                </div>
                <div class="col-md-12">
                    <br>
                    <br>
                </div>
                <div class="col-md-12 " id="table_print">
                    <table class="table table-bordered">
                        <thead style=" background-color: #ffffff;">

                            <tr class="">
                                <th class="text-center pt-4" colspan="5">
                                    <img src="{{asset('public/image/logo.png')}}" style="width: 140px" alt="{{$show->supplier_name ?? ''}} ">
                                    {{-- <h4 style="margin-top:10px;">({{ $show->supplier_name ?? '' }})</h4> --}}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <th>BL Number :</th>
                                <td style="text-align: center;">
                                    <h4 class="">{{$show->bl_number ?? ''}}</h4>
                                </td>
                                <th>Supplier Name :</th>
                                <td style="text-align: center;">{{ $show->supplier_name ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Container No :</th>
                                <td style="text-align: center;">{{$show->container_no?? ''}}</td>
                                <th>C.Size :</th>
                                <td style="text-align: center;">{{$show->c_size ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Seal No :</th>
                                <td style="text-align: center;">{{$show->seal_no ?? ''}}</td>
                                <th>Receiver Name :</th>
                                <td style="text-align: center;">{{ $show->receiver_name ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Vessel Name :</th>
                                <td style="text-align: center;">{{ $show->vessel_name ?? '' }}</td>
                                <th>Voyage :</th>
                                <td style="text-align: center;">{{ $show->voyage ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Place Receipt :</th>
                                <td style="text-align: center;">place_receipt</td>
                                <th>Place Loading</th>
                                <td style="text-align: center;">place_loading</td>
                            <tr>
                                <th>Port Discharge :</th>
                                <td style="text-align: center;">{{ $show->port_discharge ?? '' }}</td>
                                <th>Final Destination :</th>
                                <td style="text-align: center;">{{ $show->final_destination ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Comidity :</th>
                                <td style="text-align: center;">{{ $show->comidity ?? '' }}</td>
                                <th>Mode :</th>
                                <td style="text-align: center;">{{ $show->mode ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Gross Weight :</th>
                                <td style="text-align: center;">{{ $show->gross_weight ?? '' }}</td>
                                <th>Remarks :</th>
                                <td style="text-align: center;">{{ $show->remarks ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>ETA :</th>
                                <td style="text-align: center;">{{ $show->eta ?? '' }}</td>
                                <th>ETD :</th>
                                <td style="text-align: center;">{{ $show->etd ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Shipped Board :</th>
                                <td style="text-align: center;">{{ $show->shipped_board ?? '' }}</td>
                                <th>BL Type :</th>
                                <td style="text-align: center;">{{ $show->bl_type ?? '' }}</td>

                            </tr>
                            <tr>
                                <th>Issue Date :</th>
                                <td style="text-align: center;">{{ $show->issue_date ?? '' }}</td>
                                <th>Location :</th>
                                <td style="text-align: center;">{{ $show->location ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Status :</th>
                                <td style="text-align: center;">{{ $show->status ?? '' }}</td>
                                <th></th>
                                <td style="text-align: center;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <script src="{{asset('public/js/PrintJs.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $('#click_print').click(function() {
            $('#table_print').printThis();
        })

    </script>
</body>
</html>
@endsection

