@extends('layouts.app')
@section('title')
    Doc Types 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Doc Types</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('docTypes.create')}}" class="btn btn-primary form-btn">Doc Type <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('doc_types.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

