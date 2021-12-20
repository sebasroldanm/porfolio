<div class="table-responsive">
    <table class="table" id="docTypes-table">
        <thead>
            <tr>
                <th>Type</th>
        <th>Tag</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($docTypes as $docType)
            <tr>
                       <td>{{ $docType->type }}</td>
            <td>{{ $docType->tag }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['docTypes.destroy', $docType->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('docTypes.show', [$docType->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('docTypes.edit', [$docType->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
