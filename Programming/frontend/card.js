function divideCards(){
    // console.log("Total people:"+$("#numOfPeople").val());

    if($("#numOfPeople").val() > 0){
    	$.ajax({
	        type: "GET",
	        url: 'backend/divideCard.php?totalPeople='+$("#numOfPeople").val(),
	        success: function (res) {
	            // console.log(JSON.parse(res));
	            let htmlString = "";
	            let result = JSON.parse(res);
	            let countPlayer = 0;

	            result.forEach((elem)=>{
	            	htmlString = htmlString + "<tr style='vertical-align:top;'><td>" + (++countPlayer) + "</td><td style='text-align:left;'>" + elem + "</td></tr>";
	            });
	        	$("#resultDiv").html("<table style='border:1px solid black;margin:20px;' cellpadding='15px;'><tr><th>Player</th><th>Card</th></tr>"+htmlString+"</table>");
	        }
	    });
    }
    else{
    	$("#resultDiv").html("Input value does not exist or value is invalid");
    }
}