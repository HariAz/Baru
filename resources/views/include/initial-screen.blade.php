<div class="modal fade" id="initialModal" tabindex="-1" role="dialog" aria-labelledby="initialModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.5);">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="initialModalLabel">Initial Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="initialForm" method="POST" action="">
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <select class="form-control" id="year" name="year" required>
                            <option value="" disabled selected>Select Year</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="audit_team">Audit Team:</label>
                        <select class="form-control" id="audit_team" name="audit_team" required>
                            <option value="" disabled selected>Select Audit Team</option>
                            <option value="Team A">Team A</option>
                            <option value="Team B">Team B</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="audit_plan_no">Audit Plan no:</label>
                        <select class="form-control" id="audit_plan_no" name="audit_plan_no" required>
                            <option value="" disabled selected>Select Audit Plan No</option>
                            <option value="2024-IA-01">2024-IA-01</option>
                            <option value="2024-IA-02">2024-IA-02</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="audit_checklist_no">Audit Checklist No:</label>
                        <select class="form-control" id="audit_checklist_no" name="audit_checklist_no" required>
                            <option value="" disabled selected>Select Audit Checklist No</option>
                            <option value="Checklist-001">Checklist-001</option>
                            <option value="Checklist-002">Checklist-002</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Proceed</button>
                </form>

            </div>
        </div>
    </div>
</div>