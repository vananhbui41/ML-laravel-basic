
<div>
    {{-- In work, do what you enjoy. --}}
    <table class="table table-striped">
        <tr>
            <td>NO</td>
            <td>YES</td>
            <td>NAME</td>
            <td>ACTION</td>
        </tr>
        @foreach ($catrgories as $row)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->active}}</td>
            </tr>
        @endforeach
        <td>
            <a href='{{ url("categories/{$row->id}/edit") }}' class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
            |
            <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>
         </td>
         
    </table>
</div>
