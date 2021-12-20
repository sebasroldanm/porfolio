@extends('layouts.app')
@section('title')
    Content Docs 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Content Docs</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('contentDocs.create')}}" class="btn btn-primary form-btn">Content Doc <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('content_docs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

