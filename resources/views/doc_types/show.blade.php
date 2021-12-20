@extends('layouts.app')
@section('title')
    Doc Type Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Doc Type Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('docTypes.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('doc_types.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
