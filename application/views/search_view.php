
<style type="text/css">
.search{
	max-width:960px;
	margin:250px auto; 
	text-align:center;
}
.centre{
	margin:10px auto; 
}
.search ul li{
	display:inline-block;
	margin:auto;
	width:30%;
	text-align:center;
}
.search ul li input[type="text"]{
	width:95%;
	border:1px solid #ccc;
	height:3em;
	border-radius:5px;
	box-shadow: 2px 3px 5px #999;
	margin: 5px;

}
.search ul li input[type="submit"]{
	width:95%;
	border:1px solid #ccc;
	height:3em;
	border-radius:5px;
	box-shadow: 2px 3px 5px #999;
	margin: 20px;

}
.search ul li label{
	font-size:12px;
	color:#999;
	text-align:center;

}

</style>

<div class="search">
   <?php echo Form_open("search/find")?>
<ul>
<li>
 <label>Enter Sender Name</label><br/>
  <input type="text" name="findname" />
</li>
<li>
 <label>Enter reference number</label><br/>
 <input type="text" name="findref"/><br/>
</li>
</ul>
<ul class="centre">
<li>

 <input type="submit" name="find" value="Find record" />
</li>
</ul>
</form>
</div>
