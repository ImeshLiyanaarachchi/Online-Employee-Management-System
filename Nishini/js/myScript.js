function loadData(data){
	if(data== "btn1"){
		document.getElementById("para").innerHTML="iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile operating system. The first-generation iPhone was announced by then-Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has annually released new iPhone models and iOS updates. As of November 1, 2018, more than 2.2 billion iPhones had been sold. As of 2022, the iPhone accounts for 15.6% of global smartphone market share.";
		document.getElementById("image1").src="images/iphone.jfif";
	}
	
	else if(data== "btn2"){
		document.getElementById("para").innerHTML="Samsung Group,[3] or simply Samsung (Korean: 삼성; RR: samseong [samsʌŋ]) (stylized as SΛMSUNG), is a South Korean multinational manufacturing conglomerate headquartered in Samsung Digital City, Suwon, South Korea.[1] It comprises numerous affiliated businesses,[1] most of them united under the Samsung brand, and is the largest South Korean chaebol (business conglomerate). As of 2020, Samsung has the eighth highest global brand value";
		document.getElementById("image1").src="images/Samsung.jpg";
	}	
	else if(data== "btn3"){
		document.getElementById("para").innerHTML="Nokia Corporation (natively Nokia Oyj in Finnish and Nokia Abp in Swedish,[5] referred to as Nokia)[a] is a Finnish multinational telecommunications, information technology, and consumer electronics corporation, established in 1865. Nokia's main headquarters are in Espoo, Finland, in the greater Helsinki metropolitan area,[3] but the company's actual roots are in the Tampere region of Pirkanmaa.[6] In 2020, Nokia employed approximately 92,000 people[7] across over 100 countries, did business in more than 130 countries, and reported annual revenues of around €23 billion.[4] Nokia is a public limited company listed on the Helsinki Stock Exchange and New York Stock Exchange.[8] It was the world's 415th-largest company measured by 2016 revenues, according to the Fortune Global 500, having peaked at 85th place in 2009.[9] It is a component of the Euro Stoxx 50 stock market index.";
		document.getElementById("image1").src="images/nokia.jfif";
	}
	else if(data== "btn4"){
		document.getElementById("para").innerHTML="Oppo (stylized in Letter case) is a Chinese consumer electronics manufacturer headquartered in Dongguan, Guangdong. Its major product lines include smartphones, smart devices, audio devices, power banks, and other electronic products.";
		document.getElementById("image1").src="images/oppo.jpg";
	}
}

function priceForLoop()
{
	var phone = ["apple = $3000/=", "samsung = $2000/=", "nokia = $800/=", "oppo = $600/="];
	
	var x = phone.length;
	var message = "<b>Here phone list </b><br/>";
	
	for(let i = 0; i < x; i++)
	{
		message += phone[i] + " <br/>";
	}
	document.getElementById("para").innerHTML = message;
}

/*
function productForInLoop()
{
	var phone =[];
	phone["apple"] = "$3000/=";
	phone["samsung"] = "$2000/=";
	phone["nokia"] = "$800/=";
	phone["oppo"] = "$600/=";
	
	var list = "Here phone list<br/>";
	
	for(var item in phone){
		list in item " : " +phone[item]+"<br/>";
		
	}
	
	document.getElementById("image1").src="images/list.jpg";
	document.getElementById("para").innerHTML = list;
}
*/

function checkPassword(){
	
	if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd")){
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("Success!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitbtn").disabled=false;
	}
	else{
		document.getElementById("submitbtn").disabled=true;
	}
}