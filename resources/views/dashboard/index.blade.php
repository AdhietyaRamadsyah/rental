@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="height: 7rem; width: 16rem">
                    <div class="card-body">
                        <p>Barang</p>
                        <h3>300</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16" style="margin-top: -150px">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                    </svg>
                    </div>
                </div>
             </div>   
                <div class="col-md-3">
                    <div class="card" style="height: 7rem; width: 16rem">
                        <div class="card-body">
                            <P>Transaksi</P>
                            <h3>120</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-file-check-fill" viewBox="0 0 16 16" style="margin-top: -150px">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1.146 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                        </div>
                    </div>
                 </div> 
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="height: 7rem; width: 16rem">
                            <P>Terlambat</P>
                            <h3>30</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16" style="margin-top: -150px">
                            <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
                        </svg>
                        </div>
                    </div>
                 </div>   
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="height: 7rem; width: 16rem">
                            <P>Omset</P>
                            <h3>30.000.000</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16" style="margin-top: -150px">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                        </svg>
                        </div>
                    </div>
                 </div>   
        </div>
    </div>
@endsection