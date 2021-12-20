<div class="table-responsive">
    <table class="table" id="documentations-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Typedoc Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentations as $documentation)
            <tr>
                       <td>{{ $documentation->title }}</td>
            <td>{{ $documentation->slug }}</td>
            <td>{{ $documentation->description }}</td>
            <td>{{ $documentation->typeDoc_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['documentations.destroy', $documentation->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('documentations.show', [$documentation->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('documentations.edit', [$documentation->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
