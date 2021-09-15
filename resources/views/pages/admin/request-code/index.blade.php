@extends('layouts.account')

@section('content')
@include('modals.send-code')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-primary"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">View Requester For Code</li>
            </ol>
        </nav>
   
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-primary">View Requesters</h6>
                    <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      SEND CODE
                     </button>
                        </div>
                    <p class="card-description text-primary">All the View Requestors are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th class="text-primary">
                                    #
                                </th>
                                <th class="text-primary">
                                   Requester Email
                                </th>
                                <th class="text-primary">
                                   Requester Reason
                                </th>
                                <th class="text-primary">
                                   Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            @foreach($request_code as $data)
                                <tr>
                                    <td>
                                       {{ $data->id }}
                                    </td>
                                    <td>
                                       {{ $data->email}}
                                    </td>
                                    <td>
                                       {{ $data->reason}}
                                    </td>
                                   <td>
                                      
                                      <form action="{{route('delete.request', $data->id)}}" method="POST" class="d-inline-block">
                                      @csrf
                                      @method('DELETE')

                                      <button type="submit" class="btn btn-danger btn-sm btn-icon-text"><i class="btn-icon-prepend" data-feather="trash"></i>Delete</button>
                                      </form>
                                      <!-- <a href="{{ route('regeneratedcount',$data->id) }}" class="btn btn-warning btn-icon-text btn-sm d-inline-block">
                                        <i class="btn-icon-prepend" data-feather="edit"></i> Regenerate
                                    </a> -->
                                   </td>
                                </tr>
                    
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
	</div>
    @endsection