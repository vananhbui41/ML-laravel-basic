<div>
    <table class="table table-striped">
        <tr>
            <td>NO</td>
            <td>ID</td>
            <td>NAME</td>
            {{-- <td>CATEGORY</td> --}}
        </tr>
        
        @foreach ($items as $row)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            {{-- <td>{{$row->cate</td> --}}
        </tr>
        @endforeach
    </table>
</div>