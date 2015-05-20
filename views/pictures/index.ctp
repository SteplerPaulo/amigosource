<div class="pictures index">
	<h2><?php __('Pictures');?></h2>
		<input id="input-ru" type="file" name="pictures[]" multiple=true class="file-loading">
</div>
<script type="text/javascript">
//Review http://plugins.krajee.com/file-input#ajax-uploads

$("#input-ru").fileinput({
	uploadAsync :false,
	showPreview: false,
	showUpload: false,
	uploadUrl: "http://localhost/amigosource/pictures/add",
	allowedFileExtensions: ["jpg", "png", "gif"],
}).on('filebatchuploadsuccess',function(event, data, previewId, index){
	 var form = data.form, files = data.files, extra = data.extra, 
        response = data.response, reader = data.reader;
	console.log(files,response);
});
</script>
