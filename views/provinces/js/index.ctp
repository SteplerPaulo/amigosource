AmigoApp.provider('ProvinceProvider',function(){
	var provinces = <?php echo json_encode($provinces); ?>;
    return {
      $get: function () {
        return provinces;
      }
    };
});