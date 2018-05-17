var table = [];
var row = [];

$.get('data/data4.txt', function(data) {
   var bigarray = data.split('\n');
   bigarray.forEach(function(currRow){
   currentRow = currRow.split(';');
   table.push(currentRow);
   });

}, 'text');

$(document).ready(function () {

   $('#number-of-ratings1').text(table[0][2]);
   $('#number-of-ratings2').text(table[1][2]);
   $('#number-of-ratings3').text(table[2][2]);
   $('#number-of-ratings4').text(table[3][2]);
   $('#number-of-ratings5').text(table[4][2]);
   $('#number-of-ratings6').text(table[5][2]);
   //display the mean value
   $('#mean1').text(table[0][3]);
   $('#mean2').text(table[1][3]);
   $('#mean3').text(table[2][3]);
   $('#mean4').text(table[3][3]);
   $('#mean5').text(table[4][3]);
   $('#mean6').text(table[5][3]);
   //display percentage value
   $('.p11').text(table[0][4]);
   $('.p12').text(table[0][5]);
   $('.p13').text(table[0][6]);
   $('.p14').text(table[0][7]);
   $('.p15').text(table[0][8]);
   $('.p16').text(table[0][9]);
   $('.p21').text(table[1][4]);
   $('.p22').text(table[1][5]);
   $('.p23').text(table[1][6]);
   $('.p24').text(table[1][7]);
   $('.p25').text(table[1][8]);
   $('.p26').text(table[1][9]);
   $('.p31').text(table[2][4]);
   $('.p32').text(table[2][5]);
   $('.p33').text(table[2][6]);
   $('.p34').text(table[2][7]);
   $('.p35').text(table[2][8]);
   $('.p36').text(table[2][9]);
   $('.p41').text(table[3][4]);
   $('.p42').text(table[3][5]);
   $('.p43').text(table[3][6]);
   $('.p44').text(table[3][7]);
   $('.p45').text(table[3][8]);
   $('.p46').text(table[3][9]);
   $('.p51').text(table[4][4]);
   $('.p52').text(table[4][5]);
   $('.p53').text(table[4][6]);
   $('.p54').text(table[4][7]);
   $('.p55').text(table[4][8]);
   $('.p56').text(table[4][9]);
   $('.p61').text(table[5][4]);
   $('.p62').text(table[5][5]);
   $('.p63').text(table[5][6]);
   $('.p64').text(table[5][7]);
   $('.p65').text(table[5][8]);
   $('.p66').text(table[5][9]);
   //stars rating, fills in stars
   var starRating1 = table[0][3] * 20;
   $('#star-ratings-top1').width(starRating1 + '%');
   var starRating2 = table[1][3] * 20;
   $('#star-ratings-top2').width(starRating2 + '%');
   var starRating3 = table[2][3] * 20;
   $('#star-ratings-top3').width(starRating3 + '%');
   var starRating4 = table[3][3] * 20;
   $('#star-ratings-top4').width(starRating4 + '%');
   var starRating5 = table[4][3] * 20;
   $('#star-ratings-top5').width(starRating5 + '%');
   var starRating6 = table[5][3] * 20;
   $('#star-ratings-top6').width(starRating6 + '%');
   //bar rating, fills in bars
   $('.bar-15').css("width", table[0][4]);
   $('.bar-14').css("width", table[0][5]);
   $('.bar-13').css("width", table[0][6]);
   $('.bar-12').css("width", table[0][7]);
   $('.bar-11').css("width", table[0][8]);
   $('.bar-25').css("width", table[1][4]);
   $('.bar-24').css("width", table[1][5]);
   $('.bar-23').css("width", table[1][6]);
   $('.bar-22').css("width", table[1][7]);
   $('.bar-21').css("width", table[1][8]);
   $('.bar-35').css("width", table[2][4]);
   $('.bar-34').css("width", table[2][5]);
   $('.bar-33').css("width", table[2][6]);
   $('.bar-32').css("width", table[2][7]);
   $('.bar-31').css("width", table[2][8]);
   $('.bar-45').css("width", table[3][4]);
   $('.bar-44').css("width", table[3][5]);
   $('.bar-43').css("width", table[3][6]);
   $('.bar-42').css("width", table[3][7]);
   $('.bar-41').css("width", table[3][8]);
   $('.bar-55').css("width", table[4][4]);
   $('.bar-54').css("width", table[4][5]);
   $('.bar-53').css("width", table[4][6]);
   $('.bar-52').css("width", table[4][7]);
   $('.bar-51').css("width", table[4][8]);
   $('.bar-65').css("width", table[5][4]);
   $('.bar-64').css("width", table[5][5]);
   $('.bar-63').css("width", table[5][6]);
   $('.bar-62').css("width", table[5][7]);
   $('.bar-61').css("width", table[5][8]);
	  });
