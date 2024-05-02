/* Add your custom JavaScript code */



function openenquiry(el)
		{
			var enquiryForm = document.getElementById("enquiry-form");
			if(hasClass(enquiryForm, 'active'))
				enquiryForm.setAttribute('class','enquirenow')
			else
				enquiryForm.setAttribute('class','enquirenow active')
		}

		function hasClass(element, cls) {
		    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
		}
		/*Form hide submit*/
 