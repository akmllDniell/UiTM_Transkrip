@extends('layouts.master')
@section('title')
Kebudayaan Page
@endsection
@section('css')
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
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>MINI TRANSKRIP PELAJAR</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="/">Home</a></li>
            </ol>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</section>
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
            <form id="regForm" action="/try" method="post">
               @csrf
               <!-- One "tab" for each step in the form: -->
               {{-- SUKAN --}}
               <div class="tab">
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
               {{-- BERUNIFORM --}}
               {{-- 
               <div class="tab">
                  <h1>BERUNIFORM :</h1>
                  <label>JENIS BERUNIFORM:</label><br>
                  <select id="iduniform" name="iduniform"  style="width: 100%;" oninput="this.className = ''" onchange="change()">
                     <option value="" ></option>
                     @foreach($iduniform as $g)
                     <option value="{{$g->id}}" >{{$g->id}}</option>
                     @endforeach
                  </select>
               </div>
               --}}
               {{-- 
               <p id="demo"></p>
               --}}
               <script>
                  // function change() 
                  // {
                  // var x = document.getElementById("idjenisuniform").value;
                  
                  // if(x == "2")
                  // {
                  // <?php
                     // sssss
                     // ?>
                  // }
                  
                  // }
                   
               </script>
               {{-- <br><br> --}}
               {{-- 
               <label>TAHAP PENGLIBATAN & MARKAH:</label><br>
               <select id="idkebudayaandt" name="idkebudayaandt"  style="width: 100%;" oninput="this.className = ''" >
                  <option value="" ></option>
                  @foreach($idkebudayaandt as $f)
                  <option value="{{$f->id}}" >{{$f->pencapaian}} - ({{$f->markah}} Markah)</option>
                  @endforeach
                  </option> 
               </select>
               --}}
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
                     <option value="{{$n->id}}" >{{$n->id}}{{$n->programtertentu}}</option>
                     @endforeach
                     </option>
                  </select>
                  <br><br>
                  <label>TAHAP PENCAPAIAN & MARKAH:</label><br>
                  <select id="idprogramtertentudt" name="idprogramtertentudt"  style="width: 100%;" oninput="this.className = ''" >
                     <option value="" ></option>
                     @foreach($idprogramtertentudt as $o)
                     <option value="{{$o->tertentuid}}" >{{$o->tertentuid}}{{$o->pencapaian}} - ({{$o->markah}} Markah)</option>
                     @endforeach
                     </option> 
                  </select>
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
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')
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
@endsection