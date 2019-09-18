<!DOCTYPE html>
<html>
<head>
	<title>IKU</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 5px;
		  text-align: center;    
		}
	</style>
</head>
<body>
	<table class="table table-sm table-dark">
	  <thead>
	    <tr>
	      	<th scope="col" rowspan="2">Misi</th>
		    <th scope="col" rowspan="2">Tujuan</th>
		    <th scope="col" rowspan="2">Sasaran</th>
		    <th scope="col" rowspan="2">Indikator</th>
		    <th scope="col" rowspan="2">Kondisi Awal Tahun 2015</th>
		    <th scope="col" rowspan="2">Kondisi Akhir Tahun 2021</th>
		    <th scope="col" colspan="5">Target Tahun</th>
	    </tr>
	    <tr>
		    <td scope="col">2017</td>
		    <td scope="col">2018</td>
		    <td scope="col">2019</td>
		    <td scope="col">2020</td>
		    <td scope="col">2021</td>
		  </tr>
	  </thead>
	  <tbody>
	  @foreach($data as $missions)
	  <tr>
	  	{{-- rowspan="{{ $missions->rowspan }}" --}}
	    <th scope="row">  {{ $missions->mission }}  </th>
	    
	    @foreach($missions->tujuans as $tujuans)
	    	<td> {{ $tujuans->tujuan }} </td>
	    	@foreach($tujuans->sasarans as $sasarans)
	    		<td> {{ $sasarans->sasaran  }}</td>
	    		@foreach($sasarans->indikators as $indikators)
				    <td> {{ $indikators->indikator }} </td>
				    <td> {{ $indikators->kondisi_awal }} </td>
				    <td> {{ $indikators->kondisi_akhir }} </td>
				    <td> {{ $indikators->tahun_2017 }} </td>
				    <td> {{ $indikators->tahun_2018 }} </td>
				    <td> {{ $indikators->tahun_2019 }} </td>
				    <td> {{ $indikators->tahun_2020 }} </td>
				    <td> {{ $indikators->tahun_2021 }} </td>
				@endforeach    
			@endforeach    
		@endforeach   
	  </tr>
	  @endforeach
	  </tbody>
	</table>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>