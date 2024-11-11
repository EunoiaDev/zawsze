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
        Baris += '<select class="form-control" name="kode_akun[]" id="kode_akun' + Nomor + '" required>';
        Baris += '</td>';
        Baris += '<td class="nama-akun">'; // Cell untuk nama akun yang akan diisi otomatis
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
    
        // Event listener untuk update nama akun saat kode akun dipilih
        $('#kode_akun' + Nomor).change(function() {
            var selectedOption = $(this).find('option:selected');
            var namaAkun = selectedOption.data('nama-akun');
            $(this).closest('tr').find('.nama-akun').text(namaAkun);
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
            $(this).find('select[id^="kode_akun"]').attr('id', 'kode_akun' + Nomor);
            Nomor++;
        });
    });
    
    function FormSelectAkun(Nomor) {
        var output = [];
        output.push('<option value="">Pilih Kode Akun</option>');
        // ambil datanya disini
        $.getJSON('/transaksi/akun', function(data) {
            $.each(data, function(key, value) {
                output.push('<option value="' + value.kode_akun + '" data-nama-akun="' + value.nama_akun + '">' + 
                           value.kode_akun + '</option>');
            });
            $('#kode_akun' + Nomor).html(output.join(''));
        });
    }    