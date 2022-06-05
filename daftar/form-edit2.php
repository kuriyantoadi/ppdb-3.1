<h4>A. DATA ASAL SEKOLAH CALON PESERTA DIDIK</h4>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Nama Asal Sekolah :</label>
  <div class="col-sm-6">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">
    <input type="text" class="form-control" placeholder="Nama Asal Sekolah" name="asal_sekolah" value="<?= $d['asal_sekolah'] ?>" id="asal_sekolah" required>
  </div>
</div>

<br>
<h4>B. IDENTITAS CALON PESERTA DIDIK</h4>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">NISN :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="NISN" name="nisn" value="<?= $d['nisn'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Nama Calon Peserta Didik :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" value="<?= $d['nama_siswa'] ?>" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
  <div class="col-sm-3">
    <select name="jenis_kelamin" class="form-control" required>
      <option value="<?= $d['jenis_kelamin'] ?>">Pilihan Awal | <?= $d['jenis_kelamin'] ?></option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Tempat Lahir :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= $d['tempat_lahir'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Tanggal Lahir :</label>
  <div class="col-sm-3">
    <input type="text" name="tgl_lahir" class="form-control datepicker" value="<?= $d['tgl_lahir'] ?>" required/>
  </div>
  (Tanggal/Bulan/Tahun)
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Tahun lulus :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="Tahun lulus" value="<?= $d['tahun_lulus'] ?>" name="tahun_lulus" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Nomor WhatsApp :</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" name="no_hp" value="<?= $d['no_hp'] ?>" placeholder="Nomor WhatsApp"  required>
  </div>
</div>


<br>
<h4>C. KEPENDUDUKAN CALON PESERTA DIDIK</h4>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">NIK :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="NIK siswa dari KK" value="<?= $d['nik'] ?>" name="nik" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Nomor Kartu keluarga (KK) :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="Nomor KK" name="no_kk" value="<?= $d['no_kk'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Tanggal Diterbitkan KK :</label>
  <div class="col-sm-3">
    <input type="text" name="tgl_kk" class="form-control datepicker" value="<?= $d['tgl_kk'] ?>" required/>
  </div>
  (Bulan/Tanggal/Tahun)
</div>

<br>
<h4>D. DATA ALAMAT TEMPAT TINGGAL SESUAI KK CALON PESERTA DIDIK</h4>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Kabupaten/Kota :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kota" value="<?= $d['kota'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Kecamatan :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?= $d['kecamatan'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Kelurahan/Desa :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Kelurahan/Desa" value="<?= $d['kelurahan'] ?>" name="kelurahan" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Kode POS :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="Kode POS" name="kode_pos" value="<?= $d['kode_pos'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Alamat :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $d['alamat'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">RT :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="RT" name="rt" value="<?= $d['rt'] ?>" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">RW :</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" placeholder="RW" name="rw" value="<?= $d['rw'] ?>" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Jarak Alamat Siswa ke Sekolah :</label><b>Meter</b>
  <div class="col-sm-4">
    <input type="number" class="form-control" placeholder="Jarak Rumah ke Sekolah" name="jarak_kesekolah" value="<?= $d['jarak_kesekolah'] ?>" required>
  </div>
</div>

<br>
<h4>D. DATA ORANG TUA/WALI CALON PESERTA DIDIK</h4>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Nama Orang Tua/Wali :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Nama Orang Tua" value="<?= $d['nama_org_tua'] ?>" name="nama_org_tua" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Nomor Hp Orang Tua/Wali :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" value="<?= $d['no_hp_org_tua'] ?>" name="no_hp_org_tua" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Pekerjaan Orang Tua/Wali :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="Pekerjaan Orang Tua" value="<?= $d['pekerjaan_org_tua'] ?>" name="pekerjaan_org_tua" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">PKH/KKS/KIP/Jamsosda<br>(Diisi jika memiliki) :</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="PKH/KKS/KIP/Jamsosda" value="<?= $d['kip'] ?>" name="kip" >
  </div>
</div>

<br>

<h4>F. INPUT SCAN BERKAS CALON PESERTA DIDIK</h4>
<div class="form-group">
  <label class="control-label col-sm-2">SKHUN atau Surat Keterangan Lulus</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_skhun" accept="application/pdf" class="form-control-file"  required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Surat Sehat dari Dokter Pemerintah</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_surat_dokter" accept="application/pdf" class="form-control-file" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Kartu Keluarga (KK) </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_kk" accept="application/pdf" class="form-control-file" id="cek_kk" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Akta Kelahiran </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_akta" accept="application/pdf" class="form-control-file" id="cek_akta" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Photo Berseragam Sekolah Background Merah</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_photo" accept="application/pdf" class="form-control-file" id="cek_photo" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Swafoto memegang KK Sedang diukur tinggi badan </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_swa_kk" accept="application/pdf" class="form-control-file" id="cek_swa_kk" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2">Rapor Semester 2 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor2" accept="application/pdf" class="form-control-file"  required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rapor Semester 3 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor3" accept="application/pdf" class="form-control-file"  required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rapor Semester 4 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor4" accept="application/pdf" class="form-control-file"  required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rapor Semester 5 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor5" accept="application/pdf" class="form-control-file"  required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rapor Semester 6</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor6" accept="application/pdf" class="form-control-file"  required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">PKH/KKS/KIP/Jamsosda </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_kip" accept="application/pdf" class="form-control-file" id="cek_akta">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Piagam 1 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_piagam1" accept="application/pdf" class="form-control-file" >
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Piagam 2</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_piagam2" accept="application/pdf" class="form-control-file" id="cek_piagam2">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Piagam 3 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_piagam3" accept="application/pdf" class="form-control-file" id="cek_piagam3">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<h6><b>Informasi :</h6>
<h6>1. File harus dengan format <b>.pdf</b> dengan ukuran maksimal <b>500 kb</b></h6>
<h6>2. Dokumen yang di <b>Scan Harus Asli (bukan Photo Copy)</b></h6>
<h6>3. Piagam dan PKH/KKS/KIP/Jamsosda boleh dikosongkan</h6>
<h6>4. Piagam hasil perlombaan dan/atau penghargaan di bidang akademik maupun non akademik</h6>
<h6>5. Piagam boleh di isi bukti hafiz alquran atau bukti hafal kitab sesuai agama yang dianut</h6>
<h6>6. Contoh swa photo dapat dilihat di link berikut(belum di kerjakan)</h6>
<h6>7. Surat sehat harus ditandatangani oleh dokter pemerintah.</h6>
<h6>8. Proses daftar tergatung jaringan internet, karena file yang diupload cukup banyak</h6>

<br>
<h4>G. INPUT NILAI RATA-RATA RAPOR SMP/MTS/Sederajat</h4>
<div class="form-group">
  <label class="control-label col-sm-2">Rata-rata Rapor Semester 2</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 2" name="rapor_2" value="<?= $d['rapor_2'] ?>" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rata-rata Rapor Semester 3</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 3" name="rapor_3" value="<?= $d['rapor_3'] ?>" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rata-rata Rapor Semester 4</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 4" name="rapor_4" value="<?= $d['rapor_4'] ?>" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rata-rata Rapor Semester 5</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 5" name="rapor_5" value="<?= $d['rapor_5'] ?>"  required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Rata-rata Rapor Semester 6</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 6" name="rapor_6" value="<?= $d['rapor_6'] ?>"  required>
  </div>
</div>
<br>

<h4>H. KONDISI FISIK DAN KEBIASAAN</h4>
<div class="form-group">
  <label class="control-label col-sm-2">Apakah anda bertindik (bagi laki-laki) </label>
  <div class="col-sm-3">
    <select name="bertindik" class="form-control" required>
      <option value="<?= $d['bertindik'] ?>">Pilihan Awal | <?= $d['bertindik'] ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
      <option value="Perempuan">Saya Perempuan</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Apakah anda Perokok </label>
  <div class="col-sm-3">
    <select name="perokok" class="form-control"  required>
      <option value="<?= $d['perokok'] ?>">Pilihan Awal | <?= $d['perokok'] ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Apakah anda pemakai Psikotropika<br>(Narkoba, Ganja dan sejenisnya) </label>
  <div class="col-sm-3">
    <select name="psikotropika" class="form-control" required>
      <option value="<?= $d['psikotropika'] ?>">Pilihan Awal | <?= $d['psikotropika'] ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Apakah anda bertato </label>
  <div class="col-sm-3">
    <select name="bertato" class="form-control" required>
      <option value="<?= $d['bertato'] ?>">Pilihan Awal | <?= $d['bertato'] ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Apakah anda peminum-minuman keras </label>
  <div class="col-sm-3">
    <select name="peminum" class="form-control" required>
      <option value="<?= $d['peminum'] ?>">Pilihan Awal | <?= $d['peminum'] ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">Apakah anda Buta Warna </label>
  <div class="col-sm-3">
    <select name="buta_warna" class="form-control" required>
      <option value="<?= $d['buta_warna'] ?>">Pilihan Awal | <?= $d['buta_warna'] ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
</div>
<br>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
  </div>
</div>
</form>
