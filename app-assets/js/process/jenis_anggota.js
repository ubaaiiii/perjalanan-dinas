$('#judul-halaman').text('Tabel Jenis Anggota');

$(document).ready(function(){
  var t_jenis_anggota = $('#tabel-jenis-anggota').DataTable({
      ajax:{
          url: base_url() + "data/jenis_anggota/nya",
          type:"POST",
          dataSrc: ""
      },
      columns:[
      {data:"id_jenis_anggota"},
      {data:"id_jenis_anggota"},
      {data:"jenis_anggota"},
      {data:"id_jenis_anggota",
       render: function(data,type,row){
         var actions = '<button type="button" id="edit" data-id="'+data+'" class="btn btn-icon rounded-circle btn-outline-warning mr-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Ubah"><i class="feather icon-edit"></i></button>';
         actions = actions.concat('<button type="button" id="delete" data-id="'+data+'" class="btn btn-icon rounded-circle btn-outline-danger mr-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Hapus"><i class="feather icon-trash"></i></button>');
         return actions;
       }},
    ],
    fnDrawCallback: function (oSettings) {
      $('#tabel-jenis-anggota tbody tr button').each(function () {
        $(this).tooltip({
            html: true
        });
      })
    },
    columnDefs: [ {
      "searchable": false,
      "orderable": false,
      "targets": [0,3]
    } ],
    order: [ 1, 'asc' ],
  });

  t_jenis_anggota.on( 'order.dt search.dt', function () {
    t_jenis_anggota.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
    });
  }).draw();

  t_jenis_anggota.on('click', 'button#edit', function() {
    // console.log($(this).attr('data-id'));
    $('#tipe').val('edit');
    var data = $(this).attr('data-id');
    $.ajax({
      url: base_url() + "data/jenis_anggota/cari/" + data,
      type: "POST",
      success: function(data){
        data = JSON.parse(data);
        $('#kode-awal').val(data.id_jenis_anggota);
        $('#kode-jenis-anggota').val(data.id_jenis_anggota);
        $('#jenis-anggota').val(data.jenis_anggota);

        $('#btn-cancel').removeAttr('hidden');
        $('#btn-reset').attr('hidden',true);
        $('#btn-submit').html('Update');

        $('#add-jenis-anggota').click();
      }
    })
  })

  t_jenis_anggota.on('click', 'button#delete', function() {
    var data = $(this).attr('data-id');
    Swal.fire({
      title: 'Apa Anda yakin?',
      text: "Menghapus berarti tidak akan dapat mengembalikannya!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Tidak!',
      confirmButtonClass: 'btn btn-primary',
      cancelButtonClass: 'btn btn-danger ml-1',
      buttonsStyling: false,
    }).then(function (result) {
      if (result.value) {
        $.ajax({
          url: base_url() + "data/jenis_anggota/hapus/" + data,
          type: "POST",
          success: function(data) {
            Swal.fire(
              {
                type: "success",
                title: 'Terhapus!',
                text: 'Data jenis anggota telah dihapus.',
                confirmButtonClass: 'btn btn-primary',
              }
            );
            t_jenis_anggota.ajax.reload();
          }
        })
      }
    })
  })

  $('#form-submit').submit(function(e){
    e.preventDefault();
    var datanya = $(this).serialize();
    var tipe = $('#tipe').val();
    console.log(datanya);
    $('#btn-submit').attr('disabled',true);
    if (tipe == "save") {
      var kata1 = "ditambahkan";
      $('#btn-submit').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Saving...');
    } else {
      var kata1 = "diubah";
      $('#btn-submit').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Updating...');
    }
    var urlAjax = base_url() + "data/jenis_anggota/" + tipe;
    console.log(urlAjax);
    $.ajax({
      url: base_url() + "data/jenis_anggota/" + tipe,
      data: datanya,
      type: "POST",
      success: function(data) {
        $('#btn-submit').removeAttr('disabled');
        if (data == "exist") {
          $('#btn-submit').html('Simpan');
          Swal.fire({
            title: "Error!",
            text: "Data sudah ada!",
            type: "error",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
          });
        } else {
          $('#backdrop').modal('hide');
          Swal.fire({
            title: "Berhasil!",
            text: "Data jenis anggota berhasil "+kata1+".",
            type: "success",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
          });
          t_jenis_anggota.ajax.reload();
        }
        console.log(data);
      }
    })
  })

})
