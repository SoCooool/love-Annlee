<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><div class="sidebar">
	<div class="head" style="height:140px;">
<a href="">  
		<img id="imgUserPhoto" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $member['img']; ?>" width="160" height="160" border="0"/>			
	</a></div>  
	<div id="pageLeft_divNone">&nbsp;</div>
	<div id="divMsgBox" class="Pop-news">
		<div class="Pop-Con">
			<div class="arrow arrow_left"><em>◆</em><span>◆</span></div>
			<div class="Close"><a href="javascript:void(0);"></a></div>
			<div class="Comment_form"><textarea id="txtPrivateMsg"></textarea></div>
		</div>
	</div>
</div>
