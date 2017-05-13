@extends('layouts.app')

@section('content')
    <script type="text/javascript">

        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = " tst";
            if(s1.value == "speciality"){
                var optionArray = ["speciality|Speciality"];
            }
            else if(s1.value == "hospital"){
                var optionArray = ["Cancer Hospital|Cancer Hospital ","Children Hospital |Children Hospital ","Psychiatric Hospital |Psychiatric Hospital ","Rehabilitation Hospital |Rehabilitation Hospital","Trauma Centre |Trauma Centre "];
            }
            else if(s1.value == "Clinic"){
                var optionArray = ["Cardiology clinic|Cardiology clinic ","Children clinic|Children Clinic","Dermatology clinic|Dermatology clinic","ENT clinic|ENT clinic","Family clinic|Family clinic"];
            }
            else if(s1.value == "Doctor"){
                var optionArray = ["anesthesiologist|Anesthesiologist ","cardiologist |Cardiologist ","dermatologist |Dermatologist ","neurosurgeon |Neurosurgeon","neurosurgeon |Neurosurgeon ","obstetrician|Obstetrician  ","gynecologist  |Gynecologist  "
                    ,"ophthalmologist|Ophthalmologist  ","psychiatrist  |Psychiatrist  ","urologist  |Urologist  "];
            } else if(s1.value == "Pharmacie"){
                var optionArray = ["ambulatory care pharmacy|Ambulatory Care Pharmacy","critical care pharmacy|Critical Care Pharmacy","geriatric pharmacy|Geriatric Pharmacy" ,
                    "nuclear pharmacy|Nuclear Pharmacy","nutrition support pharmacy|Nutrition Support Pharmacy"];

            } else if(s1.value == "Blood Bank"){
                var optionArray = ["associazione volontari|Associazione Volontari","blood services|Blood Services" , "blood services center|Blood Services Center"
                ,"community blood services|Community Blood Services" ,"cord blood registry|Cord Blood Registry","general blood bank|General Blood Bank" , "international society of blood transfusion|International Society of Blood Transfusion"  ];
            }
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><span><h4>contact informations</h4></span></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('newPro')}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Spesiality</label>
                                <div class="col-md-6">
                                <select id="slct1" name="speciality" onchange="populate(this.id,'slct2')">
                                    <option selected="selected" value="speciality">select your domain</option>
                                    <option  value="Doctor">Doctor</option>
                                    <option value="hospital">hospital</option>
                                    <option value="Clinic">Clinic</option>
                                    <option value="Pharmacie">Pharmacie</option>
                                    <option value="Blood Bank">Blood Bank</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Domaine</label>

                                <div class="col-md-6">
                                    <select placeholder="First name" id="slct2" name="sub_speciality">
                                        <option selected="selected" value="speciality">speciality</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="adresse" class="col-md-4 control-label">telephone</label>

                                <div class="col-md-6">
                                    <input id="adresse" type="adresse" class="form-control" name="tel" required></input>

                                    @if ($errors->has('tel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                                <label for="adresse" class="col-md-4 control-label">adresse</label>

                                <div class="col-md-6">
                                    <textarea id="adresse" type="adresse" class="form-control" name="adresse" required></textarea>

                                    @if ($errors->has('adresse'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('zip  ') ? ' has-error' : '' }}">
                                <label for="zip" class="col-md-4 control-label">zip code</label>

                                <div class="col-md-6">
                                    <input id="zip" type="zip" class="form-control" name="zip" required>

                                    @if ($errors->has('zip'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('text  ') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">description</label>

                                <div class="col-md-6">
                                    <textarea id="desctiption" type="text" class="form-control" name="description" required></textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <br><br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        submit
                                    </button>

                                </div>

                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
