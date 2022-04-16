@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                    <strong>Task Overview</strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Created an Admin Panel</strong><br> In this there is a <strong>Authentication system
                    </strong> where user can register him in the system and can login <br>in the system via credentials
                    provided in the registration<br>
                    <strong>Created a add category page </strong> and save the data in database<br>
                    <strong>Cretaed view all category
                    </strong>and give option to delete and edit
                    categories on that page.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>Registration Panel</strong>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is overview for the registration panel</strong>
                    <br><img src="{{ asset('regis.png') }}" class="w-75">
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Login Panel</strong>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the overview for the login panel</strong><br>
                    <img src="{{ asset('login.png')}} " class="w-75">
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <strong>Add Category</strong>

                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the overview for the Add category</strong><br>
                    <br> <img src="{{ asset('cate.png')}} " class="w-75">
                </div>
            </div>
        </div>

    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <strong>View or Edit and delete </strong>
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the overview for the View</strong><br>
                <img src="{{ asset('view.png')}} " class="w-75"><br><br>
                <strong>This is the overview for the Edit and delete</strong><br>
                <img src="{{ asset('edit.png')}} " class="w-75"><br><br>
            </div>
        </div>
    </div>

</div>
@endsection
