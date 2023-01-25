<div class="modal fade" id="edit_container{{$container->id}}">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Edit Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">The field labels marked with * are required input fields.</p>
                <form action="{{route('containers.update', $container->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BL Number<span style="color:red;"> *</span></label>
                                    <input type="text" name="bl_number" required value="{{ $container->bl_number }}" class="form-control" id="exampleInputEmail1">

                                    @if($errors->has('bl_number'))
                                    <span style="color:red;">{{ $errors->first('bl_number') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Supplier Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="supplier_name" required value="{{ $container->supplier_name }}" class="form-control" id="exampleInputEmail1">


                                    @if($errors->has('supplier_name'))
                                    <span style="color:red;">{{ $errors->first('supplier_name') }}</span>

                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Container No<span style="color:red;"> *</span></label>
                                    <input type="text" name="container_no" required value="{{ $container->container_no }}" class="form-control" id="exampleInputEmail1" placeholder="">


                                    @if($errors->has('container_no'))
                                    <span style="color:red;">{{ $errors->first('container_no') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">C.Size<span style="color:red;"> *</span></label>
                                    <input type="text" name="c_size" required value="{{ $container->c_size }}" class="form-control" id="exampleInputEmail1" placeholder="">



                                    @if($errors->has('c_size'))
                                    <span style="color:red;">{{ $errors->first('c_size') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Seal No<span style="color:red;"> *</span></label>
                                    <input type="text" name="seal_no" value="{{ $container->seal_no }}" class="form-control" id="exampleInputEmail1" placeholder="">



                                    @if($errors->has('seal_no'))
                                    <span style="color:red;">{{ $errors->first('seal_no') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Receiver Name<span style="color:red;"> *</span></label>

                                    <input type="text" name="receiver_name" value="{{ $container->receiver_name }}" class="form-control" id="exampleInputEmail1" placeholder="">



                                    @if($errors->has('receiver_name'))
                                    <span style="color:red;">{{ $errors->first('receiver_name') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vessel Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="vessel_name" value="{{ $container->vessel_name }}" class="form-control" id="exampleInputEmail1">


                                    @if($errors->has('vessel_name'))
                                    <span style="color:red;">{{ $errors->first('vessel_name') }}</span>

                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Voyage<span style="color:red;"> *</span></label>
                                    <input type="text" name="voyage" value="{{ $container->voyage }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('voyage'))
                                    <span style="color:red;">{{ $errors->first('voyage') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Place Receipt<span style="color:red;"> *</span></label>
                                    <input type="text" name="place_receipt" value="{{ $container->place_receipt }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('place_receipt'))
                                    <span style="color:red;">{{ $errors->first('place_receipt') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Place Loading<span style="color:red;"> *</span></label>
                                    <input type="text" name="place_loading" value="{{ $container->place_loading }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('place_loading'))
                                    <span style="color:red;">{{ $errors->first('place_loading') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Port Discharge<span style="color:red;"> *</span></label>
                                    <input type="text" name="port_discharge" value="{{ $container->port_discharge }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('port_discharge'))
                                    <span style="color:red;">{{ $errors->first('port_discharge') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Final Destination<span style="color:red;"> *</span></label>
                                    <input type="text" name="final_destination" value="{{ $container->final_destination }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('final_destination'))
                                    <span style="color:red;">{{ $errors->first('final_destination') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Comidity<span style="color:red;"> *</span></label>
                                    <input type="text" name="comidity" value="{{ $container->comidity }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('comidity'))
                                    <span style="color:red;">{{ $errors->first('comidity') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mode<span style="color:red;"> *</span></label>
                                    <input type="text" name="mode" value="{{ $container->mode }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('mode'))
                                    <span style="color:red;">{{ $errors->first('mode') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gross Weight</label>
                                    <input type="text" name="gross_weight" value="{{ $container->gross_weight }}" class="form-control" id="exampleInputPassword1">


                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Remarks</label>
                                    <input type="text" name="remarks" value="{{ $container->remarks }}" class="form-control" id="exampleInputPassword1">



                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">ETA<span style="color:red;"> *</span></label>
                                    <input type="date" name="eta" value="{{ $container->eta }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('eta'))
                                    <span style="color:red;">{{ $errors->first('eta') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">ETD<span style="color:red;"> *</span></label>
                                    <input type="date" name="etd" value="{{ $container->etd }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('etd'))
                                    <span style="color:red;">{{ $errors->first('etd') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Shipped Board<span style="color:red;"> *</span></label>
                                    <input type="date" name="shipped_board" value="{{ $container->shipped_board }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('shipped_board'))
                                    <span style="color:red;">{{ $errors->first('shipped_board') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BL Type<span style="color:red;"> *</span></label>
                                    <input type="text" name="bl_type" value="{{ $container->bl_type }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('bl_type'))
                                    <span style="color:red;">{{ $errors->first('bl_type') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Issue Date<span style="color:red;"> *</span></label>
                                    <input type="date" name="issue_date" value="{{ $container->issue_date }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('issue_date'))
                                    <span style="color:red;">{{ $errors->first('issue_date') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Location<span style="color:red;"> *</span></label>
                                    <input type="text" name="location" value="{{ $container->location }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('location'))
                                    <span style="color:red;">{{ $errors->first('location') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status<span style="color:red;"> *</span></label>
                                    <input type="text" name="status" value="{{ $container->status }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('status'))
                                    <span style="color:red;">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div type="" class=""></div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
