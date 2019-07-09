//tombol-delete
$('.tombol-hapus').on('click', function(e) {
  e.preventDefault()
  const href  = $(this).attr('href');

  Swal.fire({
    title: 'Apakah kamu yakin?',
    text: "Kamu tidak akan bisa mengembalikannya!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus produk!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
});

$('#seemore').on('click', function(){
				if ($(this).text() == 'See more...') {
					$(this).text('See less...');
				}else{
					$(this).text('See more...');
				}
			});


$('.add_cart').click(function(){
	var gambar = $(this).data("gambar");
	var id = $(this).data("id");
	var nama_barang  = $(this).data("nama_barang");
	var harga = $(this).data("harga");
	var quantity     = $('#' + id).val();
	$.ajax({
		url : "<?php echo base_url();?>cart/add_to_cart",
		method : "POST",
		data : {gambar: gambar, id: id, nama_barang: nama_barang, harga: harga, quantity: quantity},
		success: function(data){
			$('#detail_cart').html(data);
		}
	});
});

// Load shopping cart
$('#detail_cart').load("<?php echo base_url();?>cart/load_cart");

//Hapus Item Cart
$(document).on('click','.hapus_cart',function(){
	var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
	$.ajax({
		url : "<?php echo base_url();?>cart/hapus_cart",
		method : "POST",
		data : {row_id : row_id},
		success :function(data){
			$('#detail_cart').html(data);
		}
	});
});