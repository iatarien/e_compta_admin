
@include('components.header')

@include('components.topbar')

@include('components.sidebar')

<?php 
    $link ="http://localhost:8089";
    $villes = ["","Adrar","Chlef","Laghouat","Oum El Bouaghi","Batna","Béjaïa","Biskra","Béchar",
    "Blida","Bouira","Tamanrasset","Tébessa","Tlemcen","Tiaret","Tizi Ouzou","Alger","Djelfa","Jijel",
    "Sétif","Saïda","Skikda","Sidi Bel Abbès","Annaba","Guelma","Constantine","Médéa","Mostaganem","M'Sila",
    "Mascara","Ouargla","Oran","El Bayadh","Illizi","Bordj Bou Arreridj","Boumerdès","El Tarf","Tindouf","Tissemsilt",
    "El Oued","Khenchela","Souk Ahras","Tipaza","Mila","Aïn Defla","Naâma","Aïn Témouchent","Ghardaïa","Relizane","Timimoun",
    "Bordj Badji Mokhtar","Ouled Djellal","Béni Abbès","In Salah","In Guezzam","Touggourt","Djanet","El Meghaier","El Menia"]; ?>

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                    <?php $villes = ["","Adrar","Chlef","Laghouat","Oum El Bouaghi","Batna","Béjaïa","Biskra","Béchar",
                    "Blida","Bouira","Tamanrasset","Tébessa","Tlemcen","Tiaret","Tizi Ouzou","Alger","Djelfa","Jijel",
                    "Sétif","Saïda","Skikda","Sidi Bel Abbès","Annaba","Guelma","Constantine","Médéa","Mostaganem","M'Sila",
                    "Mascara","Ouargla","Oran","El Bayadh","Illizi","Bordj Bou Arreridj","Boumerdès","El Tarf","Tindouf","Tissemsilt",
                    "El Oued","Khenchela","Souk Ahras","Tipaza","Mila","Aïn Defla","Naâma","Aïn Témouchent","Ghardaïa","Relizane","Timimoun",
                    "Bordj Badji Mokhtar","Ouled Djellal","Béni Abbès","In Salah","In Guezzam","Touggourt","Djanet","El Meghaier","El Menia"]; ?>

                    <div class="row">
                        <div class="col-lg-10">

                        <div class="card">
                            <div class="card-body">
                            <br>
                            <!-- General Form Elements -->
                            <form method="POST" action="/" style="color : black">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                                    <div class="col-sm-10">
                                    <input readonly type="text" value="{{$client->nom}}" name="nom" id="nom" class="form-control" placeholder="Nom" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Prenom</label>
                                    <div class="col-sm-10">
                                    <input readonly type="text" value="{{$client->prenom}}" name="prenom" id="prenom" class="form-control" placeholder="Prenom" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Entreprise</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->entreprise}}" name="entreprise" id="entreprise" class="form-control" placeholder="Nom de l'entreprise" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Telephone</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$client->phone}}" name="telephone" readonly  class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->adresse}}" name="adresse" id="adresse" class="form-control" placeholder="Adresse" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Wilaya</label>
                                    <div class="col-sm-10">
                                        <select readonly class="form-control" name="wilaya">
                                        <option selected style="visibility : hidden" value="{{$client->wilaya}}" > {{$villes[$client->wilaya]}} ({{$client->wilaya}})</option>
                                            
                                        </select >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Commune</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->commune}}" name="communne" id="communne" class="form-control" placeholder="Communne" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">NIF</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->NIF}}" name="NIF" id="NIF" class="form-control" placeholder="NIF" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">NIS</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->NIS}}" name="NIS" id="NIS" class="form-control" placeholder="NIS" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">N° Article</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->AL}}" name="AL" id="AL" class="form-control" placeholder="N° Article" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">N° Article</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->RC}}" name="RC" id="RC" class="form-control" placeholder="N° Registre de Commerce" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent";
                                        if($docs->facture_achat == NULL || $docs->facture_achat == ""){
                                            $disabled = "pointer-events : none; background-color : lightgray;";
                                            $transparent = "";
                                        } ?>
                                    <label for="inputText" class="col-sm-2 col-form-label">Facture Achat</label>

                                    <div class="col-sm-1">
                                        
                                        <a class="btn btn-info"  target="_blank" style="{{$disabled}}" href="{{$link.$docs->facture_achat}}">Visualiser </a>
                                    </div>
                                </div>
                                <input type="hidden" name="id_doc" value="{{$link.$docs->id_doc}}" />
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent";
                                        if($docs->facture_vente == NULL || $docs->facture_vente == ""){
                                            $disabled = "pointer-events : none; background-color : lightgray;";
                                            $transparent = "";
                                        } ?>
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Facture Vente</label>
                                    <div class="col-sm-1">
                                        <a class="btn btn-info"  target="_blank" style="{{$disabled}}" href="{{$link.$docs->facture_vente}}">Visualiser </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent";
                                        if($docs->releve == NULL || $docs->releve == ""){
                                            $disabled = "pointer-events : none; background-color : lightgray;";
                                            $transparent = "";
                                        } ?>
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Relevé Compte Bancaire</label>
                                    <div class="col-sm-1">
                                        <a class="btn btn-info"  target="_blank" style="{{$disabled}}" href="{{$link.$docs->releve}}">Visualiser </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent";
                                        if($docs->registre == NULL || $docs->registre == ""){
                                            $disabled = "pointer-events : none; background-color : lightgray;";
                                            $transparent = "";
                                        } ?>
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Registre de Commerce</label>

                                    <div class="col-sm-1">
                                        <a class="btn btn-info"  target="_blank" style="{{$disabled}}" href="{{$link.$docs->registre}}">Visualiser </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent";
                                        if($docs->existence == NULL || $docs->existence == ""){
                                            $disabled = "pointer-events : none; background-color : lightgray;";
                                            $transparent = "";
                                        } ?>
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Déclaration d'existence </label>
                                    <div class="col-sm-1">
                                        <a class="btn btn-info"  target="_blank" style="{{$disabled}}" href="{{$link.$docs->existence}}">Visualiser </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent";
                                        if($docs->agrement == NULL || $docs->agrement == ""){
                                            $disabled = "pointer-events : none; background-color : lightgray;";
                                            $transparent = "";
                                        } ?>
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Carte Agricole ou agrement</label>

                                    <div class="col-sm-1">
                                        <a class="btn btn-info"  target="_blank" style="{{$disabled}}" href="{{$link.$docs->agrement}}">Visualiser </a>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->

                            </div>
                        </div>

                        </div>

                    </div>                    
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


@include('components.footer')