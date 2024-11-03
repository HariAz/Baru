@extends('index') <!-- Gunakan layout utama, bisa disesuaikan -->

@section('content')
@include('include.header')

<div id="page-content" class="container-fluid">

    <div id="mainContent">
        <!-- Button Container -->
        <div class="button-container">
            <button class="btn btn-primary">Save</button>
            <button class="btn btn-secondary">Add</button>
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
                <tbody>
                    <tr>
                        <td>
                            <input type="text" id="reference" name="reference" value="" class="form-control">
                            <!-- <select class="form-control" name="reference">
                                    <option value="10-DP-P702">10-DP-P702</option>
                                    <option value="10-DP-P702">10-DP-P702.03</option>
                                    <option value="10-DP-P702">10-DP-P702.03</option>
                                    <option value="10-DP-P702">10-DP-P702.XX</option>
                                </select> -->
                        </td>
                        <td>
                            <input type="text" id="question" name="question" value="" class="form-control">
                        </td>
                        <td>
                            <select class="form-control">
                                <option value="COMPLIANT">COMPLIANT</option>
                                <option value="NON-COMPLIANT">OFI</option>
                                <option value="PENDING">MAJOR NC</option>
                                <option value="PENDING">MINOR NC</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" id="evidence" name="evidence" value="" class="form-control">
                        </td>
                        <td><input type="text" id="note" name="note" value="" class="form-control"></td>
                        <td><input type="file" class="form-control-file"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('include.footer')
@endsection