@extends('layouts.app')

@section('content')
    <div class="container my-5 p-md-5 p-3 border border-secondary rounded-4">
        <div class="text-center">
            <h2>Dodaj nowego pracownika</h2>
        </div>
        <form action="/pracownik/store" id="employeeForm" method="POST">
            @csrf
            <label for="imie" class="form-label">Imię</label>
            <div class="input-group mb-2">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" name="imie" id="imie" class="form-control" placeholder="Imię" required />
            </div>
            <div id="imie_error" class="form-error"></div>

            <label for="nazwisko" class="form-label">Nazwisko:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" name="nazwisko" id="nazwisko" class="form-control" placeholder="Nazwisko" required />
            </div>
            <div id="nazwisko_error" class="form-error"></div>

            <label for="telefon" class="form-label">Telefon:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input type="tel" name="telefon" id="telefon" class="form-control" placeholder="Telefon" />
            </div>
            <div id="telefon_error" class="form-error"></div>

            <label for="email" class="form-label">E-mail:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" />
            </div>
            <div id="email_error" class="form-error"></div>


            @if(isset($companies) && !empty($companies))
            <label for="id_firmy" class="form-label">Firma:</label>
            <div class="mb-2 input-group">
              <span class="input-group-text">
                <i class="bi bi-buildings"></i>
              </span>
              <select name="id_firmy" class="form-select" id="id_firmy">
                <option value=""></option>
                @foreach ($companies as $company)
                    <option value= {{ $company->id }} > {{ $company->nazwa }} </option>
                @endforeach
              </select>
            </div>
            @endif

            <div class="mb-2 mt-5 form-floating">
                <textarea class="form-control" name="opis" id="opis" style="height: 140px" placeholder="opis"></textarea>
                <label for="opis">Opis</label>
            </div>
            <div id="opis_error" class="form-error"></div>

            <div class="mb-2 text-center">
                <button type="submit" class="btn btn-secondary">Dodaj</button>
            </div>
        </form>
    </div>
    @vite('resources/js/validateEmployeeForm.js')
@endsection