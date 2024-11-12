@extends('index') <!-- Menggunakan layout utama, bisa disesuaikan -->

@section('content')
    <div id="page-content" class="container-fluid">
        {{-- action="{{ route('proses_audit') }}" --}}
        <div id="mainContent">
            <form class="audit-form" method="post" >
                @csrf <!-- Token CSRF untuk keamanan form -->
                <div class="row">
                    <div class="col-md-4">
                        <label for="audit_plan_no">Audit Plan No:</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" id="audit_plan_no" name="audit_plan_no" value="2024-IA-01" class="form-control" readonly><br>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4">
                        <label for="audit_type">Audit Checklist No:</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" id="audit_check_no" name="audit_check_no" value="IA/AH/001" class="form-control" readonly><br>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <label for="program_code">Year :</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" id="year" name="year" value="2024" class="form-control" readonly><br>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="audit_type">Audit Team:</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="audit_team" name="audit_team" value="QA00000/DIVISI MUTU" class="form-control" readonly><br>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="audit_type">Audit type:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" id="audit_type" name="audit_type" value="Initial Audit" class="form-control" readonly><br>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="audit_type">Audit Plan:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="audit_plan" name="audit_plan" value="Initial Audit Test QA000" class="form-control" readonly><br>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="audit_type">Tempat:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" id="tempat" name="tempat" value="" class="form-control" ><br>
                                    </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="audit_type">Link Meeting:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" id="link_m" name="link_m" value="Initial Audit" class="form-control" ><br>
                                        </div>
                                        </div>
                    <div class="row">
                    <div class="col-md-4">
                        <label for="time">Time:</label>
                    </div>
                        <div class="col-md-7">
                        <input type="date" id="time" name="time" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-3">
                            <select id="hour" name="hour" class="form-control" aria-placeholder="HH">
                                <option value="01" class="form-control">01</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="minute" name="minute" class="form-control" aria-placeholder="MM">
                                <option value="01" class="form-control">01</option>
                            </select>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" name="submit_action" value="submit" class="form-control">Submit</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" name="submit_action" value="cancel" class="form-control">Cancel</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
