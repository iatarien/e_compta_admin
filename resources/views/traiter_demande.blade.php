
@include('components.header')

@include('components.topbar')

@include('components.sidebar')

<?php 
    
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

                    <div class="row">
                        <div class="col-lg-6">
                        <h5 class="card-title">Informations du client</h5>
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
                                    <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" value="{{$client->adresse}}" name="adresse" id="adresse" class="form-control" placeholder="Adresse" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Wilaya</label>
                                    <div class="col-sm-10">
                                        <select readonly class="form-control" name="wilaya">
                                        <option selected style="visibility : hidden" value="{{$client->wilaya}}" > {{$villes[intval($client->wilaya)]}} ({{$client->wilaya}})</option>
                                            
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

                            </form><!-- End General Form Elements -->

                            </div>
                        </div>

                        </div>
                        <div class="col-lg-6">
                        <?php $val = $demande->type; $val1 = $val; ?>
                            @if($val == "G12B")
                                <?php $val1 = "G12-Bis"; ?>
                            @elseif($val =="employes")
                            <?php $val1 = "employé"; ?>
                            @elseif($val =="annuel")
                            <?php $val1 = "annuelle des salaires"; ?>
                            @endif

                        <h5 class="card-title">Demande Déclaration {{$val1}}</h5>
                        <div class="card">
                            
                            <div class="card-body">
                            <br>
                            <!-- General Form Elements -->
                            <form method="POST" action="/" style="color : black">
                                @csrf
                                @if($val != "employes" && $val != "annuel")
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent"; ?>
                                    <label for="inputText" class="col-sm-3 col-form-label">Factures Ventes</label>
                                    <div class="col-sm-3">
                                        <a class="btn btn-info"  target="_blank" href="{{$link.$demande->facture_vente}}">Visualiser </a>
                                     </div>
                                </div>
                                @endif
                                @if($val == "G50" || $val == "bilan")
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent"; ?>
                                    <label for="inputText" class="col-sm-3 col-form-label">Factures Achats</label>
                                    <div class="col-sm-3">
                                        <a class="btn btn-info"  target="_blank" href="{{$link.$demande->facture_achat}}">Visualiser </a>
                                     </div>
                                </div>
                                @endif
                                @if($val == "bilan")
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent"; ?>
                                    <label for="inputText" class="col-sm-3 col-form-label">Relevé Compe Bancaire</label>
                                    <div class="col-sm-3">
                                        <a class="btn btn-info"  target="_blank" href="{{$link.$demande->releve}}">Visualiser </a>
                                     </div>
                                </div>
                                @endif
                                @if($val == "G12" || $val == "G12B")
                                <div class="row mb-3">
                                    <?php $disabled = ""; $transparent = "color : transparent"; ?>
                                    <label for="inputText" class="col-sm-3 col-form-label">Chiffre d'affaires approximatif</label>
                                    <div class="col-sm-3">
                                        <a class="btn btn-info"  target="_blank" href="{{$link.$demande->chiffre}}">Visualiser </a>
                                     </div>
                                </div>
                                @endif


                            </form><!-- End General Form Elements -->

                            </div>
                        </div>
                            <h5 class="card-title">Documents traités</h5>
                            <div class="card">
                                <div class="card-body">
                                <br>
                                <!-- General Form Elements -->
                                <form method="POST" action="/save_traitement" style="color : black" enctype="multipart/form-data">
                                    @csrf
                                    @if($demande->file != NULL)
                                    <div class="row mb-3">
                                        <?php $disabled = ""; $transparent = "color : transparent"; ?>
                                        <label for="inputText" class="col-sm-2 col-form-label">Document</label>
                                        <a class="btn btn-info"  target="_blank" href="{{$demande->file}}">Visualiser </a>  
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Montant</label>
                                        <div class="col-sm-8">
                                            <input readonly type="number" step="0.01" value="{{$demande->montant}}"  name="montant" id="RC" class="form-control" placeholder="0.00" >
                                        </div>
                                    </div>
                                    @else
                                    <div class="row mb-3">
                                        <?php $disabled = ""; $transparent = "color : transparent"; ?>
                                        <label for="inputText" class="col-sm-2 col-form-label">Document</label>
                                        <div class="col-sm-8">
                                            <input  type="file" required   max-size="5120" name="doc" id="nom" accept="image/jpeg,image/gif,image/png,application/pdf" class="form-control" placeholder="" >
                                        </div>
                        
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Montant</label>
                                        <div class="col-sm-8">
                                            <input required type="number" step="0.01" value=""  name="montant" id="RC" class="form-control" placeholder="0.00" >
                                        </div>
                                    </div>
                                    @endif
                                    <input type="hidden" name="id" value="{{$demande->id_demande}}" ?>
                                    <input type="hidden" name="client" value="{{$client->id}}" ?>
                                    @if($demande->state ==NULL)
                                    <div align="center">
                                        <button type="submit" class="btn btn-primary">Sauvegarder </button>
                                    </div>
                                    @endif
                                    
                                </form>
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