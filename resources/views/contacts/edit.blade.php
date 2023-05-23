@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    <hr class="col-1 my-5 mx-0">

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset class="row mb-3">
            <div class="col-sm-10">
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', $contact->name) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputContact" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ old('contact', $contact->contact) }}" name="contact" id="inputContact">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="{{ old('email', $contact->email) }}" id="inputEmail">
                    </div>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
