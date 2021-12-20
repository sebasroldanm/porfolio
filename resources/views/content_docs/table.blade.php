<div class="table-responsive">
    <table class="table" id="contentDocs-table">
        <thead>
            <tr>
                <th>Description</th>
        <th>Code</th>
        <th>Language</th>
        <th>Documentation Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contentDocs as $contentDoc)
            <tr>
                       <td>{{ $contentDoc->description }}</td>
            <td>{{ $contentDoc->code }}</td>
            <td>{{ $contentDoc->language }}</td>
            <td>{{ $contentDoc->documentation_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['contentDocs.destroy', $contentDoc->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('contentDocs.show', [$contentDoc->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('contentDocs.edit', [$contentDoc->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
