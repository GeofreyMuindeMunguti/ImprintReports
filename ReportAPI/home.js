
const app = document.getElementById('root');

const container = document.createElement('div');
container.setAttribute('class', 'container');


container.setAttribute('id', 'pdf');


const container2 = document.createElement('div');
container2.setAttribute('class', 'container');
const c = document.createElement('h3');
c.setAttribute('class','card2');
c.textContent = "Traffic share";

container2.appendChild(c);

const container3 = document.createElement('div');
container3.setAttribute('class', 'container');
const d = document.createElement('h3');
d.setAttribute('class','card2');
d.textContent = "Total Traffic ";

container3.appendChild(d);

const container4 = document.createElement('div');
container4.setAttribute('class', 'container');
const e = document.createElement('h3');
e.setAttribute('class','card2');
e.textContent = "Site Ranking ";

container4.appendChild(e);

const container5 = document.createElement('div');
container5.setAttribute('class', 'container');
const f = document.createElement('h3');
f.setAttribute('class','card2');
f.textContent = "More Details ";

container5.appendChild(f);




const onec = document.createElement('div');
onec.setAttribute('class', 'onec');


app.appendChild(onec);
onec.appendChild(container);

 //variables to pass to the db..
 var vval;
 var weblink;
 var sweetspot;
 var d_rank;
 var d_contacts;
 var d_comments;
 var d_category;
 //on traffic share
 var directt;
 var gsearcht;
 var emailt;
 var facebookt;
 var othert;
 



 
  //console.log(weblink);
        
function load(event)
{
 var key = "6a66d33c71bb43bf8cb5d6bc7a759cb0"

  
//create a request variable and assign a new XMLHttpREquest
 var request = new XMLHttpRequest();
 var requestc = new XMLHttpRequest();
 var requestr = new XMLHttpRequest();

 console.log("x")
 var website = document.getElementById('usr').value;
 weblink = website;
console.log(weblink);

const websiten = document.createElement('h2');
		websiten.setAttribute('class','card2');
		websiten.textContent = website;
         
          
        container.appendChild(websiten);


     var urlc = "https://api.similarweb.com/v1/website/"+website+"/global-rank/global-rank?api_key="+key+"&start_date=2018-11&end_date=2018-12&main_domain_only=falsehttps://api.similarweb.com/v1/website/cnn.com/global-rank/global-rank?api_key=3e7c1d992b4044d7a55685cb436c28ca&start_date=2016-01&end_date=2016-03&main_domain_only=false";
     var url = "https://api.similarweb.com/v1/website/"+website+"/total-traffic-and-engagement/visits?api_key="+key+"&start_date=2018-11&end_date=2018-12&main_domain_only=false&granularity=monthly"
     var urlr = "https://api.similarweb.com/v1/website/"+website+"/traffic-sources/overview?api_key="+key+"&start_date=2018-11&end_date=2018-12&main_domain_only=false"
     console.log(url);

 var key ="63f08154e60841c2bc8639e06f5681ea";
 request.open('GET',url,true); 
 requestc.open('GET',urlc,true);
 requestr.open('GET',urlr,true);

 request.setRequestHeader("Access-Control-Allow-Origin", "*");
 request.setRequestHeader("Access-Control-Allow-Methods", 'GET, POST, PATCH, PUT, DELETE, OPTIONS');
 request.setRequestHeader('Access-Control-Allow-Headers', 'Origin, Content-Type, X-Auth-Token');
 
//trafic request     
request.onload = function()
{      
	console.log("x")
	//access JSON data
	var data =JSON.parse(this.response);
     console.log(data);
	if(request.status>=200 && request.status< 400)
	{
		var domain = data.meta.request.domain
		console.log(domain)

		 
       
		data.visits.forEach(movie=>{
			var m = movie.date;
			console.log(m);

			var prod = movie.visits;
			console.log(prod);
			prodf = Math.round(prod);
            vval = prodf;
            //console.log(vval);
			var scr = movie.rt_score;
			console.log(scr);

			var status = document.createElement("p");

			if (prod<5000) 
			{
				console.log("within sweet spot");
				var sweetspot = "within sweetspot";
				 
				status.textContent="Within sweet spot";
				 
			}
			else
				{
					console.log("Not")
				}

			const card = document.createElement('div');
			card.setAttribute('class','card');

			const h1 = document.createElement('h1');
			h1.textContent = m;


			const p = document.createElement('p');
			p.textContent = prodf;

			const h2 = document.createElement('h2');
			h2.textContent = scr;

			const date = document.createElement('h3');
			date.textContent='UpTo :'

			const vt = document.createElement('p');
			vt.textContent ='visits:';

			 
 
            
			container.appendChild(container3);
			container3.appendChild(card);
			//container.appendChild(status);
			card.appendChild(date);
			card.appendChild(h1);
			card.appendChild(vt);
			card.appendChild(p); 
			card.appendChild(h2);
			 
			 
			 

            
         


		});

	}else{
		console.log('error');
		const errorMEssage = document.createElement('marquee');
		errorMEssage.textContent='error occured';
		app.appendChild(errorMEssage);
	}
}

//rank request
requestc.onload= function()
{
	var data2 =JSON.parse(this.response);
     console.log(data2);
	if(requestc.status>=200 && requestc.status< 400)
	{
		data2.global_rank.forEach(movie=>{
			    var rank = movie.global_rank;
			    d_rank = rank;
			    var date = movie.date;
				console.log(rank);





              const card = document.createElement('div');
			  card.setAttribute('class','card');

               const h1 = document.createElement('h1');
			   h1.textContent =date;

			  const rankt = document.createElement('p');
			  rankt.textContent = rank;

			  const country = document.createElement('h3');
			  country.textContent='Country Rank :'



			  container.appendChild(container4);
			  container4.appendChild(card);
			  card.appendChild(country);
			  card.appendChild(h1);
			  card.appendChild(rankt);
			 
		});
		      

	}
 

              const card = document.createElement('div');
			  card.setAttribute('class','new');
			  card.setAttribute('style','width = 100%');

			  const show = document.createElement('h1');
			  show.textContent = "Enter More details on the company";

			  const contact = document.createElement('h3');
			  contact.textContent='First Phone Number:'

			  const contact2 = document.createElement('h3');
			  contact2.textContent='Second Phone Number:'

			   const contactemail = document.createElement('h3');
			  contactemail.textContent='Email:'

			  const name = document.createElement('h3');
			  name.textContent='Company Category:'

			  const comments = document.createElement('h3');
			  comments.textContent='Comments';


			  const c_details = document.createElement('textarea');
			  c_details.setAttribute('id','getcontacts');
			  c_details.textContent="";

			  const c2_details = document.createElement('textarea');
			  c2_details.setAttribute('id','getcontacts2');
			  c2_details.textContent="";

			  const e_details = document.createElement('textarea');
			  e_details.setAttribute('id','getemail');
			  e_details.textContent="";


			  const n_details = document.createElement('input');
			  n_details.setAttribute('id','getdetails');
			   

			  const c_area = document.createElement('textarea');
			  c_area.setAttribute('id','getcomments');
			  


              container.appendChild(container5);
			  container5.appendChild(card);
			  card.appendChild(show);


			  
			  card.appendChild(comments);
			  card.appendChild(c_area);

 
			 

		 
}
//traffic share request
requestr.onload= function()
{
	var data3 =JSON.parse(this.response);
     console.log(data3);
	if(requestr.status>=200 && requestr.status< 400)
	{
		data3.overview.forEach(dataset=>{
			    var source = dataset.domain;
			    
			    var share = dataset.share;
				console.log(source);

				  if(source == "Direct")
				  {
				  	var directf=dataset.share;
				  	if (directf!=0)
				  	 {
				  	 	directt = directf;
				  	 }
				  	 else
				  	 {
				  	 	directt =0;
				  	 }
				  	console.log(directt);
				  }
				  else if(source == "Google Search")
				  {
				  	var gsearchf=dataset.share;
				  	 
				  	 if (gsearchf != 0) 
				  	 {
				  	 	gsearcht = gsearchf;

				  	 }
				  	 else
				  	 {
				  	 	gsearcht = 0;
				  	 }
				  	 console.log(gsearcht);
				  }
				  else if(source == "Email")
				  {
				  	var emailf=dataset.share;
				  	 
				  	 if (emailf != 0) 
				  	 {
				  	 	emailt = emailf;

				  	 }
				  	 else
				  	 {
				  	 	emailt = 0;
				  	 }
				  	 console.log(emailt);
				  }
				  else if(source == "Facebook")
				  {
				  	var facebookf=dataset.share;
				  	 
				  	 if (facebookf != 0) 
				  	 {
				  	 	facebookt = facebookf;

				  	 }
				  	 else 
				  	 {
				  	 	facebookt = 0;
				  	 }
				  	 console.log(facebookt);
				  }
				   else if(source == "Other Sources")
				  {
				  	var otherf=dataset.share;
				  	 
				  	 if (otherf != 0) 
				  	 {
				  	 	othert = otherf;

				  	 }
				  	 else
				  	 {
				  	 	othert = 0;
				  	 }
				  	 console.log(othert);
				  }
				  else
				  {
				  	console.log("Error");
				  }

				 
			   const card = document.createElement('div');
			   card.setAttribute('class','card');

			     

               const h1 = document.createElement('h1');
			   h1.textContent =source;

			  const rankt = document.createElement('p');
			  rankt.textContent = share;

			  const country = document.createElement('h3');
			  country.textContent=''


             container.appendChild(container2);

			  container2.appendChild(card);
			  card.appendChild(country);
			  card.appendChild(h1);
			  card.appendChild(rankt);

      
			 
		});
		      

	}
	}
// console.log("x")
request.send();
requestc.send();
requestr.send();
 

}




 
function post(data)
{
	    //window.location="postdb.php";
	    // var todb = new XMLHttpRequest();
     //        var method = "POST";
     //        var url = "postdb.php";
     //        var asynchronous = true;
            

     //        todb.open(method , url , asynchronous);

     //        todb.send(data);

     //        todb.onreadystatechange = function()
     //        {
     //        	if(this.readyState == 4 && this.status == 200)
     //        	{
     //        		alert(this.responseText);
     //        	}
     //        }

if (emailt!=0) 
{
	var emailtdb = emailt;
}
else
{
    emailtdb = 0;
}

if (gsearcht!=0) 
{
	var gsearchtdb = gsearcht;
}
else
{
	gsearchtdb = 0;
}

if (directt!=0) 
{
	var directtdb = directt;
}
else
{
	directtdb = 0;
}
if (facebookt!=0) 
{    var facebooktdb =0;
	 facebooktdb = facebookt;
}
else if (facebookt == null)
{
	 facebooktdb = 0;
}
if (othert!=0) 
{
	 othertdb = othert;
}
else
{
	othertdb = 0;
}
if (typeof facebooktdb === 'undefined')
{
	facebooktdb =0;
}
if (typeof othertdb === 'undefined')
{
	othertdb =0;
}
if (typeof directtdb === 'undefined')
{
	directtdb =0;
}
if (typeof gsearchtdb === 'undefined')
{
	gsearchtdb =0;
}
if (typeof emailtdb === 'undefined')
{
	emailtdb = 0;
}

//get time of the push
 var date = new Date();
      var tday = date.getDate();
      var month = date.getMonth();
      var monthc = month+1;
      var year = date.getFullYear();
var datetime = tday+"/"+monthc+"/"+year;


     var visits = vval;
     var link = weblink;
     var rank = d_rank;

  
     var g_comments = document.getElementById('getcomments').value;
     


     $.post('postdb.php', {postvisits: visits, postlink: link,postrank:d_rank,postcomments: g_comments, postgst:gsearchtdb, postdt:directtdb, postet:emailtdb, postft:facebooktdb, postot:othertdb, posttt: datetime}, function(data){

     	$('#result').html(data);
     });

     
      alert("Data on "+weblink+" Sent to database Retrieved on"+datetime);
     
    
      //console.log(g_contacts);
      window.location.reload();


}

 

  
	function HTMLtoPDF()
 {
 	window.print();
 }
