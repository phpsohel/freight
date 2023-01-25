@extends('layout.main')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('success') }}
</div>
@endif
@if(session()->has('danger'))
<div class="alert alert-danger alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('danger') }}
</div>
@endif

<section class="content">
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Add Container</button>
                        <br>
                        <br>
                        <h1>All Containers </h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Add Container</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('containers.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">BL Number<span style="color:red;"> *</span></label>
                                                 <input type="text" name="bl_number" required class="form-control" id="exampleInputEmail1">
                                                 @if($errors->has('bl_number'))
                                                 <span style="color:red;">{{ $errors->first('bl_number') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Supplier Name<span style="color:red;"> *</span></label>
                                                 <input type="text" name="supplier_name" required class="form-control" id="exampleInputEmail1">
                                                 @if($errors->has('supplier_name'))
                                                 <span style="color:red;">{{ $errors->first('supplier_name') }}</span>

                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Container No<span style="color:red;"> *</span></label>
                                                 <input type="text" name="container_no" required value="{{ old('container_info') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                                 @if($errors->has('container_no'))
                                                 <span style="color:red;">{{ $errors->first('container_no') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">C.Size<span style="color:red;"> *</span></label>
                                                 <input type="text" name="c_size" required value="{{ old('c_size') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                 @if($errors->has('c_size'))
                                                 <span style="color:red;">{{ $errors->first('c_size') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Seal No<span style="color:red;"> *</span></label>
                                                 <input type="text" name="seal_no" value="{{ old('seal_no') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                 @if($errors->has('seal_no'))
                                                 <span style="color:red;">{{ $errors->first('seal_no') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Receiver Name<span style="color:red;"> *</span></label>

                                                 <input type="text" name="receiver_name" value="{{ old('receiver_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                 @if($errors->has('receiver_name'))
                                                 <span style="color:red;">{{ $errors->first('receiver_name') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Vessel Name<span style="color:red;"> *</span></label>
                                                 <input type="text" name="vessel_name" value="{{ old('vessel_name') }}" class="form-control" id="exampleInputEmail1">
                                                 @if($errors->has('vessel_name'))
                                                 <span style="color:red;">{{ $errors->first('vessel_name') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Voyage<span style="color:red;"> *</span></label>
                                                 <input type="text" name="voyage" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('voyage'))
                                                 <span style="color:red;">{{ $errors->first('voyage') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Place Receipt<span style="color:red;"> *</span></label>
                                                 <input type="text" name="place_receipt" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('place_receipt'))
                                                 <span style="color:red;">{{ $errors->first('place_receipt') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Place Loading<span style="color:red;"> *</span></label>
                                                 <input type="text" name="place_loading" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('place_loading'))
                                                 <span style="color:red;">{{ $errors->first('place_loading') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Port Discharge<span style="color:red;"> *</span></label>
                                                 <input type="text" name="port_discharge" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('port_discharge'))
                                                 <span style="color:red;">{{ $errors->first('port_discharge') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Final Destination<span style="color:red;"> *</span></label>
                                                 <input type="text" name="final_destination" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('final_destination'))
                                                 <span style="color:red;">{{ $errors->first('final_destination') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Comidity<span style="color:red;"> *</span></label>
                                                 <input type="text" name="comidity" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('comidity'))
                                                 <span style="color:red;">{{ $errors->first('comidity') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Mode<span style="color:red;"> *</span></label>
                                                 <input type="text" name="mode" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('mode'))
                                                 <span style="color:red;">{{ $errors->first('mode') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Gross Weight</label>
                                                 <input type="text" name="gross_weight" class="form-control" id="exampleInputPassword1">
                                             </div>
                                         </div>

                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Remarks</label>
                                                 <input type="text" name="remarks" class="form-control" id="exampleInputPassword1">

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">ETA<span style="color:red;"> *</span></label>
                                                 <input type="date" name="eta" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('eta'))
                                                 <span style="color:red;">{{ $errors->first('eta') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">ETD<span style="color:red;"> *</span></label>
                                                 <input type="date" name="etd" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('etd'))
                                                 <span style="color:red;">{{ $errors->first('etd') }}</span>
                                                 @endif

                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Shipped Board<span style="color:red;"> *</span></label>
                                                 <input type="date" name="shipped_board" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('shipped_board'))
                                                 <span style="color:red;">{{ $errors->first('shipped_board') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">BL Type<span style="color:red;"> *</span></label>
                                                 <input type="text" name="bl_type" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('bl_type'))
                                                 <span style="color:red;">{{ $errors->first('bl_type') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Issue Date<span style="color:red;"> *</span></label>
                                                 <input type="date" name="issue_date" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('issue_date'))
                                                 <span style="color:red;">{{ $errors->first('issue_date') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Location<span style="color:red;"> *</span></label>
                                                 <input type="text" name="location" class="form-control" id="exampleInputPassword1">
                                                 @if($errors->has('location'))
                                                 <span style="color:red;">{{ $errors->first('location') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Status<span style="color:red;"> *</span></label>
                                                 <input type="text" name="status" class="form-control" id="exampleInputPassword1">
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
        </div>
    </div>
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th>Sl</th>
                                      <th>BL Number</th>
                                      <th>Supplier Name</th>
                                      <th>Container No</th>
                                      <th>C.Size</th>
                                      <th>Seal No </th>
                                      <th>Receiver Name </th>
                                      <th>Vessel Name</th>
                                      <th>Voyage</th>
                                      <th>Place of Receipt</th>
                                      <th>Place of Loading</th>
                                      <th>Port of Discharge</th>
                                      <th>Final Destination</th>
                                      <th>Comidity</th>
                                      <th>Mode</th>
                                      <th>Gross Weight</th>
                                      <th>Remarks</th>
                                      <th>ETD</th>
                                      <th>ETA</th>
                                      <th>BL Type</th>
                                      <th>Shipped Board</th>
                                      <th>Issue Date </th>
                                      <th>Location </th>
                                      <th>Status </th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              @php
                              $i = 0;
                              @endphp
                              <tbody>
                                  @foreach( $containers as $container)
                                  <tr>
                                      <td>{{ ++$i}}</td>
                                      <td>{{ $container->bl_number  ?? ''}}</td>
                                      <td>{{ $container->supplier_name  ?? ''}}</td>
                                      <td>{{ $container->container_no ?? ''}}</td>
                                      <td>{{ $container->c_size ?? ''}}</td>
                                      <td>{{ $container->seal_no ?? ''}}</td>
                                      <td>{{ $container->receiver_name ?? ''}}</td>
                                      <td>{{ $container->vessel_name ?? ''}}</td>
                                      <td>{{ $container->voyage ?? ''}}</td>
                                      <td>{{ $container->place_receipt ?? ''}}</td>
                                      <td>{{ $container->place_loading ?? ''}}</td>
                                      <td>{{ $container->port_discharge ?? ''}}</td>
                                      <td>{{ $container->final_destination ?? ''}}</td>
                                      <td>{{ $container->comidity ?? ''}}</td>
                                      <td>{{ $container->mode ?? ''}}</td>
                                      <td>{{ $container->gross_weight ?? ''}}</td>
                                      <td>{{ $container->remarks ?? ''}}</td>
                                      <td>{{ $container->etd ?? ''}}</td>
                                      <td>{{ $container->eta ?? ''}}</td>
                                      <td>{{ $container->shipped_board ?? ''}}</td>
                                      <td>{{ $container->bl_type ?? ''}}</td>
                                      <td>{{ $container->issue_date ?? ''}}</td>
                                      <td>{{ $container->location ?? ''}}</td>
                                      <td>{{ $container->status ?? ''}}</td>
                                      <td>
                                          <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="#edit_container{{$container->id}}">
                                              <i class="fa-solid fa-pen-to-square" style="color:#7c5cc4"></i>
                                          </button>
                                          <button type="submit" class="open-EditUnitDialog btn btn-link">
                                              <a href="{{ route('containers.details', $container->id) }}">
                                                  <i class="fa-solid fa-eye" style="color:#7c5cc4"></i>
                                              </a>
                                          </button>
                                          <button type="submit" class="open-EditUnitDialog btn btn-link">
                                              <a href="{{ route('containers.delete', $container->id) }}" id="delete">
                                                  <i class="fa-solid fa-trash-can" style="color:#7c5cc4"></i>
                                              </a>
                                          </button>
                                      </td>
                                  </tr>
                                  @include('container.edit_modal')
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</section>
@endsection

