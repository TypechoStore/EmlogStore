<?php if(!defined('EMLOG_ROOT')) {exit('error!');}?>
<link rel="stylesheet" href="../include/lib/css/jquery-ui.css" media="all">
<style>
  #sortableitem { list-style-type: none; margin: 0; padding: 0; width: 100%; }
  #sortableitem li { margin: 5px 0px; padding: 0.5em; }
</style>
<script type="text/javascript" src="../include/lib/js/jquery/jquery-ui.min.js?v=<?php echo Option::EMLOG_VERSION; ?>"></script>
<script>setTimeout(hideActived,2600);</script>
<div>
	<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
	  <legend><b>侧边栏组件管理</b></legend>
	</fieldset>
	<?php if(isset($_GET['activated'])):?><blockquote class="actived layui-elem-quote">设置保存成功</blockquote><?php endif;?>
</div>
<div class="layui-row layui-col-space15">
	<div class="layui-col-md6">	
		<div id="adm_widget_list" class="layui-collapse" lay-filter="navi_custom">
			<div class="layui-colla-item" id="blogger">
				<h2 class="layui-colla-title">个人资料</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=blogger" method="post">
						<ul>
							<li class="widget-title" style="display:none;">个人资料</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['blogger']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="calendar">
				<h2 class="layui-colla-title">日历</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=calendar" method="post">
						<ul>
							<li class="widget-title" style="display:none;">日历</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['calendar']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="twitter">
				<h2 class="layui-colla-title">最新微语</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=twitter" method="post">
						<ul>
							<li class="widget-title" style="display:none;">最新微语</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['twitter']; ?>" class="layui-input" />
								<div style="margin:10px 0px;">首页显示最新微语数</div>
								<input maxlength="5" size="10" value="<?php echo Option::get('index_newtwnum'); ?>" name="index_newtwnum" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="tag">
				<h2 class="layui-colla-title">标签</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=tag" method="post">
						<ul>
							<li class="widget-title" style="display:none;">标签</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['tag']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="sort">
				<h2 class="layui-colla-title">分类</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=sort" method="post">
						<ul>
							<li class="widget-title" style="display:none;">分类</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['sort']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="archive">
				<h2 class="layui-colla-title">存档</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=archive" method="post">
						<ul>
							<li class="widget-title" style="display:none;">存档</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['archive']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="newcomm">
				<h2 class="layui-colla-title">最新评论</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=newcomm" method="post">
						<ul>
							<li class="widget-title" style="display:none;">最新评论</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['newcomm']; ?>" class="layui-input" />
								<div style="margin:10px 0px;">首页最新评论数</div>
								<input maxlength="5" size="10" value="<?php echo Option::get('index_comnum'); ?>" name="index_comnum" class="layui-input" />
								<div style="margin:10px 0px;">新近评论截取字节数</div>
								<input maxlength="5" size="10" value="<?php echo Option::get('comment_subnum'); ?>" name="comment_subnum" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="newlog">
				<h2 class="layui-colla-title">最新文章</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=newlog" method="post">
						<ul>
							<li class="widget-title" style="display:none;">最新文章</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['newlog']; ?>" class="layui-input" />
								<div style="margin:10px 0px;">首页显示最新文章数</div>
								<input maxlength="5" size="10" value="<?php echo Option::get('index_newlognum'); ?>" name="index_newlog" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="hotlog">
				<h2 class="layui-colla-title">热门文章</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=hotlog" method="post">
						<ul>
							<li class="widget-title" style="display:none;">热门文章</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['hotlog']; ?>" class="layui-input" />
								<div style="margin:10px 0px;">首页显示热门文章数</div>
								<input maxlength="5" size="10" value="<?php echo Option::get('index_hotlognum'); ?>" name="index_hotlognum" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="random_log">
				<h2 class="layui-colla-title">随机文章</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=random_log" method="post">
						<ul>
							<li class="widget-title" style="display:none;">随机文章</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['random_log']; ?>" class="layui-input" />
								<div style="margin:10px 0px;">首页显示随机文章数</div>
								<input maxlength="5" size="10" value="<?php echo Option::get('index_randlognum'); ?>" name="index_randlognum" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="link">
				<h2 class="layui-colla-title">链接</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=link" method="post">
						<ul>
							<li class="widget-title" style="display:none;">链接</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['link']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<div class="layui-colla-item" id="search">
				<h2 class="layui-colla-title">搜索</h2>
				<div class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=search" method="post">
						<ul>
							<li class="widget-title" style="display:none;">搜索</li>
							<li>
								<div style="margin:10px 0px;">标题</div>
								<input name="title" value="<?php echo $customWgTitle['search']; ?>" class="layui-input" />
								<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
								<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
								<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
							</li>
						</ul>
					</form>
				</div>
			</div>
			
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
			  <legend>
				自定义组件
			  </legend>
			</fieldset>
			
			<?php
			foreach ($custom_widget as $key=>$val){
				preg_match("/^custom_wg_(\d+)/", $key, $matches);
				$custom_wg_title = empty($val['title']) ? '未命名组件('.$matches[1].')' : $val['title'];
				?>
				<div class="layui-colla-item" id="<?php echo $key; ?>">
					<h2 class="layui-colla-title"><?php echo $custom_wg_title; ?></h2>
					<div class="layui-colla-content">
						<form class="layui-form" action="widgets.php?action=setwg&wg=custom_text" method="post">
							<ul>
								<li class="widget-title" style="display:none;"><?php echo $custom_wg_title; ?></li>
								<li>
									<input type="hidden" name="custom_wg_id" value="<?php echo $key; ?>" />
									<input class="layui-input" type="text" name="title" value="<?php echo $val['title']; ?>" />
									<textarea class="layui-textarea" name="content" rows="8"><?php echo $val['content']; ?></textarea>
									<input type="submit" value="更改" class="layui-btn layui-btn-sm" />
									<input type="button" value="添加" class="layui-btn layui-btn-primary layui-btn-sm widget-act-add" />
									<input type="button" value="删除" class="layui-btn layui-btn-primary layui-btn-sm widget-act-del" style="display:none;" />
									<input type="button" value="卸载该组件" class="layui-btn layui-btn-primary layui-btn-sm" onClick="location.href='widgets.php?action=setwg&wg=custom_text&rmwg=<?php echo $key; ?>';" />
								</li>
							</ul>
						</form>
					</div>
				</div>
				<?php
			}
			?>
			
			<div class="layui-colla-item" id="search">
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				  <legend>
					<button type="button" onclick="displayToggle('custom_text_new', 2);" class="layui-btn layui-btn-primary">自定义一个新的组件+</button>
				  </legend>
				</fieldset>
				<div id="custom_text_new" class="layui-colla-content">
					<form class="layui-form" action="widgets.php?action=setwg&wg=custom_text" method="post">
						<ul>
							<li>
								<div style="margin:10px 0px;">组件名</div>
								<input name="new_title" value="" class="layui-input" />
								<div style="margin:10px 0px;">内容（支持html）</div>
								<textarea name="new_content" class="layui-textarea" rows="10"></textarea>
								<input type="submit" value="添加组件" class="layui-btn layui-btn-sm" />
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="layui-col-md6">
		<form class="layui-form" action="widgets.php?action=compages" method="post">
			<div id="adm_widget_box">
				<?php if($tpl_sidenum > 1):?>
				<p>
				<select id="wg_select" lay-filter="wg_select">
				<?php for ($i=1; $i<=$tpl_sidenum; $i++):
				if($i == $wgNum):
				?>
				<option value="<?php echo $i;?>" selected>侧边栏<?php echo $i;?></option>
				<?php else:?>
				<option value="<?php echo $i;?>">侧边栏<?php echo $i;?></option>
				<?php endif;endfor;?>
				</select>
				</p>
				<?php endif;?>
				<ul id="sortableitem">
				<?php 
				if($widgets){
					foreach ($widgets as $widget){
						$flg = strpos($widget, 'custom_wg_') === 0 ? true : false;//是否为自定义组件
						$title = ($flg && isset($custom_widget[$widget]['title'])) ? $custom_widget[$widget]['title'] : '';	//获取自定义组件标题
						if($flg && empty($title)){
							preg_match("/^custom_wg_(\d+)/", $widget, $matches);
							$title = '未命名组件('.$matches[1].')';
						}	
						?>
						<li class="sortableitem ui-state-default" id="em_<?php echo $widget; ?>" style="cursor:move;">
						<input type="hidden" name="widgets[]" value="<?php echo $widget; ?>" />
						<?php 
						if ($flg){
							echo $title;
						}else{
							echo $widgetTitle[$widget];
						}?>
						</li>
						<?php
					}
				}
				?>
				</ul>
				<input type="hidden" name="wgnum" id="wgnum" value="<?php echo $wgNum; ?>" />
				<input type="submit" value="保存组件排序" class="layui-btn" />
				<button type="button" onClick="em_confirm(0, 'reset_widget', '<?php echo LoginAuth::genToken(); ?>');" class="layui-btn layui-btn-primary" />恢复出厂设置</button>
			</div>
		</form>
	</div>
</div>
<script>
var moveFlag = 0;
(function ($) {
	var proto = $.ui.mouse.prototype, _mouseInit = proto._mouseInit;
	$.extend(proto, {
		_mouseInit: function () {
			this.element.bind("touchstart." + this.widgetName, $.proxy(this, "_touchStart"));
			_mouseInit.apply(this, arguments);
		}, _touchStart: function (event) {
			this.element.bind("touchmove." + this.widgetName, $.proxy(this, "_touchMove")).bind("touchend." + this.widgetName, $.proxy(this, "_touchEnd"));
			this._modifyEvent(event);
			$(document).trigger($.Event("mouseup"));
			this._mouseDown(event);
			console.log("i touchStart!");
		}, _touchMove: function (event) {
			moveFlag = 1;
			this._modifyEvent(event);
			this._mouseMove(event);
			console.log("i touchMove!");
		}, _touchEnd: function (event) {
			if (moveFlag == 0) {
				var evt = document.createEvent('Event');
				evt.initEvent('click', true, true);
				this.handleElement[0].dispatchEvent(evt);
			}
			this.element.unbind("touchmove." + this.widgetName).unbind("touchend." + this.widgetName);
			this._mouseUp(event);
			moveFlag = 0;
			console.log("i touchEnd!");
		}, _modifyEvent: function (event) {
			event.which = 1;
			var target = event.originalEvent.targetTouches[0];
			event.pageX = target.clientX;
			event.pageY = target.clientY;
		}
	});
})(jQuery);
</script>
<script>
$(document).ready(function(){
	layui.use(["form"], function(){
		var form = layui.form;
		form.on('select(wg_select)', function(data){
			location.href = "widgets.php?wg="+$("#wg_select").val();
		});
	});
	$("#custom_text_new").css('display', $.cookie('em_custom_text_new') ? $.cookie('em_custom_text_new') : 'none');
	var widgets = $(".sortableitem").map(function(){return $(this).attr("id");});
	$.each(widgets,function(i,widget_id){
		var widget_id = widget_id.substring(3);
		$("#"+widget_id+" .widget-act-add").hide();
		$("#"+widget_id+" .widget-act-del").show();
	});
	/*添加侧边栏*/
	$("#adm_widget_list .widget-act-add").click(function(){
		var wgnum = $("#wgnum").val();
		var title = $(this).parent().prevAll(".widget-title").html();
		var widget_id = $(this).parent().parent().parent().parent().parent().attr("id");
		var widget_element = "<li class=\"sortableitem ui-state-default\" id=\"em_"+widget_id+"\">"+title+"<input type=\"hidden\" name=\"widgets[]\" value=\""+widget_id+"\" /></li>";
		$("#adm_widget_box ul").append(widget_element);
		$(this).hide();
		$(this).next(".widget-act-del").show();
	});
	/*移除侧边栏*/
	$("#adm_widget_list .widget-act-del").click(function(){
		var widget_id = $(this).parent().parent().parent().parent().parent().attr("id");
		$("#adm_widget_box ul #em_" + widget_id).remove();
		$(this).hide();
		$(this).prev(".widget-act-add").show();
	});
	/*拖动侧边栏*/
	$( "#sortableitem" ).sortable();
    $( "#sortableitem" ).disableSelection();
	
	$("#menu_widget").addClass('layui-this');
	$("#menu_widget").parent().parent().addClass('layui-nav-itemed');
});
</script>