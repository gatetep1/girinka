// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'century', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796'; 
 
$(document).ready(function(){
    $.ajax({
      url: "graphData.php",
      method: "GET",
      success: function(data) {
            console.log(data);
            var sector = [];
            var sum = [];
            
            function number_format(number, decimals, dec_point, thousands_sep) {
              // *     example: number_format(1234.56, 2, ',', ' ');
              // *     return: '1 234,56'
              number = (number + '').replace(',', '').replace(' ', '');
              var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                  var k = Math.pow(10, prec);
                  return '' + Math.round(n * k) / k;
                };
              // Fix for IE parseFloat(0.55).toFixed(0) = 0;
              s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
              if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
              }
              if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
              }
              return s.join(dec);
            }



            for(var i in data) {
                      sector.push(data[i].sector);
                      sum.push(data[i].sum);
                    }

                    var chartdata = {
                      labels: sector,
                      datasets : [
                        {
                          label: 'Sector',
                          backgroundColor: 'rgba(200, 200, 200, 0.75)',
                          borderColor: 'rgba(200, 200, 200, 0.75)',
                          hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                          hoverBorderColor: 'rgba(200, 200, 200, 1)',
                          data: sum, 

                          backgroundColor:[
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(248 248 255 0.6)',				
                            'rgba(245 245 245 0.6)',				
                            'rgba(220 220 220 0.6)',		
                            'rgba(255 250 240 0.6)',
                            'rgba(253 245 230 0.6)',		
                            'rgba(250 240 230 0.6)',	
                            'rgba(250 235 215 0.6)',			
                            'rgba(255 239 213 0.6)',				
                            'rgba(255 235 205 0.6)',				
                            'rgba(255 228 196 0.6)',		
                            'rgba(255 218 185 0.6)',		             
                            'rgba(238 232 170 0.6)',				
                            'rgba(250 250 210 0.6)',		                   
                            'rgba(255 255 224 0.6)',		                  
                            'rgba(255 255   0 0.6)',		               
                            'rgba(110, 255, 20, 10)'
                        ],
                        hoverBorderWidth: 3,
                        backgroundColor: "#4e73df",
                        hoverBackgroundColor: "#2e59d9",
                        borderColor: "#4e73df"
                        }
                        
                        
                      ]
                    };
              
                    var ctx = $("#myAreaChart");
              
                    var barGraph = new Chart(ctx, {
                      type: 'bar',
                      data: chartdata,
                      options: {
                        legend:{
                            display:true,
                            position:'right',
                            labels:{
                                fontColor:'#000'
                            }

                        },
                        layout: {
                          padding: {
                            left: 10,
                            right: 25,
                            top: 0,
                            bottom: 100
                          }
                        },

                        
                        tooltips: {
                          enabled:true,
                          titleMarginBottom: 0,
                          titleFontColor: '#6e707e',
                          titleFontSize: 14,
                          backgroundColor: "rgb(255,255,255)",
                          bodyFontColor: "#858796",
                          borderColor: '#dddfeb',
                          borderWidth: 1,
                          xPadding: 15,
                          yPadding: 15,
                          displayColors: false,
                          caretPadding: 10,
                          callbacks: {
                            label: function(tooltipItem, chart) {
                              var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                              return number_format(tooltipItem.yLabel) + ' familie(s)';
                            }
                          }
                        },
                        
                    },
                    scales: {
                      xAxes: [{
                        time: {
                        },
                        gridLines: {
                          display: false,
                          drawBorder: false
                        },
                        ticks: {
                          maxTicksLimit: 4
                        },
                        maxBarThickness: 25,
                      }],
                      yAxes: [{
                        ticks: {
                          min: 0,
                          max: 15000,
                          maxTicksLimit: 5,
                          padding: 10,
                          callback: function(value, index, values) {
                            return number_format(value) + 'families';
                          }
                        },
                        gridLines: {
                          color: "rgb(234, 236, 244)",
                          zeroLineColor: "rgb(234, 236, 244)",
                          drawBorder: false,
                          borderDash: [2],
                          zeroLineBorderDash: [2]
                        }
                      }],
                    }
                    });
        
        
      },
      error: function(data) {
        console.log(data);
      }
    });
  });