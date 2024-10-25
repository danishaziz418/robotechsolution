@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Clients') }}</h1>
    <a href="{{ route('admin_client_create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus"></i> {{ __('Add Item') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dtable">
                <thead>
                    <tr>
                        <th>{{ __('SL') }}</th>
                        <th>{{ __('Photo') }}</th>
                        <th>{{ __('URL') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="w_200">
                        </td>
                        <td>{{ $item->url }}</td>
                        <td>
                            <a href="{{ route('admin_client_edit',$item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin_client_destroy',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('{{ __('Are you sure?') }}')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection