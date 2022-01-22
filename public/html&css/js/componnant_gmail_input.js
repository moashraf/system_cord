function componnant_gmail_input(){
	this.gmail_input=function(father_id,data,same_value){
		this.father_id=father_id;
		this.father;
		this.data=data;
		this.searsh_result=[];
		this.input_holder=make({
			el:'div',
			att:{
				className:'input_holder'
			}
		})

		this.email_input_holder=make({
			el:'div',
			att:{
				className:'email_input_holder'
			}
		})

		this.sellected_holder=make({
			el:'div',
			att:{
				className:'sellected_holder'
			},
			custom:{
				allaw_same_value:same_value||false
			}			
		})
		put(this.email_input_holder,'ap',this.input_holder);
		put(this.sellected_holder,'ap',this.input_holder);

		this.email_input_title=make({
			el:'pre',
			text:' لللللemail : ',
			att:{
				className:'email_input_title center '
			}
		})

		this.email_input=make({
			el:'input',
			att:{
				className:'email_input',
				id: 'email_input',
				spellcheck:false,
				type:'text'
			},
		})

		/* this.sellect_list=make({
			el:'div',
			att:{
				className:'sellect_list hid'
			}
		}) */
		put(this.email_input_title,'ap',this.email_input_holder);
		put(this.email_input,'ap',this.email_input_holder);	
		put(this.sellect_list,'ap',this.email_input_holder);

		this.sellect_list_clous_bt=make({
			el:'div',
			att:{
				className:'sellect_list_clous_bt hid',
				title:'hidden'
			}
		})

		this.componnent_email_in_selected_list=function(data){
			this.holder=make({
				el:'div',
				text:data,
				att:{
					className:'email_in_selected_list'
				},
				ev:{
					e:function(){
						CFGM.sellect_email.call(this)
					}
				}

			})

			return this;
		}

		put(this.sellect_list_clous_bt,'ap',this.sellect_list);	

		put(new this.componnent_email_in_selected_list('mahmoudxyz@gmail.com').holder
			,'ap'
			,this.sellect_list);

		CFGM.render.call(this);
		CFGM.searsh.call(this);
		CFGM.set_email_to_input.call(this);
		return this		
	}

	this.componnent_sellected=function(emil){
		this.sellected=make({
			el:'div',
			att:{
				className:'sellected center'
			},
		})

		this.email_text=make({
			el:'div',
			text:emil,
			att:{
				className:'email_text'
			}			
		})

		this.deselect=make({
			el:'div',
			att:{
				className:'deselect hid',
				title:'remove'
			}			
		})
		put(this.email_text,'ap',this.sellected);	
		put(this.deselect,'ap',this.sellected);

		CFGM.show_sellected_close_bt.call(this);
		CFGM.remove_sellected.call(this);
		
		return this;
	}



}
var CGI=new componnant_gmail_input();