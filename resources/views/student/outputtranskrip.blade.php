<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    
    @include('layouts.headcss')


    <style>
        table.try{
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 80%;
        }
        
        .try td, .try th {
          border: 0px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        .try tr:nth-child(even) {
          background-color: #dddddd;
        }

        .button-succes 
        {
            display: flex;
            align-items: center;
            font-family: inherit;
            font-weight: 500;
            font-size: 15px;
            padding: 0.7em 1.4em 0.7em 1.1em;
            color: white;
            /* background: #ad5389; */
            background: linear-gradient(0deg, rgba(20,167,62,1) 0%, rgba(102,247,113,1) 100%);
            border: none;
            box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
            letter-spacing: 0.05em;
            border-radius: 20em;
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;            
        }

        .button-succes:hover 
        {
            box-shadow: 0 0.5em 1.5em -0.5em #000c0498;
        }

        .button-succes:active 
        {
            box-shadow: 0 0.3em 1em -0.5em #000c0498;
        }

        .button-danger 
        {
            display: flex;
            align-items: center;
            font-family: inherit;
            font-weight: 500;
            font-size: 15px;
            padding: 0.7em 1.4em 0.7em 1.1em;
            color: white;
            /* background: #ad5389; */
            background: linear-gradient(0deg, rgb(163, 147, 5) 0%, rgb(238, 255, 4) 100%);
            border: none;
            box-shadow: 0 0.7em 1.5em -0.5em #a5a71498;
            letter-spacing: 0.05em;
            border-radius: 20em;
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;            
        }

        .button-danger:hover 
        {
            box-shadow: 0 0.5em 1.5em -0.5em #000c0498;
        }

        .button-danger:active 
        {
            box-shadow: 0 0.3em 1em -0.5em #000c0498;
        }

        .button-warning 
        {
            display: flex;
            align-items: center;
            font-family: inherit;
            font-weight: 500;
            font-size: 15px;
            padding: 0.7em 1.4em 0.7em 1.1em;
            color: white;
            /* background: #ad5389; */
            background: linear-gradient(0deg, rgb(163, 5, 5) 0%, rgb(255, 4, 4) 100%);
            border: none;
            box-shadow: 0 0.7em 1.5em -0.5em #a7141498;
            letter-spacing: 0.05em;
            border-radius: 20em;
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;            
        }

        .button-warning:hover 
        {
            box-shadow: 0 0.5em 1.5em -0.5em #000c0498;
        }

        .button-warning:active 
        {
            box-shadow: 0 0.3em 1em -0.5em #000c0498;
        }

        @media print {
  #printPageButton {
    display: none;
  }
}
        </style>

        


    <title>Document</title>
</head>
<body>


    <div class="card">
    <div class="card-body">
        <center><img src="https://logos-download.com/wp-content/uploads/2017/11/UiTM_Universiti_Teknologi_MARA_logo-700x295.png" alt="UiTM logo" width="250" height="90" ></center>
        <center><h4 class="card-header d-flex justify-content-between align-items-center"></h4></center>
        <center><h4><b> MINI TRANSKRIP KEMAHIRAN INSANIAH</b></h4></center>
        <center><h4 class="card-header d-flex justify-content-between align-items-center"></h4></center>
          <br>

          <table class="try" >
            
            <thead>
              <tr >
                <th><center> NAMA: {{$user->name}} </center></th>
                <th><center> NO. MATRIK: {{$user->username}} </center></th>
                <th><center> FAKULTI: {{$user->faculty}} </center></th>
                <th><center>&nbsp;</center></th>
                {{-- <th><center>&nbsp;</center></th> --}}
              </tr>
            </thead>
          </table>
          

          <table id="dtUniform" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th><center> AKTIVITI <br> &nbsp; <br> &nbsp; </center></th>
                <th><center> Markah <br> &nbsp; <br> &nbsp; </center></th>
                <th><center> ACARA <br> (KURSUS) <br> &nbsp; </center></th>
                <th><center> TAHAP PENYERTAAN <br> &nbsp; <br> &nbsp; </center></th>
                <th><center> NAMA PEGAWAI <br> YANG MENGESAHKAN <br> & TANDATANGAN </center></th>
              </tr>
            </thead>

            <tbody>             
                @if ($sukan->idsukandt === null)
                <tr>
                    <td>
                        <center><b>Sukan</b> <br> Markah = <b><u>0</u></b> X 60%</center>
                    </td> 
                    <td>
                        <center>0 MARKAH</center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                @else
                <tr>
                    <td>
                        <center><b>Sukan</b> <br> Markah = <b><u>{{$sukan->markah}}</u></b> X 60%</center>
                    </td> 
                    <td>
                        <center>{{$sukan->markah}} MARKAH</center>
                    </td>
                    <td>
                        <center>{{$sukan->jenissukan}}</center>
                    </td>
                    <td>
                        <center>{{$sukan->pencapaian}}</center>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                @endif
                @if ($kelab->idkelabdt === null)
                <tr>
                    <td>
                        <center><b>Persatuan/Kelab</b> <br> Markah = <b><u>0</u></b> X 60%</center>
                    </td> 
                    <td>
                        <center>0 MARKAH</center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                @else
                <tr>
                    <td>
                        <center><b>Persatuan/Kelab</b> <br> Markah = <b><u>{{$kelab->markah}}</u></b> X 60%</center>
                    </td>
                    <td>
                        <center>{{$kelab->markah}} MARKAH</center>
                    </td>
                    <td>
                        <center>{{$kelab->jeniskelab}}</center>
                    </td>
                    <td>
                        <center>{{$kelab->pencapaian}} <br> ({{$kelab->jawatan}}) </center>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                @endif 
                @if ($kebudayaan->idkebudayaandt === null)
                <tr>
                    <td>
                        <center><b>Kebudayaan/Kerohanian</b> <br> Markah = <b><u>0</u></b> X 60%</center>
                    </td> 
                    <td>
                        <center>0 MARKAH</center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                @else        
            <tr>
                <td>
                    <center><b>Kebudayaan/Kerohanian</b> <br> Markah = <b><u>{{$kebudayaan->markah}}</u></b> X 60%</center>
                </td>
                <td>
                    <center>{{$kebudayaan->markah}} MARKAH</center>
                </td>
                <td>
                    <center>{{$kebudayaan->jeniskebudayaan}}</center>
                </td>
                <td>
                    <center>{{$kebudayaan->pencapaian}}</center>
                </td>
                <td>
                    
                </td>
            </tr>
            @endif
            @if ($beruniform->idberuniform === null)
            <tr>
                <td>
                    <center><b>Beruniform</b> <br> Markah = <b><u>0</u></b> X 60%</center>
                </td> 
                <td>
                    <center>0 MARKAH</center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    
                </td>
            </tr>
            @else      
            <tr>
                <td>
                    <center><b>Beruniform</b> <br> Markah = <b><u>{{$beruniform->markah}}</u></b> X 60%</center>
                </td>
                <td>
                    <center>{{$beruniform->markah}} MARKAH</center>
                </td>
                <td>
                    <center>{{$beruniform->badanuniform}}</center>
                </td>
                <td>
                    <center>{{$beruniform->jawatanuniform}}</center>
                </td>
                <td>
                    
                </td>
            </tr>
            @endif
            @if ($sijil->idsijildt === null)
            <tr>
                <td>
                    <center><b>Anugerah/Sijil/Pingat</b> <br> Markah = <b><u>0</u></b> X 20%</center>
                </td> 
                <td>
                    <center>0 MARKAH</center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    
                </td>
            </tr>
            @else   
            <tr>
                <td>
                    <center><b>Anugerah/Sijil/Pingat</b> <br> Markah = <b><u>{{$sijil->markah}}</u></b> X 20%</center>
                </td>
                <td>
                    <center>{{$sijil->markah}} MARKAH</center>
                </td>
                <td>
                    <center>{{$sijil->sijil}}</center>
                </td>
                <td>
                    <center>{{$sijil->pencapaian}}</center>
                </td>
                <td>
                    
                </td>
            </tr>
            @endif
            @if ($penerbitan->idpenerbitandt === null)
            <tr>
                <td>
                    <center><b>Penerbitan/Majalah</b> <br> Markah = <b><u>0</u></b> X 20%</center>
                </td> 
                <td>
                    <center>0 MARKAH</center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    
                </td>
            </tr>
            @else   
            <tr>
                <td>
                    <center><b>Penerbitan/Majalah</b> <br> Markah = <b><u>{{$penerbitan->markah}}</u></b> X 20%</center>
                </td>
                <td>
                    <center>{{$penerbitan->markah}} MARKAH</center>
                </td>
                <td>
                    <center>{{$penerbitan->jenispenerbitan}}</center>
                </td>
                <td>
                    <center>{{$penerbitan->pencapaian}} <br> ({{$penerbitan->jawatan}}) </center>
                </td>
                <td>
                    
                </td>
            </tr>
            @endif
            @if ($padu->idpadudt === null)
            <tr>
                <td>
                    <center><b>PenProgram Khas HEP Modul LPPLP</b> <br> Markah = <b><u>0</u></b> X 20%</center>
                </td> 
                <td>
                    <center>0 MARKAH</center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    
                </td>
            </tr>
            @else 
            <tr>
                <td>
                    <center><b>Program Khas HEP Modul LPPLP</b> <br> Markah = <b><u>{{$padu->markah}}</u></b> X 20%</center>
                </td>
                <td>
                    <center>{{$padu->markah}} MARKAH</center>
                </td>
                <td>
                    <center>{{$padu->padu}}</center>
                </td>
                <td>
                    <center>{{$padu->hep}} </center>
                </td>
                <td>
                    
                </td>
            </tr>  
            @endif  
            @if ($programtertentu->idprogramtertentudt === null)
            <tr>
                <td>
                    <center><b>Projek Tertentu</b> <br> Markah = <b><u>0</u></b> X 60%</center>
                </td> 
                <td>
                    <center>0 MARKAH</center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    <center></center>
                </td>
                <td>
                    
                </td>
            </tr>
            @else 
            <tr>
                <td>
                    <center><b>Projek Tertentu</b> <br> Markah = <b><u>{{$programtertentu->markah}}</u></b> X 60%</center>
                </td>
                <td>
                    <center>{{$programtertentu->markah}} MARKAH</center>
                </td>
                <td>
                    <center>{{$programtertentu->programtertentu}}</center>
                </td>
                <td>
                    <center>{{$programtertentu->pencapaian}}</center>
                </td>
                <td>
                    
                </td>
            </tr>
            @endif
            {{-- jumlah --}}
            <tr>
                <td>
                    <center><b>JUMLAH (J)</center>
                </td>
                <td>
                    <center>{{$sum}}</center>
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
            </tr>
            {{-- jumlah --}}
            {{-- merit --}}
            <tr>
                <td>                    
                    <center><b>MERIT = JUMLAH = (J) <u> *TOTAL MARKAH* </u></b></center>
                    <center>MERIT DENGAN BONUS</center>
                    <center><b>BERUNIFROM = (J) + 10 *TOTAL MARKAH* / 100 </b></center>
                    <br><br>
                    <center><b>MERIT PELAJAR = {{$totaltwonum}}</b></center>

                </td>
                <td>
                    
                </td>
                <td colspan="3">
                    Pengakuan Pelajar : <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> Tarikh : <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> <br><br>
                    Pengesahan Mentor : <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> Tarikh : <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>  
 
                    <ul>
                        <u> SKALA MERIT : </u>
                        <li>0.00 - 1.99 TIDAK AKTIF</li>
                        <li>2.00 - 2.49 SEDERHANA</li>
                        <li>2.50 - 2.99 BAIK</li>
                        <li>3.00 - 3.49 CEMERLANG</li>
                        <li>3.50 - 4.00 AMAT CEMERLANG</li>
                    </ul>
                </td>

            </tr>
            {{-- merit --}}
            {{-- print --}}

            {{-- print --}}
          </tbody>

          </table>
          @if ( Auth::user()->role == '2')
          <td colspan="5" >
            <center><button id="printPageButton" class="button-succes" onclick="window.print()">Print this page</button></center>
            <center><button id="printPageButton" class="button-succes" style="margin-top:2%" onclick="history.back()">Back to previous page</button></a></center>
        </td>
          @else
          <td colspan="5" >
            <center><button id="printPageButton" class="button-succes" onclick="window.print()">Print this page</button></center>
            <center><button id="printPageButton" class="button-succes" style="margin-top:2%" onclick="history.back()">Back to previous page</button></a></center>
        </td>
          <td >
            <form action="/terimapermohonan/{{$user->tryid}}" method="post">
                @csrf
                @method('PATCH') 
                <input name="nama" id="nama" type="text" value="{{$user->name}}" hidden>
            <div class="form-group" style="width:50%; float: left;  ">
                <center><button id="printPageButton" class="button-danger" style="margin-top:2%" >Terima Permohonan</button></a></center>
            </div>
            </form>
            <form action="/tolakpermohonan/{{$user->tryid}}" method="post">
                <input name="nama" id="nama" type="text" value="{{$user->name}}" hidden>
                @csrf
                @method('PATCH') 
            <div class="form-group" style="width:50%; float: left;   ">
                <center><button type="submit" id="printPageButton" class="button-warning" style="margin-top:2%" >Tolak permohonan</button></a></center>
            </div>
            </form>
        </td>
        @endif
        </div>
      </div>

</body>
</html>



