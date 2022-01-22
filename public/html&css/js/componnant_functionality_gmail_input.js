function componnant_functionality_gmail_input(){
	this.render=function(){
		if(this.father_id){
			this.father=document.getElementById(this.father_id);
			if(this.father){
				put(this.input_holder,'ap',this.father);
			}else{
				CFGM
				.err(`Gmail_input_err:\ndocument did not have (${this.father_id}) element`)
			}
		}
	}

	this.searsh=function(){
		this.email_input.addEventListener('keyup',(e)=>{
			if(e.currentTarget.value){
				this.searsh_result=[];
				CFGM.removehid(this.sellect_list);
				CFGM.remove_all_chil_from_selected_list(this.sellect_list);
				for(i=0;i<emails.length;i++){
					if(emails[i].includes(e.currentTarget.value)){
						this.searsh_result.push({e:emails[i],value:emails[i]
						.indexOf(e.currentTarget.value)});
					}
				}
				this.searsh_result=this.searsh_result.sort(function (a, b) {
					  return a.value - b.value;
				});

				if(this.searsh_result.length!=0){
					CFGM.render_searsh_result.call(this,this.searsh_result)
				}else{
					CFGM.sethid(this.sellect_list);
				}		

			}else{
				CFGM.sethid(this.sellect_list);
			}
		})
	}

	this.remove_all_chil_from_selected_list=(list)=>{
		while(list.children.length!=1){
			list.lastElementChild.remove();
		}
	}

	this.render_searsh_result=function(searsh_result){
		for(i=0;i<searsh_result.length;i++){
			put(new this.componnent_email_in_selected_list(searsh_result[i].e).holder,
				'ap',
				this.sellect_list
				)
		}
	}

	this.sellect_email=function(me){
		this.addEventListener('click',()=>{
			put(new CGI.componnent_sellected(this.textContent).sellected,
				'ap',
				this.parentElement.parentElement.nextElementSibling
				)
			CFGM.sethid(this.parentElement);
			//this.
			this.parentElement.previousElementSibling.value='';
		})

	}

	this.set_email_to_input=function(){
		this.email_input.addEventListener('keyup',(e)=>{
			if(e.key=='Enter'){
				if(e.currentTarget.value!=''&&e.currentTarget.value!=' '){
					put(new CGI.componnent_sellected(e.currentTarget.value).sellected,
						'ap',
						this.sellected_holder
						)
					CFGM.sethid(this.sellect_list);
					//this.
					e.currentTarget.value='';					
				}
			}

		})
	}	

	this.show_sellected_close_bt=function(){
		this.sellected.addEventListener('mouseenter',(e)=>{
			CFGM.removehid(this.deselect)
		})
		this.sellected.addEventListener('mouseleave',(e)=>{
			CFGM.sethid(this.deselect)
		})		
	}

	this.remove_sellected=function(){
		this.deselect.addEventListener('click',()=>{
			this.sellected.remove();
		})
	}


	this.err=(err)=>{
		console.error(err)
	}
	this.sethid=function(ele){
		ele.classList.add("hid");
	}

	this.removehid=function(ele){
		ele.classList.remove("hid");
	}

}
var CFGM=new componnant_functionality_gmail_input();