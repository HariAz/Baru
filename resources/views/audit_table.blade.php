@extends('index') <!-- Gunakan layout utama, bisa disesuaikan -->

@section('content')
    @include('include.header')

    <div id="page-content" class="container-fluid">

        <div id="mainContent">
        {{-- <!-- Button Container -->
        <div class="button-container">
            <div class="info">
                <label>Audit Plan No:</label>
                <input type="text" id="audit_plan" name="audit_plan" value="" class="form-control" readonly>
                <label>Audit Checklist No:</label>
                <input type="text" id="audit_check" name="audit_check" value="" class="form-control" readonly>
            </div>
            <button class="btn btn-primary">Save</button>
            <button id="addRowBtn" class="btn btn-secondary">Add</button>
            <button class="btn btn-light">Back</button>
        </div> --}}

            <!-- Audit Table -->
            <div class="table-responsive">
                <table class="table table-bordered audit-check-table">
                    <thead class="thead-dark">
                        <tr>
                            <th class="table-header">Reference</th>
                            <th class="table-header">Audit Questions/Statement</th>
                            <th class="table-header">Audit Findings</th>
                            <th class="table-header">Objective Evidence</th>
                            <th class="table-header">Note</th>
                            <th class="table-header">Attachment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>                            
                                <select class="form-control" name="reference">
                                    <option value="10-DP-P702">10-DP-P702</option>
                                    <option value="10-DP-P702">10-DP-P702.03</option>
                                    <option value="10-DP-P702">10-DP-P702.03</option>
                                    <option value="10-DP-P702">10-DP-P702.XX</option>
                                </select>
                            </td>
                            <td>Describe the audit details...</td>
                            <td>
                                <select class="form-control">
                                    <option value="COMPLIANT">COMPLIANT</option>
                                    <option value="NON-COMPLIANT">OFI</option>
                                    <option value="PENDING">MAJOR NC</option>
                                    <option value="PENDING">MINOR NC</option>
                                </select>
                            </td>
                            <td>Provide evidence details...</td>
                            <td>Additional notes...</td>
                            <td><input type="file" class="form-control-file"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
