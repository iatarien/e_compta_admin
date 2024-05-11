
@include('components.header')
<style type="text/css">
table {
  margin-bottom : 2px !important;
  color : black !important;
}
table td  {
  border : 1px solid black !important;
  width : 19%;
  text-align : center;
}
table th  {
  border : 1px solid black !important;
  text-align : center;
}
table tr  {
  border : 1px solid black !important;
}

</style>

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
            @if($type == "paid")
            <?php $t = "Demandes traités et payés";?>
            @elseif($type == "treated")
            <?php $t = "Demandes traités";?>
            @else
            <?php $t = "Demande non traités";?>
            @endif
            <h3>{{$t}}</h3>
                    <div class="row">
                        <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">

                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Entreprise</th>
                                    <th scope="col">Demande</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Etat</th>
                                    @if($type == "not")
                                    @else
                                    <th scope="col">Montant</th>
                                    @endif
                                    
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <?php $i = 0; ?>
                                @foreach($demandes as $demande)
                                <?php $i++; ?>
                                <?php $val = $demande->type; $val1 = $val;?>
                                    @if($val == "G12B")
                                    <?php $val1 = "G12-Bis"; ?>
                                    @elseif($val =="employes")
                                    <?php $val1 = "employé"; ?>
                                    @elseif($val =="annuel")
                                    <?php $val1 = "annuelle des salaires"; ?>
                                    @endif
                                <tr>
                                    <td style="width : 4%;">{{$i}}</td>
                                    <td >{{$demande->entreprise}}</td>
                                    <td><span class="fw-bold">Demande Déclaration {{$val1}}</span></td>
                                    <td><span class="fw-bold">{{$demande->date}}</span></td>
                                    @if($demande->state == "paid")
                                    <?php $state = "Demande traité et payé"; $btn ="Verifier"; $clss ="btn-info"; $link= "/demande/".$demande->id_demande; $target ="";?>
                                    @elseif($demande->state == "treated")
                                    <?php $state = "Demande traité"; $btn ="Verifier"; $clss ="btn-info"; $link="/traiter_demande/".$demande->id_demande; $target ="";?>
                                    @else
                                    <?php $state = "Demande non traité"; $btn ="Traiter"; $clss ="btn-primary"; $link="/traiter_demande/".$demande->id_demande; $target ="";?>
                                    @endif
                                    <td><span class="fw-bold">{{$state}}</span></td>
                                    @if($type == "not")
                                    @else
                                    <td><span class="fw-bold">{{number_format((float)$demande->montant, 2, '.', ' ')}} DA</span></td>
                                    @endif
                                    <td><a class="btn {{$clss}}" target="{{$target}}" href="{{$link}}">{{$btn}}</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
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