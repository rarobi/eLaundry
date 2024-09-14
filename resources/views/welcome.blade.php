@extends('frontend.layouts.app')
@section('content')
<style>
    a {
        color: #001f3fb3;
        text-decoration: none;
    }
</style>
<!-- banner -->
<div class="top-section">
    <div class="col-8 text-center mx-auto p-100 layer">
        <h1 class="text-white mb-3">Online Laundry Servcie</h1>
        <p class="text-white mb-4">Your life is easy here</p>
        <div class="position-relative">
            <div class="offset-sm-3 col-sm-6">
            <input id="search" class="form-control search-control text-center" placeholder="For home service please pick up a call on +8801xxxxxxxxxx" disabled><i
                class="ti-search search-icon"></i>
            </div>
        </div>
    </div>
</div>
<!-- /banner -->
<!-- topics -->
<section class="section pt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title text-primary">Find your answer by creating ticket</h2>
            </div>
            <!-- topic-item -->
            <div class="col-lg-4 col-sm-6 mb-4 pt-80">
                <a href="#" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                    <i class="fa fa-search d-block mb-4 fa-icon text-primary"></i>
                    <h3 class="mb-3 mt-0 text-primary">Find Ticket</h3>
                    <p class="mb-0 text-primary">Find your ticket that you created before</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 pt-80">
                <a href="#" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                    <i class="fa fa-file-word d-block mb-4 fa-icon text-primary"></i>
                    <h3 class="mb-3 mt-0 text-primary">Create Ticket</h3>
                    <p class="mb-0 text-primary text-primary">Create a ticket if you have any query</p>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 pt-80">
                <a href="#" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                    <i class="fa fa-book d-block mb-4 fa-icon text-primary"></i>
                    <h3 class="mb-3 mt-0 text-primary">Know Answer</h3>
                    <p class="mb-0 text-primary">Find the answer from your question</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /topics -->
<!-- call to action -->
<section>
    <div class="container p-100">
        <div class="row">
            <div class="col-12">
                <div class="section px-3 bg-white shadow text-center p-100">
                    <h2 class="mb-4">Didn&rsquo;t find an answer to your question?</h2>
                    <p class="mb-4">If you don't find your answer, don't be late. Contact us.</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /call to action -->
@endsection
