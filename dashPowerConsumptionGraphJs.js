var ctx = $("#line-chart");
var lineChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		datasets: [
			{
				label: "2015",
				data: [10,8,6,5,12,8,16,17,6,7,6,10],
				backgroundColor: "rgba(200,0,0,.5)",
				borderColor: "rgb(200,0,0)",
				borderWidth: 1,
				pointRadius: 4,
				pointHoverRadius: 8,
				pointBorderColor: "black",
				pointBackgroundColor: "yellow",
				pointStyle: 'star',
				spanGaps: true,
				steppedLine: true
			}
		]
	},
	options: {
		maintainAspectRatio: false
	}
});