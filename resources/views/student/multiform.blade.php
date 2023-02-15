
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>
	$(document).ready(function(){
		$("#exampleModalToggle").modal('show');
	});
</script>
<style>
   * {
   box-sizing: border-box;
   }
   body {
   background-color: #f1f1f1;
   }
   #regForm {
   background-color: #ffffff;
   margin: 100px auto;
   font-family: Raleway;
   padding: 40px;
   width: 70%;
   min-width: 300px;
   }
   h1 {
   text-align: center;  
   }
   input {
   padding: 10px;
   width: 100%;
   font-size: 17px;
   font-family: Raleway;
   border: 1px solid #aaaaaa;
   }
   select {
   padding: 10px;
   width: 100%;
   font-size: 17px;
   font-family: Raleway;
   border: 1px solid #aaaaaa;
   }
   /* Mark input boxes that gets an error on validation: */
   select.invalid {
   background-color: #ffdddd;
   }
   /* Hide all steps by default: */
   .tab {
   display: none;
   }
   button {
   background-color: #04AA6D;
   color: #ffffff;
   border: none;
   padding: 10px 20px;
   font-size: 17px;
   font-family: Raleway;
   cursor: pointer;
   }
   button:hover {
   opacity: 0.8;
   }
   #prevBtn {
   background-color: #bbbbbb;
   }
   /* Make circles that indicate the steps of the form: */
   .step {
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: #bbbbbb;
   border: none;  
   border-radius: 50%;
   display: inline-block;
   opacity: 0.5;
   }
   .step.active {
   opacity: 1;
   }
   /* Mark the steps that are finished and valid: */
   .step.finish {
   background-color: #04AA6D;
   }
</style>

</head>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Arahan Kepada Pelajar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul>
               <li>Sila masukkan maklumat dengan betul.</li>
               <li>Masukkan aktiviti yang tahap percapaian paling tinggi pernah diwakili oleh pelajar.</li>
            </ul>            
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
         <center><div class="modal-header">
           <h5 class="modal-title" id="exampleModalToggleLabel2" style="color: #ff0505">Peringatan Penting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div></center>
          <div class="modal-body">
            <li>Sila pastikan semua makumat yang dimasukkan adalah betul</li>
            <br>
            <li>pelajar akan dikenakan tindakan tatatertib sekiranya terdapat maklumat yang tidak betul</li>
            <br>
            <li>Jika tahap pencapaian, jenis dan jawatan aktiviti yang anda peroleh tiada didalam sistem sila contact admin untuk menambah maklumat aktiviti tersebut</li>
          </div>
          <div class="modal-footer">            
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>    
   <div class="card">
   <div class="card-header">
      <div class="card">
         <!-- /.card-header -->
         <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
               <p>{{ $message }}</p>
            </div>
            @endif
            <form id="regForm" action="/simpan" method="post">
               @csrf
               <!-- One "tab" for each step in the form: -->
               {{-- SUKAN --}}
               <div class="tab">


                  <input id="userid" name="userid" type="text" hidden value="{{ Auth::user()->id }}"> 



                  <h1>SUKAN :</h1>
                  <label>JENIS SUKAN ANDA:</label><br>
                  <select id="idsukan" name="idsukan"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>                  
                     @foreach($idsukan as $a)
                     <option value="{{$a->id}}" >{{$a->jenissukan}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP PENCAPAIAN & MARKAH:</label><br>
                  <select id="idsukandt" name="idsukandt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idsukandt as $b)
                     <option value="{{$b->id}}" >{{$b->pencapaian}} - ({{$b->markah}} Markah)</option>
                     @endforeach
                     </option> 
                  </select>
               </div>
               {{-- SUKAN --}}
               {{-- KELAB --}}
               <div class="tab">
                  <h1>PERSATUAN/KELAB :</h1>
                  <label>JENIS PERSATUAN/KELAB ANDA:</label><br>
                  <select id="idkelab" name="idkelab"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idkelab as $c)
                     <option value="{{$c->id}}" >{{$c->jeniskelab}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP PENGLIBATAN & JAWATAN DISANDANG:</label><br>
                  <select id="idkelabdt" name="idkelabdt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idkelabdt as $d)
                     <option value="{{$d->id}}" >{{$d->pencapaian}} - ({{$d->jawatan}}) </option>
                     @endforeach
                     </option> 
                  </select>
               </div>
               {{-- KELAB --}}
               {{-- KEBUDAYAAN --}}
               <div class="tab">
                  <h1>KEBUDAYAAN/KEROHANIAN :</h1>
                  <label>JENIS KEBUDAYAAN/KEROHANIAN ANDA:</label><br>
                  <select id="idkebudayaan" name="idkebudayaan"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idkebudayaan as $e)
                     <option value="{{$e->id}}" >{{$e->jeniskebudayaan}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP PENGLIBATAN & MARKAH:</label><br>
                  <select id="idkebudayaandt" name="idkebudayaandt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idkebudayaandt as $f)
                     <option value="{{$f->id}}" >{{$f->pencapaian}} - ({{$f->markah}} Markah)</option>
                     @endforeach
                     </option> 
                  </select>
               </div>
               {{-- KEBUDAYAAN --}}
               {{-- BERUNIFORM  --}}
               
               <div class="tab">
                  <h1>BERUNIFORM :</h1>
                  <label>JENIS BERUNIFORM:</label><br>
                  <select class="form-select form-select-lg mb-3" id="uniform">
                     <option selected disabled>Select Uniform</option>
                     @foreach ($badanuniform as $uni)
                     <option value="{{ $uni->id }}">{{ $uni->badanuniform }}({{$uni->singkatan}})</option>
                     @endforeach
                 </select>                 
                  <label>TAHAP PENGLIBATAN & MARKAH:</label><br>
                  <select  class="form-select form-select-lg mb-3" id="state">                     
                  </select>                  
                  <div >
                     <p ></p>     
                     <label for="markah">markah</label>
                     <input id="markah" name="markah" type="text" readonly>                     
                     <input  id="unifomjeni" name="unifomjeni" type="text" readonly hidden>       
                 </div>    
               </div>
               <script type="text/javascript">
                  $(document).ready(function () {
                      $('#uniform').on('change', function () {
                          var uniformID = this.value;
                          $('#state').html('');
                          $.ajax({
                              url: '{{ route('getUniform') }}?bdnuni='+uniformID,
                              type: 'get',
                              success: function (res) {
                                  $('#state').html('<option value="">Pilih Tahap</option>');
                                  $.each(res, function (key, value) {
                                      $('#state').append('<option value="' + value
                                          .jwtuni + '">' + value.jawatanuniform + '</option>');
                                  });
                                  $('#city').html('<option value="">Select City</option>');
                              }
                          });
                      });
                      // $('#state').on('change', function () {
                      //     var jwtid = this.value;
                      //     $('#city').html('');
                      //     $.ajax({
                      //         url: '{{ route('getmarkah') }}?jwt_id='+jwtid,
                      //         type: 'get',
                      //         success: function (res) {    
                      //             $.each(res, function (key, value) {
                      //                 $('#city').append('<input type="text" value="' + value
                      //                     .markah + '">');
                      //             });
                      //         }
                      //     });
                      // });
                      $('#state').on('change', function () {
                          var jwtid = this.value;
                          $('#niha').html('');
                          $.ajax({
                              url: '{{ route('getmarkah') }}?jwt_id='+jwtid,
                              type: 'get',
                              success: function (res) {                       
                                  $.each(res, function (key, value) {
                                      var uniformmid = value.uniid;
                                      var markah = value.markah;
                                      document.getElementById("unifomjeni").value = uniformmid;
                                      document.getElementById("markah").value = markah;
                                      // $("#niha").append('<input class="form-control" name="new_gallery" value="' + value.markah + '" readonly/>');
                                      // $("#niha").append('<input class="form-control" id="uniuni" name="uniuni" value="' + value.uniid + '" readonly/>');
                                      // $('#city').append('<option value="" disabled selected>' + value.markah + '</option>');
                                  });
                              }
                          });
                      });           
                  });
              </script>
              
               
               
           
               {{-- BERUNIFORM --}}
               {{-- SIJIL --}}
               <div class="tab">
                  <h1>ANUGERAH/SIJIL/PINGAT :</h1>
                  <label>JENIS ANUGERAH/SIJIL/PINGAT ANDA:</label><br>
                  <select id="idsijil" name="idsijil"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idsijil as $h)
                     <option value="{{$h->id}}" >{{$h->sijil}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>JAWATAN DISANDANG & MARKAH:</label><br>
                  <select id="idsijildt" name="idsijildt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idsijildt as $i)
                     <option value="{{$i->id}}" >{{$i->pencapaian}} - ({{$i->markah}} Markah)</option>
                     @endforeach
                     </option> 
                  </select>
               </div>
               {{-- SIJIL --}}
               {{-- PENERBITAN --}}
               <div class="tab">
                  <h1>PENERBITAN/MAJALAH :</h1>
                  <label>JENIS PENERBITAN/MAJALAH ANDA:</label><br>
                  <select id="idpenerbitan" name="idpenerbitan"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idpenerbitan as $j)
                     <option value="{{$j->id}}" >{{$j->jenispenerbitan}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP EDARAN & JAWATAN/PERANAN:</label><br>
                  <select id="idpenerbitandt" name="idpenerbitandt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idpenerbitandt as $k)
                     <option value="{{$k->penerbitanid}}" >{{$k->pencapaian}} - ({{$k->jawatan}}) </option>
                     @endforeach
                     </option> 
                  </select>
               </div>
               {{-- PENERBITAN --}}
               {{-- PADU --}}
               
               <div class="tab">
                  <h1>PROGRAM KHAS HEP:</h1>
                  <label>JENIS PROGRAM PADU ANDA:</label><br>
                  <select id="idpadu" name="idpadu"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idpadu as $l)
                     <option value="{{$l->id}}" >{{$l->padu}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP MODUL & MARKAH:</label><br>
                  <select id="idpadudt" name="idpadudt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idpadudt as $m)
                     <option value="{{$m->paduid}}" >{{$m->hep}} - ({{$m->markah}} Markah)</option>
                     @endforeach
                     </option> 
                  </select>
               </div>
              
               {{-- PADU --}}
               {{-- PROGRAM TERTENTU --}}
               
               <div class="tab">
                  <h1>PROGRAM TERTENTU:</h1>
                  <label>JENIS PROGRAM TERTENTU ANDA:</label><br>
                  <select id="idprogramtertentu" name="idprogramtertentu"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idprogramtertentu as $n)
                     <option value="{{$n->id}}" >{{$n->programtertentu}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP PENCAPAIAN & MARKAH:</label><br>
                  <select id="idprogramtertentudt" name="idprogramtertentudt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idprogramtertentudt as $o)
                     <option value="{{$o->tertentuid}}" >{{$o->pencapaian}} - ({{$o->markah}} Markah)</option>
                     @endforeach
                     </option> 
                  </select>

                  {{-- //id PELAJAR --}}
                  {{-- @if(Auth::check())
                  $p ={{ Auth::user()->name }};
                  @endif --}}

                     {{-- $userid = p --}}
                  {{-- //id pelajar --}}

               </div>
              
               {{-- PROGRAM TERTENTU --}}
               <div style="overflow:auto;">
                  <div style="float:right;">
                     <br>
                     <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                     <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
               </div>
               <!-- Circles which indicates the steps of the form: -->
               <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
   var currentTab = 0; // Current tab is set to be the first tab (0)
   showTab(currentTab); // Display the current tab
   
   function showTab(n) {
     // This function will display the specified tab of the form...
     var x = document.getElementsByClassName("tab");
     x[n].style.display = "block";
     //... and fix the Previous/Next buttons:
     if (n == 0) {
       document.getElementById("prevBtn").style.display = "none";
     } else {
       document.getElementById("prevBtn").style.display = "inline";
     }
     if (n == (x.length - 1)) {
       document.getElementById("nextBtn").innerHTML = "Submit";
     } else {
       document.getElementById("nextBtn").innerHTML = "Next";
     }
     //... and run a function that will display the correct step indicator:
     fixStepIndicator(n)
   }
   
   function nextPrev(n) {
     // This function will figure out which tab to display
     var x = document.getElementsByClassName("tab");
     // Exit the function if any field in the current tab is invalid:
     if (n == 1 && !validateForm()) return false;
     // Hide the current tab:
     x[currentTab].style.display = "none";
     // Increase or decrease the current tab by 1:
     currentTab = currentTab + n;
     // if you have reached the end of the form...
     if (currentTab >= x.length) {
       // ... the form gets submitted:
       document.getElementById("regForm").submit();
       return false;
     }
     // Otherwise, display the correct tab:
     showTab(currentTab);
   }
   
   function validateForm() {
     // This function deals with validation of the form fields
     var x, y, i, valid = true;
     x = document.getElementsByClassName("tab");
     y = x[currentTab].getElementsByTagName("select");
     // A loop that checks every input field in the current tab:
     for (i = 0; i < y.length; i++) {
       // If a field is empty...
       if (y[i].value == "") {
         // add an "invalid" class to the field:
         y[i].className += " invalid";
         // and set the current valid status to false
         valid = false;
       }
     }
     // If the valid status is true, mark the step as finished and valid:
     if (valid) {
       document.getElementsByClassName("step")[currentTab].className += " finish";
     }
     return valid; // return the valid status
   }
   
   function fixStepIndicator(n) {
     // This function removes the "active" class of all steps...
     var i, x = document.getElementsByClassName("step");
     for (i = 0; i < x.length; i++) {
       x[i].className = x[i].className.replace(" active", "");
     }
     //... and adds the "active" class on the current step:
     x[n].className += " active";
   }
</script>

</body>
</html>
