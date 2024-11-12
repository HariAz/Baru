@extends('index') <!-- Gunakan layout utama -->

@section('content')

    <div id="page-content" class="container-fluid">
        <!-- Modal untuk Initial Screen -->
        {{-- @include('include.initial-screen') --}}
        {{-- action="{{ route('audit.process') }}" --}}
        <div id="mainContent" >
            {{-- style="display: none;" --}}
            <form class="audit-form" method="POST" >
                @csrf <!-- Token CSRF untuk keamanan -->

                <div class="row">
                    <div class="col-md-6">
                        <label for="audit_plan_no">Nomor Rencana Audit:</label>
                        <input type="text" id="audit_plan_no" name="audit_plan_no" value="2024-IA-01" class="form-control" disabled><br>
                    </div>
                    <div class="col-md-6">
                        <label for="audit_type">Jenis Audit:</label>
                        <input type="text" id="audit_type" name="audit_type" value="Initial Audit" class="form-control" disabled><br>
                    </div>
                    <div class="col-md-6">
                        <label for="program_code">Kode Program:</label>
                        <select id="program_code" name="program_code" class="form-control">
                            <option value="AH">AH</option>
                        </select><br>
                    </div>
                    <div class="col-md-6">
                        <label for="subject">Subjek:</label>
                        <input type="text" id="subject" name="subject" value="Internal Audit Airbus Helicopter" class="form-control" disabled><br>
                    </div>
                    <div class="col-md-6">
                        <label for="date_of_audit">Tanggal Audit:</label>
                        <input type="date" id="date_of_audit" name="date_of_audit" value="2024-12-12" class="form-control"><br>
                    </div>
                    <div class="col-md-6">
                        <label for="area_manager">Area Manager:</label>
                        <input type="text" id="area_manager" name="area_manager" value="Ilham Kurnia" class="form-control"><br>
                    </div>
                    <div class="col-md-6">
                        <label for="concurrence">Konkurensi:</label>
                        <input type="text" id="concurrence" name="concurrence" value="Dwi Haryono" class="form-control" disabled><br>
                    </div>
                    <div class="col-md-6">
                        <label for="display_audit">Audit Checklist:</label>
                        <a href="{{ url('table') }}" class="btn btn-primary">Display Audit Checklist</a>
                    </div>
                    <div class="col-md-6">
                        <label>Closing Meeting:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="meeting" value="yes"> Yes
                        <input type="radio" name="meeting" value="no"> No
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" name="submit_action" value="submit" class="btn btn-primary; form-control">Submit</button>
                    </div>    
                    <div class="col-md-6">
                        <button type="submit" name="submit_action" value="cancel" class="btn btn-secondary; form-control">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('include.footer')
@endsection
