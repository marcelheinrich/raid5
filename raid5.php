<?php

    if(isset($_POST['palavra'])){
        $palavra = $_POST['palavra'];
        $contPalavra = count($palavra);
        $tamanhoPalavra = (ceil($contPalavra / 2)) * 2;

        //if($contPalavra == ($tamanhoPalavra){
            $arraymetade1 = str_split($str,$tamanhoPalavra);
            $metade1 = $arraymetade1[0];
            $metade2 = $arraymetade1[1];
            $paridade = $metade1 ^ $metade2;
       /* }else{
            $arraymetade1 = str_split($str,$tamanhoPalavra);
            $metade1 = $arraymetade1[0];
            $metade2 = $arraymetade1[1];
        }*/


        //$paridade = $metade1 ^ $metade2;

        //echo $dado2 ^ $paridade;
        //echo $dado1 ^ $paridade;

        header("Location: raid5.php");   
    }
?>
<html>

<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous">


</head>

<body background="back.png">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="#"> <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="#"></a>
				<a class="nav-item nav-link" href="#"></a>
				<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
			</div>
		</div>
	</nav>

	<br><br><br>

	<div class="row">
		<div class="col-12 offset-2" >
			<nav class="navbar navbar-light bg-light">
				<form class="form-inline" action="raid5.php" method="post">
					<input class="form-control mr-sm-2" type="text" name="palavra" placeholder="Adicionar Palavra" aria-label="Adicionar">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Adicionar</button>
				</form>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col-2">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
				 aria-selected="true">Visualização de Raid</a>
				<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
				 aria-selected="false">Adicionar Dados</a>
				<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
				 aria-selected="false">Queimar um HD</a>
				<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
				 aria-selected="false">Ressucitar um HD</a>
			</div>
		</div>


		<div class="col-9">

			<div class="tab-content" id="v-pills-tabContent">


				<!-- Visualização de Raid -->
				<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            
					<table cellspacing=20 cellpadding=20>
						<tr>
							<td>
								<div class="list-group">
									<button type="button" class="list-group-item list-group-item-action active">
										<center> HD 1 </center>
                                    </button>

                                    <!-- Linha -->   
                                    

									<button type="button" class="list-group-item list-group-item-action">
                                        <?php
                                        if (isset($dado1) and isset($paridade)){
                                            echo $dado1 ^ $paridade;
                                        }else{
                                            echo: "Sem dados";
                                        }
                                         ?>
                                    </button>
									
								</div>
							</td>
							<td>
								<div class="list-group">
									<button type="button" class="list-group-item list-group-item-action active">
										<center> HD 2 </center>
                                    </button>
                                    
									<button type="button" class="list-group-item list-group-item-action">
                                    <?php echo $dado2 ^ $paridade; ?>
                                    </button>
									
								</div>
							</td>
							<td>
								<div class="list-group">
									<button type="button" class="list-group-item list-group-item-action active">
										<center> HD 3 </center>
									</button>
									<button type="button" class="list-group-item list-group-item-action">Paridade</button>
								</div>
							</td>
						</tr>
					</table>

				</div>
				<!-- -->
				<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
				<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
			</div>
		</div>
	</div>




















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	 crossorigin="anonymous"></script>


</body>