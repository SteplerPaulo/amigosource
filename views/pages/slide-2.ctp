<div id="a-Links" class="row" style="padding-top:30px">
	<div class="col-md-10 col-md-offset-1">
		<span class="dropdown">
			<a data-toggle="dropdown">Category</a>
			<ul class="dropdown-menu">
				<li><a>Electronics</a></li>
				<li><a>Apparel, Textiles & Accesories</a></li>
				<li><a>Health & Beauty</a></li>
				<li><a>Jewelry, Bags & Shoes</a></li>
				<li><a>Auto & Transportation</a></li>
			</ul>
		</span>
		<a>Location</a>
	</div>
</div>
<?php for($i=0;$i<5;$i++):?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<hr/>
	</div>
</div>
<div class="row" style="padding-bottom: 1%;">
	<!--First Column-->
	<div class="col-md-2 item-1st-col col-md-offset-1 ">
		<center class="imgAbt">
			<img width="150" height="150" src="img/100x100.gif" />
		</center>
	</div>
	<!--Second Column-->
	<div class="col-md-5 item-2nd-col">
		<div class="row">
			<div class="col-md-12">
				<a><h4>China wholesale lcd display for iphone 5 lcd front assembly</h4></a>
				<p><value><b>5 Pieces</b></value> (Min. Order)</p>	
				<p>
					Place of Origin: <value>CN;GUA</value>;
					Brand Name: <value>Timeway company OEM</value>;
					Screen 3: <value>>3"</value>;
					Model Number: <value>for iphone 5</value>;
					Compatible Brand: <value> for apple iphone 5 lcd</value>
				</p>
			</div>
		</div>
		<div class="row item-sponsored-listing">
			<i class="col-md-12">
				< Sponsored Listing
			</i>
		</div>
	</div>
	<!--Third Column-->
	<div class="col-md-3 item-3rd-col">
		<div class="row item-actions">
			<span class="col-md-5 col-xs-6">
				<a><span class="glyphicon glyphicon-star"></span> Favorites</a> 
			</span>
			<span class="col-md-5 col-xs-6">
				<a><span class="glyphicon glyphicon-plus"></span> Compare</a> 
			</span>
		</div>
		<div class="row item-company">
			<span class="col-md-2 col-xs-2">
				<span class="glyphicon glyphicon-certificate"></span>
			</span>
			<span class="col-md-10 col-xs-10">
				<span>Shenzhen Timeway Global...</span>
				<a data-toggle="collapse" data-target="#item-<?php echo $i;?>-company" aria-expanded="true" >
					<i class="fa fa-caret-right"></i>
				</a>
				<span id="item-<?php echo $i;?>-company" class="collapse">Technology Inc.</span>
			</span>
		</div>
		<div class="row item-contact-address">
			<div class="col-md-12">
				<span>China (Mainland) | </span>
				<a data-toggle="popover" data-placement="top" data-html="true" title="Contact Details" data-content="<div>Phone No:<b>0912-888-9999</b></div><div>Email:<b><a>amigosource@tssi.com</a></b> </div>">
					Contact Details
				</a>
			</div>
		</div>
		<div class="row item-response-rate">
			<div class="col-md-12 col-xs-12">
				<span class="glyphicon glyphicon-share-alt" style="color:#989898"></span> &nbsp;&nbsp; <value><b>75.6%</b></value> Response Rate
			</div>
		</div>
		<div class="row item-contact-chat">
			<div class="col-md-12 col-xs-12">
				<a>Contact Supplier</a> | <a> Chat Now</a>
			</div>
		</div>
	</div>
</div>
<?php endfor; ?>
<?php echo $this->Html->script(array('biz/amigosource'),array('inline'=>false));?>