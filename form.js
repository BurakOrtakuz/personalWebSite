var mail = document.getElementById("eposta").value;
			var regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			
			const kontrol = form =>
			{
   				let sınıflar = form.querySelectorAll(".gerekli");
				let buton= form.querySelector('input[type="submit"]');	
				var gecerli=1;
				for(var i=0;i<5;i++){
					
					if(sınıflar[i].value==""){
						gecerli= gecerli+1;
						console.log("İlkinde");
						continue;
						
					}		
				}
				let radio=form.querySelectorAll(".cinsiyet");
				var kontrol=false;
				for(var i=0;i<2;i++){
					if(radio[i].checked==true){
						console.log("burada");
						kontrol=true;
					}
				}
				if(kontrol==true){
					gecerli=gecerli-1;
				}
				console.log(gecerli);
				
    			if(gecerli<1){
					buton.removeAttribute('disabled');

				}
				else{
					buton.setAttribute("disabled","disabled");
				}	
			}	
			let forms = document.querySelectorAll('form.iletisim');
			forms.forEach(form =>{
				kontrol(form);
				if(regex.test(mail==false)){
					buton.setAttribute("disabled","disabled");
				}
				var tarih= new Date();
				var aylar=["01","02","03","04","05","06","07","08","09","10","11","12"];
				var bugununTarihi= tarih.getFullYear() + "-" + aylar[tarih.getMonth()] + "-" + tarih.getDate();
				document.getElementById("dogum-tarihi").setAttribute('max',bugununTarihi);
				form.addEventListener('reset',()=>setTimeout(()=>kontrol(form),1))
				form.addEventListener('keyup', ()=>kontrol(form))
				form.addEventListener('change', ()=>kontrol(form))
			})
			