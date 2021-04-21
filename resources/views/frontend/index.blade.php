
@extends('layouts.frontend')
    @section('content')
        @include('frontend.sections.header')    <!-- ====Header==== --> 
        @include('frontend.sections.banner')    <!-- ====Banner==== --> 
        @include('frontend.sections.about')     <!-- ====About==== --> 
        @include('frontend.sections.seminar')   <!-- ====seminar==== -->  
        @include('frontend.sections.courses')   <!-- ====Courses==== -->  
        @include('frontend.sections.gallery')   <!-- ====Gallery==== -->  
        @include('frontend.sections.contact')   <!-- ====Contact==== -->  
        @include('frontend.sections.footer')    <!-- ====Footer==== --> 
    @endsection
