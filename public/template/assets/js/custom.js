/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

function  hapus(id){
    $('#del-'+id).submit();
}

// menu dinamis
var path = location.pathname.split('/')
var url = location.origin + '/' + path[1] 
$('ul.sidebar-menu li a').each(function(){
    if($(this).attr('href').indexOf(url) !== -1){
        $(this).parent().addClass('active').parent().parent('li').addClass('active')
    }
});

// pagination
$(document).ready(function(){
    $('#myTable').DataTable();
});


    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    
    function Barisbaru() {
        var Nomor = $("#tableLoop tbody tr").length + 1;
        var Baris = '<tr>';
        Baris += '<td class="text-center">' + Nomor + '</td>';
        Baris += '<td>';
        Baris += '<select class="form-control" name="nama_akun[]" id="nama_akun' + Nomor + '" required>';
        Baris += '</select>';
        Baris += '</td>';
        Baris += '<td class="kode-akun">'; // Cell untuk kode akun yang akan diisi otomatis
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="number" name="debit[]" class="form-control debit" placeholder="Debit..." required>';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="number" name="kredit[]" class="form-control kredit" placeholder="Kredit..." required>';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="keterangan[]" class="form-control" placeholder="Keterangan...">';
        Baris += '</td>';
        Baris += '<td class="text-center">';
        Baris += '<a class="btn btn-sm btn-warning" title="Hapus Baris" id="HapusBaris"><i class="fas fa-times"></i></a>';
        Baris += '</td>';
        Baris += '</tr>';
    
        $("#tableLoop tbody").append(Baris);
        $("#tableLoop tbody tr").each(function() {
            $(this).find('td:nth-child(2) select').focus();
        });
    
        FormSelectAkun(Nomor);
    
        // Event listener untuk update kode akun saat nama akun dipilih
        $('#nama_akun' + Nomor).change(function() {
            var selectedOption = $(this).find('option:selected');
            var kodeAkun = selectedOption.data('kode-akun');
            $(this).closest('tr').find('.kode-akun').text(kodeAkun);
        });
    }
    
    $(document).ready(function() {
        var A;
        for (A = 1; A <= 1; A++) {
            Barisbaru();
        }
    
        // Event untuk tombol Add Baris
        $('#Barisbaru').click(function(e) {
            e.preventDefault();
            Barisbaru();
        });
    
        $("#tableLoop tbody").find('select').filter(':visible:first').focus();
    });
    
    $(document).on('click', '#HapusBaris', function(e) {
        e.preventDefault();
        var Nomor = 1;
        $(this).closest('tr').remove();
        $('#tableLoop tbody tr').each(function() {
            $(this).find('td:first-child').html(Nomor);
            $(this).find('select[id^="nama_akun"]').attr('id', 'nama_akun' + Nomor);
            Nomor++;
        });
    });
    
    function FormSelectAkun(Nomor) {
        var output = [];
        output.push('<option value="">Pilih Nama Akun</option>');
        
        // Panggil data dari endpoint CodeIgniter
        $.getJSON('/transaksi/akunaktiva', function(data) {
            $.each(data, function(key, value) {
                output.push('<option value="' + value.nama_akun + '" data-kode-akun="' + value.kode_akun + '">' + 
                            value.nama_akun + '</option>');
            });
            $('#nama_akun' + Nomor).html(output.join(''));
        });
    }
    
       