@extends('layout.nav')

@section("content")
<div class="row">
  <div class="row col-6 ms-2 me-2  "  >
      <div class="accordion "   id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                information personelle
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                  <form action="{{ route('create.person') }}" method="POST">
                    @csrf
                      <div class="form-row row">
                        <div class="col-4">
                          <label for="">photo :</label>
                          <input type="file" class="oi oi-file">
                        </div> 
                        <div class="form-group col-4">
                          <label for="nom">Nom :</label>
                          <input type="text"  class="form-control" id="nom" placeholder="nom">
                        </div>
                        <div class="form-group col-4">
                          <label for="prenom">Prenom :</label>
                          <input type="text" class="form-control" id="prenom" placeholder="prenom">
                        </div>
                          <div class="form-group">
                          <label for="cin">CIN :</label>
                          <input type="text" class="form-control" name="cin" placeholder="cin">
                          </div>
                          <div class="form-group">
                          <label for="email">Email :</label>
                          <input type="email" class="form-control" id="email" placeholder="email">
                          </div>
                        <div class="form-group col-6">
                          <label for="adress">Adress :</label>
                          <input type="text" class="form-control" id="adress">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="tel">telephone :</label>
                          <input type="tel" class="form-control" id="tel">
                        </div>
                        <div class="form-group col-6">
                          <label for="code_postal">Code Postal :</label>
                          <input type="text" class="form-control" id="code_postal">
                        </div>
                        <div class="form-group col-6">
                          <label for="ville">Ville :</label>
                          <input type="text" class="form-control" id="ville">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                formation
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                
                <form action="{{ route('create.diplome') }}" method="POST">
                  
                  @csrf
                    <div class="form-row row ">
                      <div class=" form-group row" id="contentd">
                          <div class="form-group row">
                            <div class="form-group col-6">
                              <label for="diplome">Diplome :</label>
                              <input type="text" class="form-control" name="diplome[]" placeholder="deplome">
                            </div>
                            <div class="form-group col-6">
                              <label for="etablissement">Etablissement :</label>
                              <input type="text" class="form-control" id="etablissement" name="etablissement[]" placeholder="etablissement">
                            </div>
                            <div class="form-group col-6">
                              <label for="ville">Ville :</label>
                              <input type="text" class="form-control" id="ville" name="ville[]" placeholder="ville">
                            </div>
                            <div class="form-group col-6">
                              <label for="date_obtention">Date obtention :</label>
                              <input type="date" class="form-control" id="date_obtention" name="date_obtention[]">
                            </div>
                            <div class="form-group">
                              <label for="description">Description :</label>
                              <textarea  class="form-control" id="description" name="description[]" placeholder="description"></textarea>
                            </div>
                          </div>
                          <button type="button" onclick="d()">delete</button>
                          <div id="btnd" class="col-1">
                            <button  type="button"  onclick="fdiplome()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg></button>
                          </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  
                  </form>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                expérience professionelle
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                <form action="{{ route('create.experience') }}" method="POST">
                  @csrf
                    <div class="form-row row">
                      <div class="form-group row" id="contentex">
                          <div class="form-group row">
                            <div class="form-group col-6">
                              <label for="experience">Experience :</label>
                              <input type="text" class="form-control" name="experience[]" placeholder="experience">
                            </div>
                            <div class="form-group col-6">
                              <label for="employeur">Employeur :</label>
                              <input type="text" class="form-control" name="employeur[]" placeholder="employeur">
                            </div>
                            <div class="form-group col-6">
                              <label for="date_debut">Date Debut :</label>
                              <input type="date" class="form-control" name="date_debut[]" >
                            </div>
                            <div class="form-group col-6">
                              <label for="date_fin">Date Fin :</label>
                              <input type="date" class="form-control" name="date_fin[]">
                            </div>
                            <div class="form-group col-12">
                              <label for="ville">Ville :</label>
                              <input type="text" class="form-control" name="ville[]" placeholder="ville">
                            </div>
                            <div class="form-group">
                              <label for="description">Description :</label>
                              <textarea  class="form-control" name="description[]" placeholder="description"></textarea>
                            </div>
                          </div>
                          <div id="btnex" class="col-1">
                            <button  type="button"  onclick="fexperience()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg></button>
                            </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
              </div>
            </div>
          </div>
          <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                  compétences
                </button>
              </h2>
              <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                <div class="accordion-body">
                  <form action="{{ route('create.competence') }}" method="POST">
                    @csrf
                      <div class="form-row row">
                        <div class="form-group row" id="contentcom">
                          
                              <div class="form-group col-11">
                                <label for="competence">Competence :</label>
                                <input type="text" class="form-control" name="competence[]" placeholder="competence">
                              </div>
                          
                          <div id="btncom" class="col-1">
                            <button  type="button"  onclick="fcompetence()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg></button>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                  </form></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                  langues
                </button>
              </h2>
              <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                <div class="accordion-body">
                  <form action="{{ route('create.langue') }}" method="POST">
                    @csrf
                      <div class="form-row row">

                        <div class="form-group row" id="contentlan">
                          
                          <div class="form-group row col-11">
                            <div class="form-group col-6">
                              <label for="langues">Langues :</label>
                              <input type="text" class="form-control" name="langues[]" placeholder="langues">
                            </div>
                            <div class="form-group col-6">
                              <label for="niveau">niveau :</label>
                              <input type="range" class="form-control" name="niveau[]" placeholder="niveau">
                            </div>
                          </div>
                      
                          <div id="btnlan" class="col-1">
                              <button  type="button"  onclick="flangue()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg></button>
                              </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                  </form></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingsex">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesex" aria-expanded="false" aria-controls="panelsStayOpen-collapsesex">
                  qualites
                </button>
              </h2>
              <div id="panelsStayOpen-collapsesex" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingsex">
                <div class="accordion-body">
                  <form id="form1" action="{{ route('create.qualite') }}" method="POST">
                    @csrf
                      <div class="form-row row">                
                        <div class="form-group row" id="contentq">
                          <div class="form-group col-11">
                            <label for="qualite">Qualite :</label>
                            <input type="text" class="form-control" name="qualites[]" placeholder="qualite">
                          </div>
                      
                          <div id="btnq" class="col-1">
                            <button  type="button"  onclick="fqualite()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg></button>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingseven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseseven" aria-expanded="false" aria-controls="panelsStayOpen-collapseseven">
                  loisirs
                </button>
              </h2>
              <div id="panelsStayOpen-collapseseven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingseven">
                <div class="accordion-body">
                  <form id="form2" action="{{ route('create.loisir') }}" enctype="multipart/form-data"  method="POST">
                    @csrf
                        <div class="form-row ">
                          <div class=" form-group row" id="content">
                              <div class="form-group col-11" >
                                <label for="loisirs">Loisir :</label>
                                <input type="text" class="form-control" name="loisirs[]" placeholder="loisir">
                              </div>
                              <div id="btn" class="col-1">
                                <button  type="button"  onclick="loisir()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg></button>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
  <div class="col-5">
        @include('cvrightside')
  </div>
</div>
  
</div>
@endsection
@section('js')
<script >
  
  function loisir(){
    var div=document.getElementById('content');
    var btn=document.getElementById('btn');
    var label=document.createElement('label');
    label.textContent="loisir :";
    var input=document.createElement('input');
    input.type='text';
    input.name="loisirs[]";
    input.placeholder="loisir";
    input.className+="form-control ";

    var mdiv=document.createElement('div');
    mdiv.className +="form-group col-11";
    mdiv.append(label);
    mdiv.append(input);
    div.insertBefore(mdiv,btn);
  }
  function fdiplome(){
    var div=document.getElementById('contentd');
    var btn=document.getElementById('btnd');

    var label1=document.createElement('label');
    label1.textContent="Diplome :";
    var input1=document.createElement('input');
    input1.type='text';
    input1.name="diplome[]";
    input1.placeholder="diplome";
    input1.className+="form-control ";

    var ddiv1=document.createElement('div');
    ddiv1.className +="form-group col-6";
    ddiv1.append(label1);
    ddiv1.append(input1);

    var label2=document.createElement('label');
    label2.textContent="Etablissement :";
    var input2=document.createElement('input');
    input2.type='text';
    input2.name="etablissement[]";
    input2.placeholder="etablissement";
    input2.className+="form-control ";

    var ddiv2=document.createElement('div');
    ddiv2.className +="form-group col-6";
    ddiv2.append(label2);
    ddiv2.append(input2);

    var label3=document.createElement('label');
    label3.textContent="Ville :";
    var input3=document.createElement('input');
    input3.type='text';
    input3.name="ville[]";
    input3.placeholder="ville";
    input3.className+="form-control ";

    var ddiv3=document.createElement('div');
    ddiv3.className +="form-group col-6";
    ddiv3.append(label3);
    ddiv3.append(input3);

    var label4=document.createElement('label');
    label4.textContent="Date Obtention :";
    var input4=document.createElement('input');
    input4.type='date';
    input4.name="date_obtention[]";
    input4.placeholder="date_obtention";
    input4.className+="form-control ";

    var ddiv4=document.createElement('div');
    ddiv4.className +="form-group col-6";
    ddiv4.append(label4);
    ddiv4.append(input4);

    var label5=document.createElement('label');
    label5.textContent="Description :";
    var input5=document.createElement('textarea');
    input5.type='text';
    input5.name="description[]";
    input5.placeholder="description";
    input5.className+="form-control ";

    var ddiv5=document.createElement('div');
    ddiv5.className +="form-group col-12";
    ddiv5.append(label5);
    ddiv5.append(input5);

    var divcontent=document.createElement('div')
    
    divcontent.className +="form-group row";
    divcontent.append(ddiv1);
    divcontent.append(ddiv2);
    divcontent.append(ddiv3);
    divcontent.append(ddiv4);
    divcontent.append(ddiv5);
  
    div.insertBefore(divcontent,btn);



    var themediv=document.createElement('div');
    themediv.name="nom_diplome";
    themediv.id="nom_diplome";
    themediv.textContent='hhhhhhhhhhhhhhhhh';

    console.log(themediv);

    var nomd=document.getElementById('nomd');
    
    nomd.append(themediv);
    console.log(themediv);

      
  }

  function fexperience(){
    var div=document.getElementById('contentex');
    var btn=document.getElementById('btnex');

    var label1=document.createElement('label');
    label1.textContent="Experience :";
    var input1=document.createElement('input');
    input1.type='text';
    input1.name="experience[]";
    input1.placeholder="experience";
    input1.className+="form-control ";

    var ddiv1=document.createElement('div');
    ddiv1.className +="form-group col-6";
    ddiv1.append(label1);
    ddiv1.append(input1);

    var label2=document.createElement('label');
    label2.textContent="Employeur :";
    var input2=document.createElement('input');
    input2.type='text';
    input2.name="employeur[]";
    input2.placeholder="employeur";
    input2.className+="form-control ";

    var ddiv2=document.createElement('div');
    ddiv2.className +="form-group col-6";
    ddiv2.append(label2);
    ddiv2.append(input2);

    var label3=document.createElement('label');
    label3.textContent="Date Debut :";
    var input3=document.createElement('input');
    input3.type='date';
    input3.name="date_debut[]";
    input3.placeholder="date_debut";
    input3.className+="form-control ";

    var ddiv3=document.createElement('div');
    ddiv3.className +="form-group col-6";
    ddiv3.append(label3);
    ddiv3.append(input3);

    var label4=document.createElement('label');
    label4.textContent="Date Fin :";
    var input4=document.createElement('input');
    input4.type='date';
    input4.name="date_fin[]";
    input4.placeholder="date_fin";
    input4.className+="form-control ";

    var ddiv4=document.createElement('div');
    ddiv4.className +="form-group col-6";
    ddiv4.append(label4);
    ddiv4.append(input4);

    var label5=document.createElement('label');
    label5.textContent="Ville :";
    var input5=document.createElement('input');
    input5.type='text';
    input5.name="ville[]";
    input5.placeholder="ville";
    input5.className+="form-control ";

    var ddiv5=document.createElement('div');
    ddiv5.className +="form-group col-12";
    ddiv5.append(label5);
    ddiv5.append(input5);

    var label6=document.createElement('label');
    label6.textContent="Description :";
    var input6=document.createElement('textarea');
    input6.type='text';
    input6.name="description[]";
    input6.placeholder="description";
    input6.className+="form-control ";

    var ddiv6=document.createElement('div');
    ddiv6.className +="form-group col-12";
    ddiv6.append(label6);
    ddiv6.append(input6);

    var divcontent=document.createElement('div')
    
    divcontent.className +="form-group row";
    divcontent.append(ddiv1);
    divcontent.append(ddiv2);
    divcontent.append(ddiv3);
    divcontent.append(ddiv4);
    divcontent.append(ddiv5);
    divcontent.append(ddiv6);
  
    div.insertBefore(divcontent,btn);
  }
  function fcompetence(){
    var div=document.getElementById('contentcom');
    var btn=document.getElementById('btncom');
    var label=document.createElement('label');
    label.textContent="Competence :";
    var input=document.createElement('input');
    input.type='text';
    input.name="competence[]";
    input.placeholder="competence";
    input.className+="form-control ";
    var mdiv=document.createElement('div');
    mdiv.className +="form-group col-11";
    mdiv.append(label);
    mdiv.append(input);
    div.insertBefore(mdiv,btn);
  }
  function flangue(){
    var divlan=document.getElementById('contentlan');
    var btn=document.getElementById('btnlan');

    var label1=document.createElement('label');
    label1.textContent="Langue :";
    var input1=document.createElement('input');
    input1.type='text';
    input1.name="langues[]";
    input1.placeholder="langue";
    input1.className+="form-control ";

    var mdiv1=document.createElement('div');
    mdiv1.className +="form-group col-6";
    mdiv1.append(label1);
    mdiv1.append(input1);

    var label2=document.createElement('label');
    label2.textContent="niveau :";
    var input2=document.createElement('input');
    input2.type='range';
    input2.name="niveau[]";
    input2.className+="form-control col-6";


    
    var mdiv2=document.createElement('div');
    mdiv2.className +="form-group col-6";
    mdiv2.append(label2);
    mdiv2.append(input2);


    var mdiv=document.createElement('div');
    mdiv.className +="form-group row col-11";
    mdiv.append(mdiv1);
    mdiv.append(mdiv2);
    divlan.insertBefore(mdiv,btn);
  }
   function fqualite(){
    
    var div=document.getElementById('contentq');
    var btn=document.getElementById('btnq');
    var label=document.createElement('label');
    label.textContent="Qualites :";
    var input=document.createElement('input');
    input.type='text';
    input.name="qualites[]";
    input.placeholder="qualite";
    input.className+="form-control ";

    var mdiv=document.createElement('div');
    mdiv.className +="form-group col-11";
    mdiv.append(label);
    mdiv.append(input);
    div.insertBefore(mdiv,btn);
  
  }
 /* document.getElementById("submit").onclick = function() {
  document.getElementById("form1").submit();
  document.getElementById("form2").submit();
<button type="submit" id="submit" onclick="a()">aj</button>
}*/
$('#nom').keyup(function(){
$('#themenom').html($('#nom').val());
});
$('#prenom').keyup(function(){
$('#themeprenom').html($('#prenom').val());
});
$('#tel').keyup(function(){
$('#themetel').html($('#tel').val());
});
$('#adress').keyup(function(){
$('#themeadress').html($('#adress').val());
});
$('#code_postal').keyup(function(){
$('#themeadress').html($('#adress').val()+"-"+$('#code_postal').val());
});
$('#ville').keyup(function(){
$('#themeadress').html($('#adress').val()+"-"+$('#code_postal').val()+"-"+$('#ville').val());
});
$('#email').keyup(function(){
$('#themeemail').html($('#email').val());
});

$('[name*=\'diplome\']').keyup(function(){
$('[name*=\'nom_diplome\']').html($('[name*=\'diplome\']').val());
console.log('gggggggg')
});
function d(){
var d=document.getElementById('contentd');
d.removeChild(d.lastElementChild);
}
</script>
@endsection