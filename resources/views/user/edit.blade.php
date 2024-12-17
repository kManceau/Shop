@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profile') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Formulaire d'édition -->
                        <form method="POST" action="{{ route('user.update', Auth::user()->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Champs prénom -->
                            <div class="mb-3">
                                <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                                <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ Auth::user()->first_name }}" required autofocus>
                                @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Champs nom -->
                            <div class="mb-3">
                                <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                                <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ Auth::user()->last_name }}" required>
                                @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Champs email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Champs adresse -->
                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('Address') }}</label>
                                <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ Auth::user()->address }}">
                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Champs Code postal -->
                            <div class="mb-3">
                                <label for="zipcode" class="form-label">{{ __('Zip Code') }}</label>
                                <input type="text" id="zipcode" name="zipcode" class="form-control @error('zipcode') is-invalid @enderror" value="{{ Auth::user()->zipcode }}">
                                @error('zipcode')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Champs Ville -->
                            <div class="mb-3">
                                <label for="city" class="form-label">{{ __('City') }}</label>
                                <input type="text" id="city" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ Auth::user()->city }}">
                                @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bouton métier -->
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
