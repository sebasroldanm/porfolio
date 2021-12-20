@extends('layouts.app')
@section('title')
    Documentations 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Documentations</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('documentations.create')}}" class="btn btn-primary form-btn">Documentation <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('documentations.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

