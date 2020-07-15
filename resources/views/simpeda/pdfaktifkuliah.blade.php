<div class="col-12" id="printArea" >
    <div class="card">
        <html>
        <body>
            <table align="center" cellpadding="5" style="width: 550px;">
                <tbody>
                    <tr>
                        <td colspan="2">
                            <div align="center">
                                <span style="font-family: Verdana; font-size: x-small; text-decoration: underline"><b>SURAT KETERANGAN AKTIF
                                        KULIAH</b></span>
                                <br><span style="font-family: Verdana; font-size: x-small; font-weight: bold;">Nomor: {{ $simpeda->nomor }}</span>
                                <hr />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" valign="top">
                            <div align="justify">
                                <span style="font-size: x-small;">Saya yang bertanda tangan dibawah ini :</span>
                                <table style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="120">
                                                <span style="font-size: x-small;">Jabatan</span>
                                            </td>
                                            <td>
                                                <span style="font-size: x-small;">:</span>
                                            </td>
                                                <td style="text-align: start;">
                                                    <span style="font-size: x-small;">{{ $ttd['jabatan'] }}</span>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Nama</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $ttd['nama'] }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">NRP</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $ttd['nrp'] }}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div align="justify">
                                <br>
                                <span style="font-size: x-small;">Menyatakan bahwa, mahasiswa yang tersebut di bawah ini:	</span>
                                <table border="0" style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="120"><span style="font-size: x-small;">Nama</span>
                                            </td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $user->nama_mhs }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Nim</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $user->nim_mhs }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Tempat/Tanggal Lahir</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $user->tempat_lahir }}/{{ $user->tanggal_lahir }}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div align="justify">
                                <br>
                                <span style="font-size: x-small;">Adalah mahasiswa aktif Politeknik Aceh pada : 	</span>
                                <table border="0" style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="120"><span style="font-size: x-small;">Program Studi</span>
                                            </td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $prodi->nama_prodi }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Tingkat / Semester</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $simpeda->semester }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Tahun Akademik</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $simpeda->tahun }}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div align="justify">
                                    <br>
                                    <span style="font-size: x-small;">Demikian Surat keterangan ini dibuat untuk
                                        keperluan {{ $simpeda->keperluan }}.</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="right">
                            <div align="center">
                                <span style="font-size: x-small;"> Banda Aceh, {{ $simpeda->created_at->toDateString() }}</span></div>

                            <div align="center">
                                <span style="font-size: x-small;"> Wakil Direktur Bidang Akademik,</span></div>

                            <div align="center">
                                <span style="font-size: x-small;"> Kemahasiswaan & Alumni,</span></div>
                            <br>

                            <br><br>
                            <div align="center">
                                <span style="font-size: x-small;"> ( {{ $ttd['nama'] }} )
                                </span></div>
                            <div align="center">
                                <span style="font-size: x-small;">{{ $ttd['nrp'] }}</span>
                            </div>

                            </div>
    
                    </td>
    
                </tr>
    
            </tbody>
    
        </table>
    
    </body>
    </html>
</div>
</div>

