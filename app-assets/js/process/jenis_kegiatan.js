$('#judul-halaman').text('Tabel Jenis Kegiatan');

$(document).ready(function(){
  var t_jenis_kegiatan = $('#tabel-jenis-kegiatan').DataTable({
      ajax:{
          url: base_url() + "data/jenis_kegiatan/nya",
          type:"POST",
          dataSrc: ""
      },
      columns:[
      {data:"id_jenis_kegiatan"},
      {data:"id_jenis_kegiatan"},
      {data:"jenis_kegiatan"},
      {data:"id_jenis_kegiatan",
       render: function(data,type,row){
         var actions = '<button type="button" id="edit" data-id="'+data+'" class="btn btn-icon rounded-circle btn-outline-warning mr-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Ubah"><i class="feather icon-edit"></i></button>';
         actions = actions.concat('<button type="button" id="delete" data-id="'+data+'" class="btn btn-icon rounded-circle btn-outline-danger mr-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Hapus"><i class="feather icon-trash"></i></button>');
         return actions;
       }},
    ],
    fnDrawCallback: function (oSettings) {
      $('#tabel-jenis-kegiatan tbody tr button').each(function () {
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

  t_jenis_kegiatan.on( 'order.dt search.dt', function () {
    t_jenis_kegiatan.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
    });
  }).draw();

  t_jenis_kegiatan.on('click', 'button#edit', function() {
    $('#tipe').val('edit');
    $('#label-modal').html('Ubah Jenis Kegiatan');
    var data = $(this).attr('data-id');
    $.ajax({
      url: base_url() + "data/jenis_kegiatan/cari/" + data,
      type: "POST",
      success: function(data){
        data = JSON.parse(data);
        $('#kode-awal').val(data.id_jenis_kegiatan);
        $('#kode-jenis-kegiatan').val(data.id_jenis_kegiatan);
        $('#jenis-kegiatan').val(data.jenis_kegiatan);

        $('#btn-cancel').removeAttr('hidden');
        $('#btn-reset').attr('hidden',true);
        $('#btn-submit').html('Update');

        $('#add-jenis-kegiatan').click();
      }
    })
  })

  t_jenis_kegiatan.on('click', 'button#delete', function() {
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
          url: base_url() + "data/jenis_kegiatan/delete/" + data,
          type: "POST",
          success: function(data) {
            Swal.fire(
              {
                type: "success",
                title: 'Terhapus!',
                text: 'Data jenis kegiatan telah dihapus.',
                confirmButtonClass: 'btn btn-primary',
              }
            );
            t_jenis_kegiatan.ajax.reload();
          }
        })
      }
    })
  })
  //
  $('#form-submit').submit(function(e){
    e.preventDefault();
    var datanya = $(this).serialize();
    var tipe = $('#tipe').val();
    // console.log(datanya);
    $('#btn-submit').attr('disabled',true);
    if (tipe == "save") {
      var kata1 = "ditambahkan";
      $('#btn-submit').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Saving...');
    } else {
      var kata1 = "diubah";
      $('#btn-submit').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Updating...');
    }
    var urlAjax = base_url() + "data/jenis_kegiatan/" + tipe;
    // console.log(urlAjax);
    $.ajax({
      url: urlAjax,
      data: datanya,
      type: "POST",
      success: function(data) {
        $('#btn-submit').removeAttr('disabled');
        data = JSON.parse(data);
        console.log(data);
        if (data == "exist") {
          $('#btn-submit').html('Simpan');
          Swal.fire({
            title: "Error!",
            text: "Data sudah ada!",
            type: "error",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
          });
        } else if (data == "true") {
          $('#backdrop').modal('hide');
          Swal.fire({
            title: "Berhasil!",
            text: "Data jenis kegiatan berhasil "+kata1+".",
            type: "success",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
          });
          t_jenis_kegiatan.ajax.reload();
        }
      }
    })
  })

  $('#backdrop').on('hidden.bs.modal', function() {
    $('#label-modal').html('Jenis Kegiatan Baru');
  });

})
