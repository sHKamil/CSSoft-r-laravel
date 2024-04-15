@extends('layouts.app')

@section('content')

    <div class="container">
        @if(!$companiesWithEmployee->isEmpty())
            <div class="text-center mt-5">
                <h2>Firmy</h2>
            </div>
            <div class="accordion" id="accordionCompaniesWithEmploees">
                @foreach ($companiesWithEmployee as $companyWithEmployee)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $companyWithEmployee->id }}" aria-expanded="false" aria-controls="collapse{{ $companyWithEmployee->id }}">
                            Firma: {{ $companyWithEmployee->nazwa }}
                        </button>
                        </h2>
                        <div id="collapse{{ $companyWithEmployee->id }}" class="accordion-collapse collapse collapse" data-bs-parent="#accordionCompaniesWithEmploees">
                        <div class="accordion-body">
                            <div class="d-flex flex-column ">
                                <span class="mb-3 "><h6 class="mb-0">Data dodania: </h6> {{ $companyWithEmployee->data_dodania }}</span>
                                <span class="mb-3 "><h6 class="mb-0">NIP: </h6>{{  $companyWithEmployee->nip }}</span>
                                <span class="mb-3 "><h6 class="mb-0">Adres: </h6>{{  $companyWithEmployee->adres }}</span>
                                <span class="mb-3 "><h6 class="mb-0">Opis: </h6>{{  $companyWithEmployee->opis }}</span>
                                @if($companyWithEmployee->pracownicy)
                                <div>
                                    <span>Pracownicy:</span>
                                    <ul>
                                        @foreach ($companyWithEmployee->pracownicy as $pracownik)
                                            <li>Imię: {{$pracownik->imie}}, Nazwisko: {{$pracownik->nazwisko}}, Data dodania: {{$pracownik->data_dodania}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center mt-5">
                <span class="alert alert-info">Brak danych o firmach do wyświetlenia.</span>
            </div>
        @endif

        @if(!$employeesWithCompanyName->isEmpty())
            <div class="text-center mt-5">
                <h2>Pracownicy</h2>
            </div>
            <div class="accordion" id="accordionEmployees">
                @foreach ($employeesWithCompanyName as $employeeWithCompanyName)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmployee{{ $employeeWithCompanyName->id }}" aria-expanded="false" aria-controls="collapseEmployee{{ $employeeWithCompanyName->id }}">
                            Pracownik: {{$employeeWithCompanyName->imie . " " .  $employeeWithCompanyName->nazwisko}}
                        </button>
                        </h2>
                        <div id="collapseEmployee{{ $employeeWithCompanyName['id'] }}" class="accordion-collapse collapse collapse" data-bs-parent="#accordionEmployees">
                        <div class="accordion-body">
                            <div class="d-flex flex-column ">
                                <span class="mb-3 "><h6 class="mb-0">Data dodania: </h6> {{$employeeWithCompanyName->data_dodania}}</span>
                                <span class="mb-3 "><h6 class="mb-0">Telefon: </h6> {{$employeeWithCompanyName->telefon}}</span>
                                <span class="mb-3 "><h6 class="mb-0">E-mail: </h6> {{$employeeWithCompanyName->email}}</span>
                                <span class="mb-3 "><h6 class="mb-0">Opis: </h6> {{$employeeWithCompanyName->opis}}</span>
                                @if($employeeWithCompanyName->firma)
                                <span class="mb-3 "><h6 class="mb-0">Nazwa firmy: </h6> {{$employeeWithCompanyName->firma->nazwa}}</span>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center mt-5">
                <span class="alert alert-info">Brak danych o pracownikach do wyświetlenia.</span>
            </div>
        @endif
    </div>

@endsection