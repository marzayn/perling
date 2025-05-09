<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tanggapan</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.5;
        }

        .kop-surat {
            text-align: center;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .kop-surat img {
            width: 100%;
        }

        .surat-details {
            width: 100%;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
        }

        .details-table td {
            padding: 5px 0;
        }

        .details-table .label {
            width: 120px;
        }

        .details-table .colon {
            width: 20px;
            text-align: center;
        }

        .content-surat {
            margin-top: 20px;
            text-align: justify;
        }

        .ttd-section {
            margin-top: 30px;
            text-align: right;
            width: 40%;
            float: right;
        }

        .ttd-section p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="surat-details">
        <table class="details-table">
            <tr>
                <td class="label">Nomor</td>
                <td class="colon">:</td>
                <td class="value">Test</td>
            </tr>
            <tr>
                <td class="label">Sifat</td>
                <td class="colon">:</td>
                <td class="value">test</td>
            </tr>
            <tr>
                <td class="label">Lampiran</td>
                <td class="colon">:</td>
                <td class="value">test</td>
            </tr>
            <tr>
                <td class="label">Hal</td>
                <td class="colon">:</td>
                <td class="value">test</td>
            </tr>
            <tr>
                <td class="label">Tanggal</td>
                <td class="colon">:</td>
                <td class="value">test</td>
            </tr>
            <tr>
                <td class="label">Kepada</td>
                <td class="colon">:</td>
                <td class="value">test</td>
            </tr>
        </table>

        <!-- Isi Surat -->
        <div class="content-surat">
            <p>test</p>
        </div>

        <!-- Tanda Tangan -->
        <div class="ttd-section">
            <p>Jakarta, test</p>
            <p>Kepala Dinas Lingkungan Hidup</p>
            <br><br><br>
            <p><u>Nama Pejabat</u></p>
            <p>NIP. 19700101 199001 1 001</p>
        </div>
    </div>
</body>
</html>
