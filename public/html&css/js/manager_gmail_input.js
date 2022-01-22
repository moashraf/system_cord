function manager_gmail_input(){
	this.test=(()=>{
		this.gmail_input=new CGI.gmail_input('gmail_input',emails,false);
		console.log(this.gmail_input);
	})();

}

var MGI=new manager_gmail_input()