function validation(){
			var pass=document.Registration_form.Password.value;
			var cpass=document.Registration_form.Comfirm_Password.value;
			var plength=document.Registration_form.Comfirm_Password.value.length;
			if(document.Registration_form.First_name.value==""){
				alert('Fill the first name field'); 
				document.Registration_form.First_name.focus();}
			else if(document.Registration_form.Last_name.value==""){
				alert("'Fill the last name field'");
				document.Registration_form.Last_name.focus();
				}
			else if(document.Registration_form.B_day.value==""){
				alert("'Fill the Birth day field'");
				document.Registration_form.B_day.focus();
				}
			else if(document.Registration_form.Email.value==""){
				alert("'Fill the Email field'");
				document.Registration_form.Email.focus();
				}else if(document.Registration_form.Password.value==""){
				alert("'Fill the Passwordfield'");
				document.Registration_form.Password.focus();
				}
			else if(document.Registration_form.Comfirm_Password.value==""){
				alert("'Fill the Comfirm_Password field'");
				document.Registration_form.Comfirm_Password.focus();
				}
			else if (pass!=cpass){
				alert("Passwords are not matching");
				document.Registration_form.focus();}
			else if (pass.indexOf(' ') > 0)
			{alert("spaces cannot be in a password")
			}
			else if(plength<5){
				alert("password was very short!!!!! Enter proper one");
				document.Registration_form.Password.focus();}
			}