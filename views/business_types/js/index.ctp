AmigoApp.provider('BusinessTypeProvider',function(){
	var businessTypes = <?php echo json_encode($businessTypes); ?>;
    return {
      $get: function () {
        return businessTypes;
      }
    };
});