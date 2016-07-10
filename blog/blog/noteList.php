<meta charset="utf-8">
<div class="note">
	<div class="noteLeft">
		<div class="noteTitle">
			<span>
				<a href="note.php?name=写日志">
					写日志
				</a>
			</span>
		</div>
<?
include "config.php";
$sql="select * from note";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$list="";
if($count==0){
	echo"该作者很懒什么日志都没写";
}else{
	echo"<ul class='listMsg'>"	;
	while($rs=mysql_fetch_array($result)){
		$list.="<li><a href=\"note.php?id=".$rs['nid']."\"><span>&nbsp;".$rs['ndate'];
		$list.="</span>&emsp;<span>".$rs['ntitle'];
		$list.="</span></a></li>";
	}
	echo $list;
	echo"</ul>";
	mysql_close($conn);
}
?>
<div class="page">
			<ul>
				<li>
					<span>上一页</span>
				</li>
				<li>
					<span>1</span>
				</li>
				<li>
					<span>2</span>
				</li>
				<li>
					<span>3</span>
				</li>
				<li>
					<span>下一页</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="noteRight">
		<div class="msgContent" name="msgContent">
	<?
		if($_GET['name']=='写日志'){
			$con="<div class='msgTilte'><h1>写日志</h1></div>";
			echo $con;	
			$form="";	
			if($_SESSION['name']=='admin'){
				$form.="<div class='msg'><form action='update.php' method='post'>
				<div class='frow'><label for='ftitle'>日志标题：</label><input type='text' id='ftitle' name='ftilte' placeholder='请输入标题'></div>
				<div class='frow'><label for='fdate'>日志日期：</label><input type='text' id='fdate' name='fdate' placeholder='请输入时间'></div>
				<div class='ftext'><label for='fcontent'>日志内容：</label><br><textarea  id='fcontent' name='fcontent' placeholder='请输入内容' ></textarea></div>
				<div class='fsub'><input type='submit' name='fsub' value='提交'></div>
				</form></div>";
				echo $form;
			}else{
				echo "你没有权限写日志！";
			}
		}else if($_GET['name']=='更新日志'){
			$con="<div class='msgTilte'><h1>更新日志</h1></div>";
			echo $con;	
			$form="";	
			include "config.php";
			$sql="select * from note where nid='$_GET[id]'";
			$result=mysql_query($sql);
			$rnote=mysql_fetch_array($result);
			$form.="<div class='msg'><form action='update.php?id=$_GET[id]' method='post'>
				<div class='frow'><label for='ftitle'>日志标题：</label><input type='text' id='ftitle' name='ftilte' value='$rnote[ntitle]'></div>
				<div class='frow'><label for='fdate'>日志日期：</label><input type='text' id='fdate' name='fdate' value='$rnote[ndate]'></div>
				<div class='ftext'><label for='fcontent'>日志内容：</label><br><textarea  id='fcontent' name='fcontent' >$rnote[ncontent]</textarea></div>
				<div class='fsub'><input type='submit' name='fsub' value='更新'></div>
				</form></div>";
			echo $form;
			mysql_close($conn);
		}else if($_GET['name']=='评论日志'){
			$con="<div class='msgTilte'><h1>评论日志</h1></div>";
			echo $con;	
			$form="";
			$form.="<div class='msg'><form action='comment.php?id=$_GET[id]' method='post'>				
				<div class='ftext'><label for='fcomment'>评论内容：</label><br><textarea  id='fcomment' name='fcomment' >$rnote[ncontent]</textarea></div>
				<div class='fsub'><input type='submit' name='fsub' value='发表评论'></div>
				</form></div>";
			echo $form;
			
		}else if($_GET['name']=='查看评论'){
			$con="<div class='msgTilte'><h1>查看评论</h1></div>";
			echo $con;				
			include "config.php";
			$sql="select * from comment where nid='$_GET[id]'";
			$result=mysql_query($sql);
			$list="";
		echo"<div class='msgg'><ul class='cList'>"	;
	while($rcom=mysql_fetch_array($result)){
		$list.="<li><p>$rcom[cname]:<br>&emsp;&emsp;$rcom[ccomment]</p></li>";
	}
	echo $list;
	echo"</ul></div>";
		
			
			mysql_close($conn);
		}else{
			include "config.php";
			$sql="select * from note where nid='$_GET[id]'";
			$result=mysql_query($sql);
			$rcontent=mysql_fetch_array($result);
			$count=mysql_num_rows($result);
			if($count==0){
				echo "没有内容哦";
				if($_SESSION['name']=='admin'){
					echo"<div class='fupdate'><input type='submit' name='fsub' value='提交'></div>";
				}
			}else{
				$content="<div class='msgTilte'><h1>".$rcontent['ntitle']."</h1><p>日期：".$rcontent['ndate']."&emsp;作者：".$rcontent['nnname']."</p></div>";
				$content.="<div class='msgg'><p>".$rcontent['ncontent']."</p></div>";
				echo $content;
				if($_SESSION['name']=='admin'){
					echo"<div class='fupdate'><span><a href='note.php?name=更新日志&&id=$_GET[id]'>更新日志</a></span>
					<span><a href='delete.php?id=$_GET[id]'>删除日志</a></span>
					<span><a href='note.php?name=查看评论&&id=$_GET[id]'>查看评论</a></span></div>";
				}else{
					echo"<div class='fupdate'><span><a href='note.php?name=评论日志&&id=$_GET[id]'>评论日志</a></span>
					<span><a href='note.php?name=查看评论&&id=$_GET[id]'>查看评论</a></span></div>";
				}
				
			}
			mysql_close($conn);
		}
	?>							
			
		</div>
	</div>
</div>
