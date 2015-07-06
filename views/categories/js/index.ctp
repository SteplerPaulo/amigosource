AmigoApp.provider('CategoryProvider',function(){
	var categories = <?php echo json_encode($categories); ?>;
    return {
      $get: function () {
        return categories;
      }
    };
});