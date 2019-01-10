 var link = document.getElementById('usr').value;


	function HTMLtoPDF()
 {
 	var doc = new jsPDF();
 	doc.fromHTML($('#root').get(0),20,20, {'width' : 500});
 	doc.save('trial.pdf');
 }
 function load() 
 {
 	 var data = {
 	 	postlink: link
 	 };
 	 $.post(data);

 	window.location = "dbcon.php";
 	console.log(link);
 	// body...
 }

  
 
