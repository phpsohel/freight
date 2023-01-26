


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Container PDF</title>

    <!-- jQuery 3 -->
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="{{ asset('public/vendor/dashboard/assets/plugins/jquery/jquery-migrate-1.0.0.js') }}"></script>

    <!-- Print JS -->

    <script src="{{ asset('public/js/PrintJs.js') }}" type="text/javascript"></script>

    <style type="text/css">
        .line {
            width: 130px;
            height: 765px;
            border-bottom: 1px solid black;
        }

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');

        body {
            font-family: 'Open Sans', sans-serif;
        }

    </style>

</head>

<body style="margin: 10px;">
    {{-- <button id="table_print" style="float:right;">Print</button> --}}
    {{-- <div id="printBody"> --}}

    <div class="container">
        <div> {{-- style="border:2px solid red;" --}}
            <div style="padding: 5px;">
                <table cellpadding="3" cellspacing="0" border="0" style="width:100%; border-collapse: collapse; font-size:14px;">
                    <tbody style="">
                        <tr>
                            <td colspan="3" style="border-left:none; text-align:center;">
                                <img alt="Brand" src="{{ asset('public/image/logo.png') }}" width="100" height="100">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table style="width:100%; border-collapse: collapse;">
                    <tbody>
                        <tr>
                            <td valign="top">
                                <table cellpadding="3" cellspacing="0" border="1" style="width:100%; border-collapse: collapse; font-size:18px;">
                                    <thead style="font-size:15px;">
                                        <tr>
                                            <th style="text-align: left;">BL Number :</th>
                                            <td >{{$show->bl_number ?? ''}}</td>
                                            <th style="text-align: left;">Supplier Name :</th>
                                            <td >{{ $show->supplier_name ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Container No :</th>
                                            <td >{{$show->container_no?? ''}}</td>
                                            <th style="text-align: left;">C.Size :</th>

                                            <td >{{$show->c_size ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Seal No :</th>

                                            <td >{{$show->seal_no ?? ''}}</td>
                                            <th style="text-align: left;">Receiver Name :</th>

                                            <td >{{ $show->receiver_name ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Vessel Name :</th>

                                            <td >{{ $show->vessel_name ?? '' }}</td>
                                            <th style="text-align: left;">Voyage :</th>
                                            <td >{{ $show->voyage ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Place Receipt :</th>
                                            <td >place_receipt</td>
                                            <th style="text-align: left;">Place Loading</th>
                                            <td >place_loading</td>
                                        <tr>
                                            <th style="text-align: left;">Port Discharge :</th>

                                            <td >{{ $show->port_discharge ?? '' }}</td>
                                            <th style="text-align: left;">Final Destination :</th>

                                            <td >{{ $show->final_destination ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Comidity :</th>
                                            <td >{{ $show->comidity ?? '' }}</td>
                                            <th style="text-align: left;">Mode :</th>
                                            <td >{{ $show->mode ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Gross Weight :</th>
                                            <td >{{ $show->gross_weight ?? '' }}</td>
                                            <th style="text-align: left;">Remarks :</th>
                                            <td >{{ $show->remarks ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">ETA :</th>
                                            <td >{{ $show->eta ?? '' }}</td>
                                            <th style="text-align: left;">ETD :</th>
                                            <td >{{ $show->etd ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Shipped Board :</th>
                                            <td >{{ $show->shipped_board ?? '' }}</td>
                                            <th style="text-align: left;">BL Type :</th>
                                            <td >{{ $show->bl_type ?? '' }}</td>

                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Issue Date :</th>
                                            <td >{{ $show->issue_date ?? '' }}</td>
                                            <th style="text-align: left;">Location :</th>
                                            <td>{{ $show->location ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: left;">Status :</th>

                                            <td >{{ $show->status ?? '' }}</td>
                                            <th style="text-align: left;"></th>

                                            <td></td>
                                        </tr>

                                    </thead>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    {{-- footer --}}
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</body>

</html>

