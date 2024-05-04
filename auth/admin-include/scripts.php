
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin-include/style/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="admin-include/style/assets/demo/chart-area-demo.js"></script>
        <script src="admin-include/style/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="admin-include/style/js/datatables-simple-demo.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script>
        var message = "<?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?>";
        if (message !== '') {
            alert(message);
        }
    </script>
	<script>
  
    function populateModalFields() {
        
        fetch('../server/fetch_html_skill.php')
            .then(response => response.text())
            .then(data => document.getElementById('htmlSkill').value = data);


        fetch('../server/fetch_js_skill.php')
            .then(response => response.text())
            .then(data => document.getElementById('jsSkill').value = data);


        fetch('../server/fetch_dbms_skill.php')
            .then(response => response.text())
            .then(data => document.getElementById('dbmsSkill').value = data);


        fetch('../server/fetch_admin_skill.php')
            .then(response => response.text())
            .then(data => document.getElementById('adminSkill').value = data);
    }

    document.getElementById('updateModal').addEventListener('shown.bs.modal', populateModalFields);
</script>
<script>

    var inquiryData = <?php echo json_encode($inquiry_data); ?>;
    
    var dates = Object.keys(inquiryData);
    var counts = Object.values(inquiryData);
    
    var ctx = document.getElementById('inquiriesChart').getContext('2d');
    var inquiriesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: dates, 
            datasets: [{
                label: 'Total Inquiries',
                data: counts, 
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
$(document).ready(function() {
 
    $('#inquiriesTable').DataTable({
        data: <?php echo json_encode($inquiry_data); ?>,
        columns: [
            
            { data: 'name' },
            { data: 'email' },
            { data: 'subject' },
            { data: 'message' }
        ],
        columnDefs: [
            { targets: [0], visible: false },
        ],
        order: [[0, 'desc']], 
        paging: true,
        lengthMenu: [5, 10, 25, 50], 
        pageLength: 5, 
        searching: true, 
        ordering: true, 
        info: true, 
        responsive: true 
    });
});

</script>

<script>
   
    var labels = <?php echo json_encode(array_keys($contents_data)); ?>;
    var data = <?php echo json_encode(array_values($contents_data)); ?>;
    var ctx = document.getElementById('myContentsChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Contents',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    type: 'time',
                    time: {
                        unit: 'day',
                        displayFormats: {
                            day: 'MMM D'
                        }
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Date'
                    }
                }],
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'Total Contents'
                    }
                }]
            }
        }
    });
</script>
<script>
    function uploadWork() {
        document.getElementById("uploadWorksForm").reset();
        var myModal = new bootstrap.Modal(document.getElementById('uploadModal'));
        myModal.show();
    }
</script>
    </body>
</html>
