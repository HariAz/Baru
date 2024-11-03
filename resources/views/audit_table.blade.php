@extends('index') <!-- Gunakan layout utama, bisa disesuaikan -->

@section('content')
@include('include.header')

<div id="page-content" class="container-fluid">
    <div id="mainContent">
        <!-- Button Container -->
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
        </div>

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
                <tbody id="auditTableBody">
                    <tr>
                        <td><input type="text" name="reference[]" class="form-control"></td>
                        <td><input type="text" name="question[]" class="form-control"></td>
                        <td>
                            <select name="findings[]" class="form-control">
                                <option value="COMPLIANT">COMPLIANT</option>
                                <option value="NON-COMPLIANT">OFI</option>
                                <option value="PENDING">MAJOR NC</option>
                                <option value="PENDING">MINOR NC</option>
                            </select>
                        </td>
                        <td><input type="text" name="evidence[]" class="form-control"></td>
                        <td><input type="text" name="note[]" class="form-control"></td>
                        <td><input type="file" name="attachment[]" class="form-control-file"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('include.footer')
@endsection
