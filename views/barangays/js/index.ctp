AmigoApp.provider('BarangayProvider',function(){
	var barangays = <?php echo json_encode($barangays); ?>;
    return {
      $get: function () {
        return barangays;
      }
    };
});