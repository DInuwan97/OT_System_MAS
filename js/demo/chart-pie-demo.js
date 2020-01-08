

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Blue", "Red", "Yellow", "Green","marron","Black", "Red", "Yellow", "Green","marron","Blue", "Red", "Yellow", "Green","marron","Blue", "Red", "Yellow", "Green","marron"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32,52.64,12.21, 15.58, 11.25, 8.32,52.64,8.32,52.64,12.21, 15.58, 11.25,12.21, 15.58, 11.25,8.32,52.64,8.32],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745','maroon','Black'],
    }],
  },
});
