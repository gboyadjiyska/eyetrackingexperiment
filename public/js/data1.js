//jQuery
var table = [];
var row = [];

var paths = {
 "/myapp/main.html" : "data/data1.txt",
 "/myapp/main2.html" : "data/data2.txt",
 "/myapp/main3.html" : "data/data3.txt",
 "/myapp/main4.html" : "data/data4.txt",
 "/myapp/main5.html" : "data/data5.txt",
 "/myapp/main6.html" : "data/data6.txt",
 "/myapp/main7.html" : "data/data7.txt",
 "/myapp/main8.html" : "data/data8.txt",
 "/myapp/main9.html" : "data/data11.txt",
 "/myapp/main10.html" : "data/data10.txt",
 "/myapp/main11.html" : "data/data11.txt",
 "/myapp/main12.html" : "data/data12.txt"
};

var filePath = paths[window.location.pathname];
if (filePath) {
  $.get(filePath, function(data) {
     var bigarray = data.split('\n');
     bigarray.forEach(function(currRow){
       currentRow = currRow.split(';');
       table.push(currentRow);});
  }, 'text');
}

$(document).ready(function () {

   $('#number-of-ratings1,#number-of-ratings2,#number-of-ratings3,#number-of-ratings4,#number-of-ratings5,#number-of-ratings6').text(function(i){
     return table[i][2];
    });
   //display the mean value
   $('#mean1,#mean2,#mean3,#mean4,#mean5,#mean6').text(function(i){
     return table[i][3];
    });
   //display parage value
   var par1 = 4;
   for(var i = 10; i < 16; i++) {
     $('.p' + (i+1)).text(table[0][par1]);
     $('.bar' + (i+1)).css("width", table[0][par1]);
     par1++;
   }
   var par2 = 4;
   for(var i = 20; i < 26; i++) {
     $('.p' + (i+1)).text(table[1][par2]);
     $('.bar' + (i+1)).css("width", table[1][par2]);
     par2++;
   }
   var par3 = 4;
   for(var i = 30; i < 36; i++) {
     $('.p' + (i+1)).text(table[2][par3]);
     $('.bar' + (i+1)).css("width", table[2][par3]);
     par3++;
   }
   var par4 = 4;
   for(var i = 40; i < 46; i++) {
     $('.p' + (i+1)).text(table[3][par4]);
     $('.bar' + (i+1)).css("width", table[3][par4]);
     par4++;
   }
   var par5 = 4;
   for(var i = 50; i < 56; i++) {
     $('.p' + (i+1)).text(table[4][par5]);
     $('.bar' + (i+1)).css("width", table[4][par5]);
     par5++;
   }
   var par6 = 4;
   for(var i = 60; i < 66; i++) {
     $('.p' + (i+1)).text(table[5][par6]);
     $('.bar' + (i+1)).css("width", table[5][par6]);
     par6++;
   }
   //changes the star filling
   var starPar = 0;
   for(var i = 0; i < 7; i++) {
     $('#star-ratings-top' + (i+1)).width(table[starPar][3] * 20 + '%');
     starPar++;
   }
	  });
