@extends('layouts.account')

@section('content')
@include('modals.send-code')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-primary"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">View Subscribers</li>
            </ol>
        </nav>
   
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-primary">View Subscribers</h6>
                    <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Send Code
</button>
                        </div>
                    <p class="card-description text-primary">All the Subscribers are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th class="text-primary">
                                    #
                                </th>
                                <th class="text-primary">
                                   Subscriber Email
                                </th>
                                <th class="text-primary">
                                  Code
                                </th>
                                <th class="text-primary">
                                   Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            @foreach($users as $data)
                                <tr>
                                    <td>
                                       {{ $data->id }}
                                    </td>
                                    <td>
                                       {{ $data->email}}
                                    </td>
                                    <td>
                                       {{ $data->code}}
                                    </td>
                                   <td>
                                      <form action="{{route('deletesubscribers', $data->id)}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
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