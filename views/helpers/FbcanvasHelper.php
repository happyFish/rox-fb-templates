<?php

class FbcanvasHelper extends Rox{

	function share($options = array()){
		$default_values = array(
			'display'=>'popup',
			'name'=>'',
			'caption'=>'',
			'description'=>'',
			'href'=>'',
			'image'=>'',
			'message_div'=>'message',
			'response_success'=>'Thank You. Your post was published to your wall.',
			'response_failure'=>'Your post was not published.'
		);
		
		$options = array_merge($default_values, $options);
		
		extract($options);
		
		$return = "
		FB.login(function(response) {
			if (response.session) {
				if (typeof response.session.uid != 'undefined') {
					FB.ui(
					  {
					    method: 'stream.publish',
					    display: '$display',
					    attachment: {
					      name: '".addslashes($name)."',
					      caption: '".addslashes($caption)."',
					      description: ( 
					      	'".addslashes($description)."'
					      ),
					      href: '$href',
						  media: [
						    { 
						        'type': 'image', 
						        'src': '$image', 
						        'href': '$href'
						    }
						  ]
						}
						    
					})
				}
			}
		});
		";
		
		return $return;

	}
	
	function invite($options=array()){
		$default_options = array(
			'width'=>'625',
			'action'=>'',
			'type'=>'',
			'content'=>'',
			'req_choice'=>'',
			'label'=>'',
			'actiontext'=>'',
			'url'=> ''
		);
		
		$options = array_merge($default_options, $options);
		extract($options);
	
		return "
					FB.ui({method:'fbml.dialog', fbml:'<fb:request-form action=\"$action\" method=\"post\" invite=\"true\" type=\"Quiz\" content=\"$content <fb:req-choice url=\'$url\'label=\'$label\' />\" <fb:multi-friend-selector showborder=\"false\" actiontext=\"$actiontext:\"  rows=\"3\" cols=\"3\"/> </fb:request-form>',
    	size: {width:$width,height:$height}, width:$width, height:$height });
		";
	}
	
	function checkLogin(){
		echo "FB.login(function(response) {
			if (response.session) {
				if (typeof response.session.uid != 'undefined') {
					return true;
				}
				else{
					return false;
				}
				
			}
		});
				";
	}
	
	public function likeButton(Rox_ActiveModel $model, $url) {
		$class = strtolower(get_class($model));
		$env = Util::getEnvironment();
		
		$url = htmlentities(CANVAS_URL.'videos/view/'.$model->getId());
		$template = '<iframe src="http://www.facebook.com/plugins/like.php?href='.$url.'&amp;layout=standard&amp;show_faces=false&amp;width=50&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:45px; height:21px;" allowTransparency="true"></iframe>';
		return $template;
	}
	
	function like(){
		return "<div id='like'>
				<fb:like />
			</div>";

	}
	
}