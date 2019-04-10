<div id="promoNode"></div>
	
	<p>Copy a snippet of the text below.  When you do, I grab that text and save it in my "selections" database table.  Now I know what people are interested in!</p>
	
	<blockquote id="content-area">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</blockquote>
</div>


<script type="text/javascript" src="mootools.js"></script>
<script type="text/javascript">
		window.addEvent('domready',function(){
			
			var getSelection = function() {
				return $try(
					function() { return window.getSelection(); },
					function() { return document.getSelection(); },
					function() { 
				        var selection = document.selection && document.selection.createRange();
						  if(selection.text) { return selection.text; }
				        return false;
				      }
				) || false;
			};
			
			var selectRequest = new Request({
				url: 'sonu_verman.php',
				method: 'post'
			});
			$('content-area').addEvent('mouseup',function(e) {
				var selection = getSelection();
				if(selection && (selection = new String(selection).replace(/^\s+|\s+$/g,''))) {
					alert('Sending to server (sonuverman): ' + selection);
					selectRequest.send('selection=' + encodeURI(selection));
				}
			});
		});
		
</script>