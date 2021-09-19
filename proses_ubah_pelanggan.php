<?php
    if($_POST){

        $id_pelanggan=$_POST['id_pelanggan'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];


        if(empty($nama)){
            echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        } elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }elseif(empty($telp)){
            echo "<script>alert('telp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        } else {
            include "koneksi_toko.php";
                $update=mysqli_query($conn,"UPDATE `pelanggan` SET `nama`=
                '".$nama."',`alamat`='".$alamat."',`telp`='".$telp."' WHERE `id_pelanggan`=
                '".$id_pelanggan."'") or die(mysqli_error($conn));

                if($update){
                    echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
                } else {
                    echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                }
            }
        }
    ?>