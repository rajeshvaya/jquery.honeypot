# jQuery Honeypot - Spam protector

A simple jquery code snippet to protect your forms from getting spam-submitted. 

1. Just include the "jquery.honeypot.js" before the </body> tag
2. Add the following code/function to your server side scripts (in this case `PHP`)
```PHP
function trap_honeypot(){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST['honeypot'] || !$_POST['human_submitted']) {
			echo "Go away"; exit;
		}
	}
}
trap_honeypot();

``` 