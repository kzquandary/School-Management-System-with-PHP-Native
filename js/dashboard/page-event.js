(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	
	var chartBar = function(){
		if(jQuery('#chart_widget_2').length > 0 ){
	
			const chart_widget_2 = document.getElementById("chart_widget_2").getContext('2d');
			//generate gradient
			

			// widgetChart1.attr('height', '100');

			new Chart(chart_widget_2, {
				type: 'bar',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec","Jan"],
					datasets: [
						{
							label: "My First dataset",
							data: [15, 40, 55, 40, 25, 35, 40, 50, 85, 95, 54, 35,15],
							borderColor: '#13B497',
							borderWidth: "0",
							backgroundColor: ['#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59','#13B497','#036C59',], 
							hoverBackgroundColor: '#13B497'
						}
					]
				},
				options: {
					legend: false,
					responsive: true, 
					maintainAspectRatio: false,  
					scales: {
						yAxes: [{
							display: false, 
							ticks: {
								beginAtZero: true, 
								display: false, 
								max: 100, 
								min: 0, 
								stepSize: 10
							}, 
							gridLines: {
								display: false, 
								drawBorder: false
							}
						}],
						xAxes: [{
							display: false, 
							barPercentage: 0.4, 
							gridLines: {
								display: false, 
								drawBorder: false
							}, 
							ticks: {
								display: false
							}
						}]
					}
				}
			});

		}
		
		
	}
	var chart_widget_3 = function(){
		if(jQuery('#chart_widget_3').length > 0 ){
			const chart_widget_1 = document.getElementById("chart_widget_3").getContext('2d');
			new Chart(chart_widget_1, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May"],

					datasets: [{
						label: "Sales Stats",
						backgroundColor: ['rgba(19, 180, 151, 0.1)'],
						borderColor: '#13B497',
						pointBackgroundColor: '#13B497',
						pointBorderColor: '#13B497',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#13B497',
						pointHoverBorderColor: '#13B497',
						
						data: [0, 2, 4 ,3,6]
					}]
				},
				options: {
					title: {
						display: !1
					},
					tooltips: {
						intersect: !1,
						mode: "nearest",
						xPadding: 10,
						yPadding: 10,
						caretPadding: 10
					},
					
					legend: {
						display: !1
					},
					responsive: !0,
					maintainAspectRatio: !1,
					hover: {
						mode: "index"
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Month"
							}
						}],
						yAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Value"
							},
							ticks: {
								beginAtZero: !0
							}
						}]
					},
					elements: {
						
						point: {
							radius: 0,
							borderWidth: 0
						}
					},
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 5,
							bottom: 0
						}
					}
				}
			});

		}
	}
	var lineChart = function(){
		var optionsTimeline = {
			chart: {
				type: "bar",
				height: 350,
				stacked: true,
				toolbar: {
					show: false
				},
				sparkline: {
					//enabled: true
				},
				offsetX:0,
			},
			series: [
				 {
					name: "New Clients",
					data: [180, 150, 200, 100, 80, 70, 40]
				}
			],
			
			plotOptions: {
				bar: {
					columnWidth: "25%",
					endingShape: "rounded",
					startingShape: "rounded",
					
					colors: {
						backgroundBarColors: ['#f0f5f2', '#f0f5f2', '#f0f5f2', '#f0f5f2','#f0f5f2','#f0f5f2','#f0f5f2','#f0f5f2'],
						backgroundBarOpacity: 1,
						backgroundBarRadius: 5,
					},

				},
				distributed: true
			},
			colors:['#13B497'],
			grid: {
				borderColor:'#f0f5f2'
			},
			legend: {
				show: false
			},
			fill: {
			  opacity: 1
			},
			dataLabels: {
				enabled: false,
				colors: ['#000'],
				dropShadow: {
				  enabled: true,
				  top: 1,
				  left: 1,
				  blur: 1,
				  opacity: 1
			  }
			},
			xaxis: {
			 categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
				show: false,
			  },
			  axisBorder: {
				  show: false,
				},
			},
			
			yaxis: {
				show: false
			},
			
			tooltip: {
				x: {
					show: true
				}
			}
		};
		var chartTimelineRender =  new ApexCharts(document.querySelector("#lineChart"), optionsTimeline);
		 chartTimelineRender.render();	
	}
	/* Function ============ */
		return {
			init:function(){
				
			},
			
			
			load:function(){
				chartBar();
				chart_widget_3();
				lineChart();
				
			},
			
			resize:function(){
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);