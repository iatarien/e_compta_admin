
@include('components.header')

@include('components.topbar')

@include('components.sidebar')

<?php $villes = ["","Adrar","Chlef","Laghouat","Oum El Bouaghi","Batna","Béjaïa","Biskra","Béchar",
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">&emsp;Clients</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm" style="color : black">
                                        <thead>
                                            <tr>
                                                <th scope="col">Entreprise</th>
                                                <th scope="col">Nom et Prenom</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Telephone</th>
                                                <th scope="col">Wilaya</th>
                                                <th scope="col" style='text-align : center'>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($clients as $client)
                                            <tr>
                                                <td>{{$client->entreprise}}</td>
                                                <td>{{$client->nom}} {{$client->prenom}}</td>
                                                <td>{{$client->email}}</td>
                                                <td>{{$client->phone}}</td>
                                                <td>{{$villes[$client->wilaya]}} ({{$client->wilaya}})</td>
                                                <td style='text-align : center'>
                                                    <span>
                                                        <a href="/detail/{{$client->id}}" data-toggle="tooltip"
                                                            data-placement="top" title="documents"><i
                                                                class="fa fa-eye color-danger"></i>
                                                        </a>
                                                    </span>
                                                </td>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


@include('components.footer')