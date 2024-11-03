// Toggle the sidebar
document.getElementById("menu-toggle").onclick = function() {
    document.getElementById("sidebar").classList.toggle("show");
    document.getElementById("page-content").classList.toggle("slide");
};

// Close button functionality
document.getElementById("menu-close").onclick = function() {
    document.getElementById("sidebar").classList.remove("show");
    document.getElementById("page-content").classList.remove("slide");
};
document.getElementById('addRowBtn').addEventListener('click', function() {
        // Template baris baru
        const newRow = `
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
        `;

        // Menyisipkan baris baru ke dalam tbody
        document.getElementById('auditTableBody').insertAdjacentHTML('beforeend', newRow);
    });
$(document).ready(function() {
    $('#initialModal').modal('show');

    $('#initialForm').on('submit', function(event) {
        event.preventDefault();

        var name = $('#userName').val();
        var auditType = $('#auditType option:selected').text();

        $('#displayName').text(name);
        $('#displayAuditType').text(auditType);

        $('#initialModal').modal('hide');
        $('#mainContent').fadeIn();
    });
});
