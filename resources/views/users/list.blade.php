@extends('layouts.app')

@section('content')
<h1>{{ $notify }}</h1>
<div class="container" style="margin-top:60px;">
    <a class="btn btn-primary" href="{{ route('users.create') }}" role="button" style="margin-bottom:15px;">Thêm mới</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Địa chỉ email</th>
                    <th scope="col" class="text-center">Tên</th>
                    <th scope="col" class="text-center">Địa chỉ</th>
                    <th scope="col" class="text-center">Số điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $serial = ($users->currentPage() - 1) * $users->perPage();
                    @endphp                      
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ ++$serial }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                    @endforeach    
                </tbody>
              </table>
              <div>
                {{ $users->links() }}
              </div>
        </div>
    </div>
</div>
@endsection
