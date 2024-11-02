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
