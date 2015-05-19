<input id="input-707" name="kartik-input-707[]" type="file" multiple=true class="file-loading">
<script>
$("#input-707").fileinput({
    uploadUrl: "' . $url1 . '",
    uploadAsync: false,
    minFileCount: 2,
    maxFileCount: 5,
    overwriteInitial: false,
    initialPreview: [
        "<img src=\'http://placeimg.com/200/150/nature/1\'>",
        "<img src=\'http://placeimg.com/200/150/nature/2\'>",
        "<img src=\'http://placeimg.com/200/150/nature/3\'>",
    ],
    initialPreviewConfig: [
        {caption: "Food-1.jpg", width: "120px", url: "$url", key: 1},
        {caption: "Food-2.jpg", width: "120px", url: "$url", key: 2}, 
        {caption: "Food-3.jpg", width: "120px", url: "$url", key: 3}, 
    ],
    uploadExtraData: {
        img_key: "1000",
        img_keywords: "happy, nature",
    }
});
$("#input-707").on("filepredelete", function(jqXHR) {
    var abort = true;
    if (confirm("Are you sure you want to delete this image?")) {
        abort = false;
    }
    return abort;
});
</script>