@extends('layouts.app')

@section('content')
    <div class="container my-5 p-md-5 p-3 border border-secondary rounded-4">
        <div class="text-center">
            <h2>Dodaj nową firmę</h2>
        </div>
        <form action="/firma/store" id="companyForm" method="POST">
            @csrf
            <label for="nazwa" class="form-label">Nazwa Firmy</label>
            <div class="input-group mb-2">
                <span class="input-group-text">
                    <i class="bi bi-buildings"></i>
                </span>
                <input type="text" name="nazwa" id="nazwa" class="form-control" placeholder="Nazwa firmy" required />
            </div>
            <div id="nazwa_error" class="form-error"></div>
            <label for="adres" class="form-label">Adres:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-geo-alt"></i>
                </span>
                <input type="text" name="adres" id="adres" class="form-control" placeholder="Adres" />
            </div>
            <div id="adres_error" class="form-error"></div>
            <label for="nip" class="form-label">NIP:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-file-earmark-binary"></i>
                </span>
                <input type="number" name="nip" id="nip" class="form-control" placeholder="NIP" required />
            </div>
            <div id="nip_error" class="form-error"></div>
            <div class="mb-2 mt-5 form-floating">
                <textarea class="form-control" name="opis" id="opis" style="height: 140px" placeholder="opis"></textarea>
                <label for="opis">Opis działalności</label>
            </div>
            <div id="opis_error" class="form-error"></div>

            <div class="mb-2 text-center">
                <button type="submit" class="btn btn-secondary">Dodaj</button>
            </div>
        </form>
    </div>
    @vite('resources/js/validateCompanyForm.js')
@endsection
